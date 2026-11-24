<x-app-layout>
    @php
        // ---------- Membres ----------
        $cardTotal = \App\Models\Card::count();
        $cardSimple = \App\Models\Card::where('honorMember', 'Membre simple')->count();
        $cardHonor = \App\Models\Card::where('honorMember', "Membre d'honneur")->count();
        $cardOther = max(0, $cardTotal - $cardSimple - $cardHonor);

        $typeLabels = ['Membres simples', 'Membres d’honneur'];
        $typeData = [$cardSimple, $cardHonor];
        $typeColors = ['#003366', '#F6B623'];
        if ($cardOther > 0) {
            $typeLabels[] = 'Autres';
            $typeData[] = $cardOther;
            $typeColors[] = '#23C1B5';
        }

        $latestCards = \App\Models\Card::latest()->take(5)->get();

        // Nouveaux membres sur les 6 derniers mois
        $months = collect(range(5, 0))->map(fn($i) => now()->startOfMonth()->subMonths($i));
        $byMonth = \App\Models\Card::where('created_at', '>=', $months->first())
            ->get(['created_at'])
            ->groupBy(fn($c) => $c->created_at->format('Y-m'));
        $monthLabels = $months->map(fn($m) => $m->locale('fr')->translatedFormat('M'))->all();
        $monthData = $months->map(fn($m) => $byMonth->get($m->format('Y-m'), collect())->count())->all();

        // ---------- QR codes ----------
        $qrTotal = \App\Models\CardQr::count();
        $qrAssigned = \App\Models\CardQr::whereNotNull('card_id')->count();
        $qrAvailable = $qrTotal - $qrAssigned;
        $qrPercent = $qrTotal > 0 ? (int) round($qrAssigned / $qrTotal * 100) : 0;
        $ringOffset = number_format(326.73 * (1 - $qrPercent / 100), 2, '.', '');

        // ---------- Newsletter ----------
        $newsletterTotal = \App\Models\Newsletter::count();
        $latestNewsletters = \App\Models\Newsletter::latest()->take(6)->get();

        // ---------- Contenus du site : [libellé, total, route, icône, teinte] ----------
        $contents = [
            ['Articles du blog', \App\Models\Blog::count(), 'blogs.index', '📝', 'bg-[#23C1B5]/20'],
            ['Médias', \App\Models\Media::count(), 'medias.index', '🖼️', 'bg-[#006B8F]/10'],
            ['Vidéos', \App\Models\Video::count(), 'videos.index', '🎬', 'bg-[#E67C35]/20'],
            ['Témoignages', \App\Models\Temoignage::count(), 'temoignage.index', '💬', 'bg-[#F6B623]/20'],
            ['Domaines d’action', \App\Models\Domaine::count(), 'domaine.index', '🎯', 'bg-[#003366]/10'],
        ];
    @endphp

    <x-slot name="header">
        <h2 class="text-xl font-semibold text-[#003366]">Tableau de bord</h2>
    </x-slot>

    <style>
        /* Seul mouvement de la page : la jauge des QR codes se remplit au chargement */
        .qr-ring {
            stroke-dashoffset: var(--offset);
            animation: qr-ring-fill 1.1s ease-out;
        }

        @keyframes qr-ring-fill {
            from {
                stroke-dashoffset: 326.73;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .qr-ring {
                animation: none;
            }
        }
    </style>

    {{-- <div class="mx-auto max-w-7xl space-y-6 px-4 py-8 sm:px-6 lg:px-8"> --}}
        <div class="mx-auto max-w-7xl space-y-6 py-8 sm:px-2 lg:px-4">

            {{-- ===================== Bandeau d'accueil ===================== --}}
            <section class="rounded-3xl bg-[#003366] p-6 text-white sm:p-8">
                <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                    <div class="max-w-xl">
                        <p class="text-sm text-white/70">{{ now()->locale('fr')->translatedFormat('l j F Y') }}</p>
                        <h1 class="mt-1 text-2xl font-bold sm:text-3xl">Bienvenue, {{ Auth::user()->name }} </h1>

                        <dl class="mt-6 flex flex-wrap gap-x-10 gap-y-4">
                            <div>
                                <dt class="text-sm text-white/70">Membres</dt>
                                <dd class="text-2xl font-semibold tabular-nums">{{ $cardTotal }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-white/70">QR codes disponibles</dt>
                                <dd class="text-2xl font-semibold tabular-nums">{{ $qrAvailable }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-white/70">Inscrits à la newsletter</dt>
                                <dd class="text-2xl font-semibold tabular-nums">{{ $newsletterTotal }}</dd>
                            </div>
                        </dl>

                        <div class="mt-7 flex flex-wrap gap-3">
                            <a href="{{ route('qr.scan') }}"
                                class="rounded-xl bg-[#F6B623] px-4 py-2.5 text-sm font-semibold text-[#003366] hover:bg-[#f8c34d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                                📷 Scanner un QR code
                            </a>
                            <a href="{{ route('qr.index') }}"
                                class="rounded-xl bg-white/10 px-4 py-2.5 text-sm font-semibold text-white ring-1 ring-white/30 hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                                Générer des QR codes
                            </a>
                            <a href="{{ route('blogs.create') }}"
                                class="rounded-xl bg-white/10 px-4 py-2.5 text-sm font-semibold text-white ring-1 ring-white/30 hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                                Nouvel article
                            </a>
                        </div>
                    </div>

                    {{-- Jauge : cartes attribuées --}}
                    <div class="flex items-center gap-5">
                        <div class="relative h-36 w-36 shrink-0">
                            <svg viewBox="0 0 120 120" class="h-36 w-36 -rotate-90" role="img"
                                aria-label="{{ $qrPercent }} % des QR codes sont attribués">
                                <circle cx="60" cy="60" r="52" fill="none" stroke="rgba(255,255,255,.15)"
                                    stroke-width="10" />
                                <circle class="qr-ring" cx="60" cy="60" r="52" fill="none" stroke="#23C1B5"
                                    stroke-width="10" stroke-linecap="round" stroke-dasharray="326.73"
                                    style="--offset: {{ $ringOffset }}" />
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-3xl font-bold tabular-nums">{{ $qrPercent }}&nbsp;%</span>
                                <span class="text-xs text-white/70">attribués</span>
                            </div>
                        </div>
                        <div class="text-sm leading-relaxed text-white/80">
                            @if ($qrTotal > 0)
                                <p><span class="text-lg font-semibold text-white">{{ $qrAssigned }}</span> cartes attribuées
                                </p>
                                <p>sur {{ $qrTotal }} QR codes générés</p>
                            @else
                                <p>Aucun QR code généré.</p>
                                <a href="{{ route('qr.index') }}"
                                    class="font-semibold text-[#F6B623] underline underline-offset-2">Créer le premier
                                    lot</a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            {{-- ===================== Graphiques ===================== --}}
            <section class="grid grid-cols-1 gap-6 lg:grid-cols-5">
                <div class="rounded-2xl bg-white p-6 ring-1 ring-[#003366]/10 lg:col-span-3">
                    <h3 class="text-base font-semibold text-[#003366]">Nouveaux membres</h3>
                    <p class="text-sm text-[#003366]/60">Cartes créées sur les 6 derniers mois</p>
                    <div class="relative mt-4 h-64">
                        <canvas id="monthsChart" role="img" aria-label="Nouveaux membres par mois"></canvas>
                    </div>
                </div>

                <div class="rounded-2xl bg-white p-6 ring-1 ring-[#003366]/10 lg:col-span-2">
                    <h3 class="text-base font-semibold text-[#003366]">Types de membres</h3>
                    <p class="text-sm text-[#003366]/60">{{ $cardTotal }} cartes au total</p>
                    <div class="relative mt-4 h-64">
                        <canvas id="typesChart" role="img" aria-label="Répartition des types de membres"></canvas>
                    </div>
                </div>
            </section>

            {{-- ===================== Derniers membres + contenus ===================== --}}
            <section class="grid grid-cols-1 gap-6 lg:grid-cols-5">

                <div class="rounded-2xl bg-white p-6 ring-1 ring-[#003366]/10 lg:col-span-3">
                    <div class="flex items-baseline justify-between">
                        <h3 class="text-base font-semibold text-[#003366]">Derniers membres</h3>
                        <a href="{{ route('qr.index') }}"
                            class="text-sm font-medium text-[#006B8F] hover:underline">Voir
                            tous les membres</a>
                    </div>

                    @forelse ($latestCards as $card)
                        <div class="flex items-center gap-3 border-t border-[#003366]/10 py-3 first:border-t-0">
                            @if ($card->avatar)
                                <img src="{{ asset('public/storage/' . $card->avatar) }}" alt=""
                                    class="h-10 w-10 rounded-full object-cover">
                            @else
                                <span
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-[#006B8F]/10 text-sm font-semibold text-[#006B8F]">
                                    {{ mb_strtoupper(mb_substr($card->name, 0, 1)) }}
                                </span>
                            @endif

                            <div class="min-w-0 flex-1">
                                <a href="{{ route('cards.show', $card) }}"
                                    class="block truncate text-sm font-semibold text-[#003366] hover:underline">{{ $card->name }}</a>
                                <p class="truncate text-sm text-[#003366]/60">{{ $card->role }}</p>
                            </div>

                            <div class="text-right">
                                @if ($card->honorMember === "Membre d'honneur")
                                    <span
                                        class="rounded-full bg-[#F6B623]/20 px-2.5 py-0.5 text-xs font-medium text-[#7a5200]">Membre
                                        d’honneur</span>
                                @else
                                    <span
                                        class="rounded-full bg-[#003366]/10 px-2.5 py-0.5 text-xs font-medium text-[#003366]">{{ $card->honorMember }}</span>
                                @endif
                                <p class="mt-1 text-xs text-[#003366]/50">
                                    {{ $card->created_at->locale('fr')->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="mt-4 rounded-xl bg-[#003366]/5 p-5 text-sm text-[#003366]/70">
                            Aucun membre pour l’instant. Scannez un QR code pour attribuer la première carte.
                            <a href="{{ route('qr.scan') }}"
                                class="font-semibold text-[#006B8F] underline underline-offset-2">Scanner un QR code</a>
                        </div>
                    @endforelse
                </div>

                <div class="rounded-2xl bg-white p-6 ring-1 ring-[#003366]/10 lg:col-span-2">
                    <h3 class="text-base font-semibold text-[#003366]">Contenus du site</h3>
                    <ul class="mt-3 space-y-1">
                        @foreach ($contents as [$label, $count, $route, $icon, $tint])
                            <li>
                                <a href="{{ route($route) }}"
                                    class="flex items-center gap-3 rounded-xl px-2 py-2.5 hover:bg-[#003366]/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#006B8F]">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-lg {{ $tint }}"
                                        aria-hidden="true">{{ $icon }}</span>
                                    <span class="flex-1 text-sm font-medium text-[#003366]">{{ $label }}</span>
                                    <span class="text-lg font-semibold tabular-nums text-[#003366]">{{ $count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            {{-- ===================== Newsletter ===================== --}}
            <section class="rounded-2xl bg-white p-6 ring-1 ring-[#003366]/10">
                <div class="flex items-baseline justify-between">
                    <h3 class="text-base font-semibold text-[#003366]">Inscriptions à la newsletter</h3>
                    <span class="text-sm text-[#003366]/60">{{ $newsletterTotal }} au total, les 6 dernières
                        ci-dessous</span>
                </div>

                @if ($latestNewsletters->isNotEmpty())
                    <ul class="mt-3 grid grid-cols-1 gap-x-10 md:grid-cols-2">
                        @foreach ($latestNewsletters as $newsletter)
                            <li class="flex items-center justify-between gap-4 border-t border-[#003366]/10 py-3">
                                <span class="truncate text-sm text-[#003366]">{{ $newsletter->email }}</span>
                                <span
                                    class="shrink-0 text-sm text-[#003366]/60">{{ $newsletter->created_at->format('d/m/Y') }}</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="mt-3 text-sm text-[#003366]/70">Aucune inscription pour l’instant. Le formulaire du pied de
                        page
                        du site alimentera cette liste.</p>
                @endif
            </section>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.js"></script>
        <script>
            Chart.defaults.color = '#003366';
            Chart.defaults.font.family = getComputedStyle(document.body).fontFamily;

            new Chart(document.getElementById('monthsChart'), {
                type: 'bar',
                data: {
                    labels: @json($monthLabels),
                    datasets: [{
                        label: 'Nouveaux membres',
                        data: @json($monthData),
                        backgroundColor: '#006B8F',
                        borderRadius: 8,
                        maxBarThickness: 36
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { display: false } },
                        y: { beginAtZero: true, ticks: { precision: 0 }, grid: { color: 'rgba(0, 51, 102, 0.08)' } }
                    }
                }
            });

            new Chart(document.getElementById('typesChart'), {
                type: 'doughnut',
                data: {
                    labels: @json($typeLabels),
                    datasets: [{
                        data: @json($typeData),
                        backgroundColor: @json($typeColors),
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '68%',
                    plugins: { legend: { position: 'bottom', labels: { usePointStyle: true, padding: 16 } } }
                }
            });
        </script>
</x-app-layout>
