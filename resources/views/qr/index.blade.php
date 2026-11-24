<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">QR codes des cartes membres</h2>
            <a href="{{ route('qr.scan') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm" style="background-color: rgb(0 51 102 / var(--tw-bg-opacity, 1));">Scanner un QR code</a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (session('success'))
                <div class="p-3 rounded bg-green-100 text-green-800">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="p-3 rounded bg-red-100 text-red-800">{{ session('error') }}</div>
            @endif
            @if ($errors->any())
                <div class="p-3 rounded bg-red-100 text-red-800">{{ $errors->first() }}</div>
            @endif

            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-2xl font-bold">{{ $stats['total'] }}</div>
                    <div class="text-sm text-gray-500">Générés</div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-2xl font-bold text-amber-600">{{ $stats['available'] }}</div>
                    <div class="text-sm text-gray-500">Disponibles</div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-2xl font-bold text-green-700">{{ $stats['assigned'] }}</div>
                    <div class="text-sm text-gray-500">Attribués</div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <form method="POST" action="{{ route('qr.generate') }}" class="bg-white p-4 rounded shadow space-y-3">
                    @csrf
                    <h3 class="font-semibold">Générer de nouveaux codes</h3>
                    <div class="flex items-end gap-3">
                        <div>
                            <label class="block text-sm text-gray-600">Nombre</label>
                            <input type="number" name="count" min="1" max="500" value="50" required
                                   class="border-gray-300 rounded-md w-28">
                        </div>
                        <button class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm">Générer</button>
                    </div>
                </form>

                <form method="GET" action="{{ route('qr.zip') }}" class="bg-white p-4 rounded shadow space-y-3">
                    <h3 class="font-semibold">Télécharger pour Canva (ZIP de SVG)</h3>
                    <div class="flex items-end gap-3">
                        <div>
                            <label class="block text-sm text-gray-600">Du n°</label>
                            <input type="number" name="from" min="1" class="border-gray-300 rounded-md w-24">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600">Au n°</label>
                            <input type="number" name="to" min="1" class="border-gray-300 rounded-md w-24">
                        </div>
                        <button class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm">Télécharger</button>
                    </div>
                    <p class="text-xs text-gray-500">Seuls les codes encore disponibles sont inclus. Laissez vide pour tout prendre.</p>
                </form>
            </div>

            <div class="bg-white rounded shadow overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-gray-600">
                        <tr>
                            <th class="px-4 py-2">Code</th>
                            <th class="px-4 py-2">Statut</th>
                            <th class="px-4 py-2">Membre</th>
                            <th class="px-4 py-2">Attribué le</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @forelse ($qrs as $qr)
                            <tr>
                                <td class="px-4 py-2 font-mono">{{ $qr->code }}</td>
                                <td class="px-4 py-2">
                                    @if ($qr->isAssigned())
                                        <span class="text-green-700">Attribué</span>
                                    @else
                                        <span class="text-amber-600">Disponible</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2">
                                    @if ($qr->card)
                                        <a href="{{ route('cards.show', $qr->card) }}" class="text-indigo-600 hover:underline">{{ $qr->card->name }}</a>
                                    @else
                                        —
                                    @endif
                                </td>
                                <td class="px-4 py-2">{{ $qr->assigned_at?->format('d/m/Y H:i') ?? '—' }}</td>
                                <td class="px-4 py-2 text-right space-x-3">
                                    @unless ($qr->isAssigned())
                                        <a href="{{ route('qr.assign', $qr->code) }}" class="text-indigo-600 hover:underline">Attribuer</a>
                                    @endunless
                                    <a href="{{ route('qr.svg', $qr->code) }}" class="text-gray-600 hover:underline">SVG</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-6 text-center text-gray-500">Aucun code généré pour l’instant.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $qrs->links() }}
        </div>
    </div>
</x-app-layout>
