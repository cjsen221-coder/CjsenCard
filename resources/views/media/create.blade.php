<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un nouvel événement + photos
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-xl p-6">
        @include('media._form', [
            'action' => route('medias.store'),
            'submitLabel' => 'Créer',
            'isEdit' => false,
            'media' => null
        ])
    </div>
</x-app-layout>
