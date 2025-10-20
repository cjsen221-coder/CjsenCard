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

            <!-- Section bienvenue -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-lg">
                    👋 Salut {{ Auth::user()->name }} !
                    Bienvenue sur <strong>CJSENCARD</strong>, la plateforme dédiée à la virtualisation des cartes
                    membres de
                    Sen Carrefour Jeunesse.
                </div>
            </div>

            <!-- Section statistiques -->
            <div class="bg-white shadow-md rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-2">
                    <i class="fas fa-chart-bar text-[#003366] text-xl"></i>
                    Statistiques Générales
                </h3>

                <div
                    class="mt-6 flex flex-col lg:flex-row justify-between items-start lg:items-center text-gray-900 gap-4">

                    <!-- Bloc récapitulatif -->
                    <div class="flex-1 space-y-1">
                        <p><strong>Total cartes :</strong> {{ \App\Models\Card::count() }}</p>
                        <p><strong>Membres d’honneur :</strong>
                            {{ \App\Models\Card::where('honorMember', 'Membre d\'honneur')->count() }}</p>
                        <p><strong>Cartes simples :</strong>
                            {{ \App\Models\Card::where('honorMember', '!=', 'Membre d\'honneur')->count() }}</p>
                        <p><strong>Répartition par genre :</strong> Hommes :
                            ({{ \App\Models\Card::where('gender', 'Homme')->count() }}), Femmes :
                            ({{ \App\Models\Card::where('gender', 'Femme')->count() }})</p>
                    </div>

                    <!-- Bloc bouton -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('cards.index') }}"
                            class="inline-flex items-center gap-2 bg-[#003366] text-white px-5 py-2 rounded-md hover:bg-[#002244] transition">
                            <i class="fas fa-list"></i> Voir toutes les cartes
                        </a>
                    </div>

                </div>

                <!-- Diagramme unique -->
                <div class="flex justify-center w-full">
                    <canvas id="cardsStatsChart" style="max-width: 400px; height: 300px;"></canvas>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('cardsStatsChart').getContext('2d');

        const cardsStatsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Cartes simples', 'Membres d’honneur'],
                datasets: [{
                    label: 'Nombre de cartes',
                    data: [
                {{ \App\Models\Card::where('honorMember', '!=', 'Membre d\'honneur')->count() }},
                        {{ \App\Models\Card::where('honorMember', 'Membre d\'honneur')->count() }}
                    ],
                    backgroundColor: ['#003366', '#FFD700'],
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        ticks: { color: 'black', font: { size: 13 } },
                        grid: { display: false }
                    },
                    y: {
                        ticks: { color: 'black', font: { size: 13 } },
                        grid: { color: '#eee' },
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: { titleColor: 'black', bodyColor: 'black' }
                }
            }
        });
    </script>
</x-app-layout>