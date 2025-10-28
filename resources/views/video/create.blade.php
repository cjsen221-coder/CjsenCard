<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ajouter une vidéo
            </h2>
            <a href="{{ route('videos.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
                ← Retour à la liste
            </a>
        </div>
    </x-slot>

    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-2 mb-4 rounded">
                <ul class="text-sm list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('video._form', [
            'action' => route('videos.store'),
            'video' => new App\Models\Video(),
            'submitLabel' => 'Créer',
            'isEdit' => false,
        ])
    </div>
</x-app-layout>
