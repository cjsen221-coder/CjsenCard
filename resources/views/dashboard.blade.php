<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Bienvenue, {{ Auth::user()->name }} sur CJSENCARD
            </h2>

            <a href="{{ route('cards.create') }}"
                class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                ➕ Nouvelle carte
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-lg">
                    👋 Salut {{ Auth::user()->name }} !
                    Bienvenue sur CJSENCARD, la plateforme dédiée à la virtualisation des cartes membres de
                    Sen Carrefour Jeunesse.
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">📇 Vos dernières cartes</h3>
                    <a href="{{ route('cards.index') }}"
                        class="inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                        Voir toutes les cartes
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>