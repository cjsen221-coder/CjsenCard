<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier l’événement : {{ $media->title }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-xl p-6">
        @include('media._form', [
            'action' => route('medias.update', $media),
            'submitLabel' => 'Mettre à jour',
            'isEdit' => true,
            'media' => $media
        ])
    </div>
</x-app-layout>
