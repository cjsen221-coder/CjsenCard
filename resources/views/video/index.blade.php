<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des vidéos
            </h2>
            <a href="{{ route('videos.create') }}"
                class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                ➕ Ajouter une vidéo
            </a>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($videos as $video)
            <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition-all duration-300">
                <h3 class="text-xl font-bold mb-2">{{ $video->title }}</h3>
                <p class="text-gray-700 text-sm mb-2">{{ $video->description }}</p>
                <div class="mb-4">
                    <iframe width="100%" height="200" src="{{ $video->embed_url  }}" title="{{ $video->title }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="flex justify-between items-center border-t pt-2">
                    <a href="{{ route('videos.edit', $video) }}" class="text-yellow-600 font-semibold hover:underline">✏️
                        Modifier</a>
                    <form action="{{ route('videos.destroy', $video) }}" method="POST"
                        onsubmit="return confirm('Confirmer la suppression ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 font-semibold hover:underline">🗑️ Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center text-gray-500">
                ⚠️ Aucune vidéo trouvée.
            </div>
        @endforelse
    </div>

    <div class="mt-6 max-w-6xl mx-auto">
        {{ $videos->links() }}
    </div>
</x-app-layout>