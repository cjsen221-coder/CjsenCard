<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">Événements publiés</h2>
            <a href="{{ route('medias.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">➕ Nouveau</a>
        </div>
    </x-slot>

   <div class="max-w-6xl mx-auto mt-6 space-y-8">
    @foreach($events as $event)
        <div class="bg-white p-4 shadow rounded">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="font-bold text-lg">{{ $event->title }}</h3>
                    <p class="text-gray-600 text-sm mb-3">{{ $event->description }}</p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('medias.edit', $event) }}" class="text-yellow-600">✏</a>
                    <form action="{{ route('medias.destroy', $event) }}" method="POST"
                        onsubmit="return confirm('Supprimer cet événement ?');" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-600">🗑</button>
                    </form>
                </div>
            </div>

            <!-- Flex pour 3 colonnes fixes -->
            <div class="flex flex-wrap -mx-2 mt-4">
                @foreach($event->media as $media)
                    <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('public/' . $media->image) }}" class="w-full h-auto object-cover rounded">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $events->links() }}
    </div>
</div>

</x-app-layout>