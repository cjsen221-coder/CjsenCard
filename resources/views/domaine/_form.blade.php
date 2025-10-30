<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- NOM DU DOMAINE --}}
    <label class="block mb-2 font-semibold">Nom du domaine</label>
    <input name="nom" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('nom', $domaine->nom ?? '') }}" required>

    {{-- TYPE DE DOMAINE --}}
    <label class="block mb-2 font-semibold">Type de domaine</label>
    <select name="type" class="w-full p-2 border rounded mb-4" required>
        <option value="">-- Sélectionnez un type --</option>
        <option value="formation" {{ old('type', $domaine->type ?? '') == 'formation' ? 'selected' : '' }}>Formation</option>
        <option value="causerie" {{ old('type', $domaine->type ?? '') == 'causerie' ? 'selected' : '' }}>Causerie</option>
        <option value="cohesion" {{ old('type', $domaine->type ?? '') == 'cohesion' ? 'selected' : '' }}>Activité de cohésion</option>
        <option value="sensibilisation" {{ old('type', $domaine->type ?? '') == 'sensibilisation' ? 'selected' : '' }}>Atelier de sensibilisation</option>
        <option value="action" {{ old('type', $domaine->type ?? '') == 'action' ? 'selected' : '' }}>Action communautaire</option>
        <option value="projet" {{ old('type', $domaine->type ?? '') == 'projet' ? 'selected' : '' }}>Projet spécial</option>
    </select>

    {{-- DESCRIPTION --}}
    <label class="block mb-2 font-semibold">Description</label>
    <textarea name="description" class="w-full p-2 border rounded mb-4" rows="5"
        placeholder="Décrivez brièvement ce domaine...">{{ old('description', $domaine->description ?? '') }}</textarea>

    {{-- IMAGE --}}
    <label class="block mb-2 font-semibold">Image du domaine</label>
    @if($domaine->image ?? false)
        <img id="image-preview" src="{{ asset('storage/'.$domaine->image) }}"
             alt="image" class="w-32 h-32 object-cover mb-2 rounded">
    @else
        <img id="image-preview" src="" alt="image" class="w-32 h-32 object-cover mb-2 hidden rounded">
    @endif
    <input id="image" name="image" type="file" class="w-full p-2 border rounded mb-4" accept="image/*">

    {{-- BOUTON --}}
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
        {{ $submitLabel }}
    </button>
</form>

<script>
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                imagePreview.src = reader.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
        }
    });
</script>
