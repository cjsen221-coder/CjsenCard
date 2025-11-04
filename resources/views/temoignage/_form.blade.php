<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- NOM --}}
    <label class="block mb-2 font-semibold">Nom</label>
    <input name="nom" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('nom', $temoignage->nom ?? '') }}" required>

    {{-- PROFESSION --}}
    <label class="block mb-2 font-semibold">Profession</label>
    <input name="profession" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('profession', $temoignage->profession ?? '') }}" required>

    {{-- MESSAGE --}}
    <label class="block mb-2 font-semibold">Message du témoignage</label>
    <textarea name="message" class="w-full p-2 border rounded mb-4" rows="5"
        placeholder="Écrivez ici le témoignage...">{{ old('message', $temoignage->message ?? '') }}</textarea>

    {{-- PHOTO --}}
    <label class="block mb-2 font-semibold">Photo du membre</label>
    @if($temoignage->image ?? false)
        <img id="image-preview" src="{{ asset('storage/' . $temoignage->image) }}" alt="image"
            class="w-32 h-32 object-cover mb-2 rounded-full border">
    @else
        <img id="image-preview" src="" alt="image" class="w-32 h-32 object-cover mb-2 hidden rounded-full border">
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