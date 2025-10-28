<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des médias
            </h2>
            <a href="{{ route('medias.create') }}"
                class="bg-[#003366] text-white px-4 py-2 rounded hover:bg-[#002244] transition">
                ➕ Nouveau média
            </a>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        @forelse($media as $item)
            <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition-all duration-300">

                <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover rounded mb-2">

                <h3 class="text-lg font-bold">{{ $item->title }}</h3>
                <p class="text-sm text-gray-500">{{ \Illuminate\Support\Str::limit($item->description, 60) }}</p>

                <div class="flex justify-between mt-3">
                    <a href="{{ route('medias.edit', $item) }}" class="text-yellow-600 hover:underline">✏️ Modifier</a>
                    <form action="{{ route('medias.destroy', $item) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">🗑️ Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">Aucun média trouvé.</div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $media->links() }}
    </div>
</x-app-layout>
