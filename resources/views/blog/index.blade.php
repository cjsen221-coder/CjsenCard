<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10">
        <x-slot name="header">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    La Liste des Articles
                </h2>
                <a href="{{ route('blogs.create') }}"
                    class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                    ➕ Nouvel Article
                </a>
            </div>
        </x-slot>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($blogs as $blog)
                <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('blogs.show', $blog) }}" class="flex flex-col gap-4 mb-4">
                        @if($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full h-48 object-cover rounded-md">
                        @endif
                        <h3 class="text-xl font-bold text-gray-900">{{ $blog->title }}</h3>
                        <p class="text-gray-700">{{ Str::limit($blog->excerpt, 80) }}</p>
                        <small class="text-gray-500">Publié le {{ $blog->created_at->format('d M Y') }}</small>
                    </a>
                    <div class="flex justify-between items-center border-t pt-2">
                        <a href="{{ route('blogs.edit', $blog) }}"
                            class="text-yellow-600 font-semibold hover:underline">✏️ Modifier</a>
                        <form action="{{ route('blogs.destroy', $blog) }}" method="POST"
                            onsubmit="return confirm('Confirmer la suppression ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 font-semibold hover:underline">🗑️ Supprimer</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500 mt-10">
                    ⚠️ Aucun article trouvé.
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $blogs->links() }}
        </div>
    </div>
</x-app-layout>
