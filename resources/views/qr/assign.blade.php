<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Attribuer le QR code <span class="font-mono">{{ $qr->code }}</span>
        </h2>
    </x-slot>

    @php
        // Champs texte : [name, libellé, type, obligatoire]
        $fields = [
            ['name',        'Nom complet',        'text',  true],
            // ['birthdate',   'Date de naissance',  'date',  false],
            // ['nationality', 'Nationalité',        'text',  false],
            ['address',     'Adresse',            'text',  false],
            ['region',      'Région',             'text',  false],
            // ['city',        'Ville',              'text',  false],
            ['email',       'Email',              'email', false],
            ['phone',       'Téléphone',          'text',  false],
            // ['whatsapp',    'WhatsApp',           'text',  false],
            ['role',        'Rôle / Fonction',    'text',  true],
        ];

        // À adapter aux valeurs réellement utilisées dans votre base
        $honorOptions = ['Membre', "Membre d'honneur"];
    @endphp

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            @if (session('error'))
                <div class="mb-4 p-3 rounded bg-red-100 text-red-800">{{ session('error') }}</div>
            @endif
            @if ($errors->any())
                <div class="mb-4 p-3 rounded bg-red-100 text-red-800">Veuillez corriger les champs en erreur.</div>
            @endif

            <form method="POST" action="{{ route('qr.assign.store', $qr->code) }}" enctype="multipart/form-data"
                  class="bg-white p-6 rounded shadow grid sm:grid-cols-2 gap-4">
                @csrf

                @foreach ($fields as [$name, $label, $type, $required])
                    <div>
                        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
                            {{ $label }} @if ($required)<span class="text-red-600">*</span>@endif
                        </label>
                        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}"
                               @required($required) class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @error($name)<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                @endforeach

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Genre</label>
                    <select id="gender" name="gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">—</option>
                        @foreach (['Homme', 'Femme', 'Autre'] as $g)
                            <option value="{{ $g }}" @selected(old('gender') === $g)>{{ $g }}</option>
                        @endforeach
                    </select>
                    @error('gender')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="honorMember" class="block text-sm font-medium text-gray-700">
                        Type de membre <span class="text-red-600">*</span>
                    </label>
                    <select id="honorMember" name="honorMember" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($honorOptions as $opt)
                            <option value="{{ $opt }}" @selected(old('honorMember') === $opt)>{{ $opt }}</option>
                        @endforeach
                    </select>
                    @error('honorMember')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Photo</label>
                    <input id="avatar" name="avatar" type="file" accept="image/*" class="mt-1 block w-full text-sm">
                    @error('avatar')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="sm:col-span-2 flex items-center gap-3">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm" style="background-color: blue;">Valider et attribuer</button>
                    <a href="{{ route('qr.scan') }}" class="text-sm text-gray-600 hover:underline">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
