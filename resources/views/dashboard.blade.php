<x-app-layout>
    @php
        // Comptes pour les cartes
        $cardSimple = \App\Models\Card::where('honorMember', 'Membre simple')->count();
        $cardHonor = \App\Models\Card::where('honorMember', 'Membre d\'honneur')->count();
    @endphp

    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="text-2xl font-bold text-[#003366]">
                Bienvenue, {{ Auth::user()->name }} 👋
            </h2>
            <div class="flex gap-3 flex-wrap">
                <a href="{{ route('cards.create') }}"
                    class="bg-[#003366] text-white px-4 py-2 rounded-lg shadow hover:bg-[#006B8F] transition">
                    ➕ Nouvelle carte
                </a>
                <a href="{{ route('blogs.index') }}"
                    class="bg-[#003366] text-white px-4 py-2 rounded-lg shadow hover:bg-[#006B8F] transition">
                    📝 Blog
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

        <!-- Statistiques Générales : deux blocs par ligne -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Cartes -->
            <div class="flex flex-col bg-[#006B8F]/10 p-6 rounded-xl shadow hover:shadow-xl transition justify-between">
                <h4 class="text-[#003366] font-semibold mb-2">Cartes</h4>
                <p class="text-2xl font-bold text-[#003366]">{{ $cardSimple + $cardHonor }}</p>
                <p class="text-[#003366]/70 text-sm mt-1">Total</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="bg-[#23C1B5]/20 text-[#23C1B5] px-2 py-1 rounded-full text-xs">Simple:
                        {{ $cardSimple }}</span>
                    <span class="bg-[#F6B623]/20 text-[#F6B623] px-2 py-1 rounded-full text-xs">Honneur:
                        {{ $cardHonor }}</span>
                </div>
            </div>

            <div class="bg-[#006B8F]/10 p-6 rounded-xl shadow">
                <h3 class="text-lg font-semibold text-[#003366] mb-4">Témoignages</h3>
                <p>Total : <strong>{{ \App\Models\Temoignage::count() }}</strong></p>
                <a href="{{ route('temoignage.index') }}" class="text-[#F6B623] mt-2 inline-block hover:underline">Voir
                    plus</a>
            </div>


            <!-- Blog -->
            <div class="bg-[#23C1B5]/10 p-6 rounded-xl shadow hover:shadow-xl transition">
                <h4 class="text-[#003366] font-semibold mb-2">Blog</h4>
                <p class="text-2xl font-bold text-[#003366]">{{ \App\Models\Blog::count() }}</p>
                <p class="text-[#003366]/70 text-sm mt-1">Articles</p>
                <a href="{{ route('blogs.index') }}" class="text-[#E67C35] mt-2 inline-block hover:underline">Voir
                    tous</a>
            </div>

            <!-- Médias -->
            <div class="bg-[#23C1B5]/10 p-6 rounded-xl shadow hover:shadow-xl transition">
                <h4 class="text-[#003366] font-semibold mb-2">Médias</h4>
                <p class="text-2xl font-bold text-[#003366]">{{ \App\Models\Media::count() }}</p>
                <p class="text-[#003366]/70 text-sm mt-1">Images</p>
                <a href="{{ route('medias.index') }}" class="text-[#E67C35] mt-2 inline-block hover:underline">Voir
                    tous</a>
            </div>


        </section>
        <!-- Témoignages & Domaines -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- Vidéos -->
            <div class="bg-[#23C1B5]/10 p-6 rounded-xl shadow hover:shadow-xl transition">
                <h4 class="text-[#003366] font-semibold mb-2">Vidéos</h4>
                <p class="text-2xl font-bold text-[#003366]">{{ \App\Models\Video::count() }}</p>
                <p class="text-[#003366]/70 text-sm mt-1">Total</p>
                <a href="{{ route('videos.index') }}" class="text-[#E67C35] mt-2 inline-block hover:underline">Voir
                    toutes</a>
            </div>

            <div class="bg-[#23C1B5]/10 p-6 rounded-xl shadow">
                <h3 class="text-lg font-semibold text-[#003366] mb-4">Domaines d'action</h3>
                <p>Total : <strong>{{ \App\Models\Domaine::count() }}</strong></p>
                <a href="{{ route('domaine.index') }}" class="text-[#F6B623] mt-2 inline-block hover:underline">Voir
                    plus</a>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- Graphique Cartes -->
            <div class="flex bg-white p-6 rounded-xl shadow justify-center items-center">
                <canvas id="cardsStatsChart" class="w-full h-64 max-w-md"></canvas>
            </div>

            <div class="bg-[#23C1B5]/10 p-6 rounded-xl shadow">
                <h3 class="text-lg font-semibold text-[#003366] mb-4">Newsletters</h3>
                @if(\App\Models\Newsletter::count() > 0)
                    <div class="overflow-x-auto">
                        @php
                            $newsletters = \App\Models\Newsletter::latest()->get();
                            $total = $newsletters->count();
                        @endphp

                        <table class="min-w-full divide-y divide-[#003366]/30">
                            <thead class="bg-[#003366]/10">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">#</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-[#003366]/20">
                                @foreach($newsletters as $newsletter)
                                    <tr>
                                        <!-- Numéro décroissant -->
                                        <td class="px-6 py-4 whitespace-nowrap">{{  $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $newsletter->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-[#003366]/70 text-sm">
                                            {{ $newsletter->created_at->format('d M Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                @else
                    <p class="text-[#003366]/70">Aucune inscription à la newsletter pour le moment.</p>
                @endif
            </div>
        </section>


        <!-- Newsletters -->
        {{-- <section class="bg-[#23C1B5]/10 p-6 rounded-xl shadow mt-6">
            <h3 class="text-lg font-semibold text-[#003366] mb-4">Newsletters</h3>
            @if(\App\Models\Newsletter::count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-[#003366]/30">
                    <thead class="bg-[#003366]/10">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">
                                #</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">
                                Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-[#003366] uppercase tracking-wider">
                                Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#003366]/20">
                        @foreach(\App\Models\Newsletter::latest()->get() as $newsletter)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $newsletter->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $newsletter->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-[#003366]/70 text-sm">{{
                                $newsletter->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-[#003366]/70">Aucune inscription à la newsletter pour le moment.</p>
            @endif
        </section> --}}

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('cardsStatsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Cartes simples', 'Membres d’honneur'],
                datasets: [{
                    label: 'Nombre de cartes',
                    data: [{{ $cardSimple }}, {{ $cardHonor }}],
                    backgroundColor: ['#003366', '#F6B623'],
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { color: '#003366', font: { size: 13 } } },
                    y: { grid: { color: '#23C1B5/20' }, ticks: { beginAtZero: true, color: '#003366', font: { size: 13 } } }
                }
            }
        });
    </script>
</x-app-layout>