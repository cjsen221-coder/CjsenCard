<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10">


        <x-slot name="header">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Liste des Cartes
                </h2>

                <!-- Barre de recherche centrée -->
                <div class="flex justify-center md:justify-center gap-2">
                    <form id="searchForm" action="{{ route('cards.index') }}" method="GET" class="flex">
                        <!-- Sélecteur de type -->
                        <select name="type"
                            class="px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="name" {{ request('type') == 'name' ? 'selected' : '' }}>Nom</option>
                            <option value="gender" {{ request('type') == 'gender' ? 'selected' : '' }}>Sexe</option>
                            <option value="address" {{ request('type') == 'address' ? 'selected' : '' }}>Adresse</option>
                            <option value="region" {{ request('type') == 'region' ? 'selected' : '' }}>Région</option>
                            <option value="email" {{ request('type') == 'email' ? 'selected' : '' }}>Email</option>
                            <option value="phone" {{ request('type') == 'phone' ? 'selected' : '' }}>Téléphone</option>
                        </select>

                        <!-- Champ de saisie -->
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher..."
                            class="px-4 py-2 border-t border-b border-r rounded-r-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </form>
                </div>




                @if(session('success'))
                    <div class="mb-2 p-2 bg-green-100 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('cards.create') }}"
                    class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                    ➕ Nouvelle carte
                </a>
            </div>
        </x-slot>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse($cards as $card)
                <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition-all duration-300">

                    {{-- Lien vers la page détail --}}
                    <a href="{{ route('cards.show', $card) }}" class="flex items-center gap-4 mb-4">
                        <img src="{{ $card->avatar ? asset($card->avatar) : asset('images/default-avatar.jpg') }}"
                            alt="Avatar de {{ $card->name }}"
                            class="w-16 h-16 rounded-full object-cover border-2 border-blue-600">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $card->name }}</h3>
                            <p class="text-sm text-gray-500">{{ $card->role }}</p>
                        </div>
                    </a>

                    {{-- Infos principales --}}
                    <div class="text-sm text-gray-700 space-y-1 mb-4">
                        @if($card->email)
                            <p><strong>Email :</strong> {{ $card->email }}</p>
                        @endif
                        @if($card->phone)
                            <p><strong>Téléphone :</strong> {{ $card->phone }}</p>
                        @endif
                        @if($card->whatsapp)
                            <p><strong>Adresse :</strong> {{ $card->address }}</p>
                        @endif
                    </div>

                    {{-- Actions --}}
                    <div class="flex justify-between items-center border-t pt-2">
                        <div>
                            <a href="{{ route('cards.qr', $card) }}" class="text-blue-600 font-semibold hover:underline">
                                📄 PDF</a>
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ route('cards.edit', $card) }}"
                                class="text-yellow-600 font-semibold hover:underline">✏️ Modifier</a>
                            <form action="{{ route('cards.destroy', $card) }}" method="POST"
                                onsubmit="return confirm('Confirmer la suppression ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-semibold hover:underline">🗑️
                                    Supprimer</button>
                            </form>
                        </div>
                    </div>

                </div>
            @empty
                </div>
                <div class="neon-container">
                    <h1 class="neon-text">⚠️ Aucune carte trouvée.</h1>
                </div>

            @endforelse


        <div class="mt-6">
            {{ $cards->links() }}
        </div>
    </div>
</x-app-layout>