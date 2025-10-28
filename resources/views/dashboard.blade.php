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

            <!-- Section statistiques générales -->
            <div class="bg-white shadow-md rounded-xl p-6 space-y-6">

                <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-2">
                    <i class="fas fa-chart-bar text-[#003366] text-xl"></i>
                    Statistiques Générales
                </h3>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Cartes -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-gray-700 mb-2">Cartes</h4>
                        <p><strong>Total :</strong> {{ \App\Models\Card::count() }}</p>
                        <p><strong>Membres d’honneur :</strong> {{ \App\Models\Card::where('honorMember','Membre d\'honneur')->count() }}</p>
                        <a href="{{ route('cards.index') }}" class="text-blue-600 mt-2 inline-block hover:underline">Voir toutes</a>
                    </div>

                    <!-- Blog -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-gray-700 mb-2">Blog</h4>
                        <p><strong>Articles :</strong> {{ \App\Models\Blog::count() }}</p>
                        <a href="{{ route('blogs.index') }}" class="text-blue-600 mt-2 inline-block hover:underline">Voir tous</a>
                    </div>

                    <!-- Media -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-gray-700 mb-2">Médias</h4>
                        <p><strong>Images :</strong> {{ \App\Models\Media::count() }}</p>
                        <a href="{{ route('medias.index') }}" class="text-blue-600 mt-2 inline-block hover:underline">Voir tous</a>
                    </div>

                    <!-- Vidéos -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <h4 class="font-semibold text-gray-700 mb-2">Vidéos</h4>
                        <p><strong>Total :</strong> {{ \App\Models\Video::count() }}</p>
                        <a href="{{ route('videos.index') }}" class="text-blue-600 mt-2 inline-block hover:underline">Voir toutes</a>
                    </div>

                </div>

                <!-- Diagramme Cartes -->
                <div class="flex justify-center w-full mt-6">
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
                    x: { ticks: { color: 'black', font: { size: 13 } }, grid: { display: false } },
                    y: { ticks: { color: 'black', font: { size: 13 } }, grid: { color: '#eee' }, beginAtZero: true }
                },
                plugins: { legend: { display: false }, tooltip: { titleColor: 'black', bodyColor: 'black' } }
            }
        });
    </script>

</x-app-layout>
