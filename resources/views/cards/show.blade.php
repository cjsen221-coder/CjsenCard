<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Details d'une carte
            </h2>

            <a href="{{ route('cards.create') }}"
                class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                ➕ Nouvelle carte
            </a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded shadow">
        <!-- En-tête avec avatar -->
        <div class="flex items-center gap-4 mb-6">
            <img src="{{ $card->avatar ? asset('storage/' . $card->avatar) : asset('images/default-avatar.jpg') }}"
                class="w-24 h-24 rounded-full border-4 border-yellow-400 object-cover" />
            <div>
                <h2 class="text-2xl font-bold">{{ $card->name }}</h2>
                <p class="text-gray-600">{{ ucfirst($card->role) }}</p>
            </div>
        </div>

        <!-- Infos personnelles + QR -->
        <div class="flex justify-between items-start">
            <div class="space-y-2 text-gray-800 text-sm max-w-[60%]">
                <h3 class="font-semibold text-lg text-blue-900 mb-2">Informations personnelles</h3>

                @if($card->gender)
                    <p><strong>Sexe :</strong> {{ ucfirst($card->gender) }}</p>
                @endif
                @if($card->birthdate)
                    <p><strong>Date de naissance :</strong> {{ \Carbon\Carbon::parse($card->birthdate)->format('d/m/Y') }}
                    </p>
                @endif
                @if($card->nationality)
                    <p><strong>Nationalité :</strong> {{ $card->nationality }}</p>
                @endif
                @if($card->address)
                    <p><strong>Adresse :</strong> {{ $card->address }}</p>
                @endif
                @if($card->region)
                    <p><strong>Région :</strong> {{ $card->region }}</p>
                @endif
                @if($card->city)
                    <p><strong>Ville :</strong> {{ $card->city }}</p>
                @endif

                <h3 class="font-semibold text-lg text-blue-900 mt-4">Coordonnées</h3>
                @if($card->email)
                    <p><strong>Email :</strong> {{ $card->email }}</p>
                @endif
                @if($card->phone)
                    <p><strong>Téléphone :</strong> {{ $card->phone }}</p>
                @endif
                @if($card->whatsapp)
                    <p><strong>WhatsApp :</strong> {{ $card->whatsapp }}</p>
                @endif

                @if($card->slug)
                    <p><strong>Identifiant public (slug) :</strong> {{ $card->slug }}</p>
                @endif
            </div>

            <div class="qr-code">
                <img src="data:image/svg+xml;base64,{{ $qr }}" alt="QR Code de {{ $card->name }}" class="w-40 h-40" />
            </div>
        </div>

        <!-- Boutons -->
        <div class="mt-6 flex gap-4 justify-center">
            <a href="{{ route('cards.index') }}" class="text-blue-600 hover:underline">⬅️ Retour à la liste</a>
            @auth
                <div>
                    {{-- <a href="{{ route('cards.pdf', $card) }}" class="text-blue-600 font-semibold" target="_blank">📄
                        PDF</a> --}}
                    <a href="{{ route('cards.qr', $card) }}" class="text-green-600 font-semibold">🔗 PDF</a>

                </div>
                <a href="{{ route('cards.edit', $card) }}" class="text-yellow-600 hover:underline">✏️ Modifier</a>

                <form action="{{ route('cards.destroy', $card) }}" method="POST"
                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette carte ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">🗑️ Supprimer</button>
                </form>
            @endauth
        </div>
    </div>

</x-app-layout>