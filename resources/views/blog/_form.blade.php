<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- TITRE --}}
    <label class="block mb-2 font-semibold">Titre de l'article</label>
    <input name="title" type="text" class="w-full p-2 border rounded mb-4" 
        value="{{ old('title', $blog->title ?? '') }}" required>

    {{-- EXCERPT --}}
    <label class="block mb-2 font-semibold">Résumé / Extrait</label>
    <textarea name="excerpt" class="w-full p-2 border rounded mb-4">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>

    {{-- CONTENU --}}
    <label class="block mb-2 font-semibold">Contenu</label>
    <textarea name="content" class="w-full p-2 border rounded mb-4" rows="6" required>{{ old('content', $blog->content ?? '') }}</textarea>

    {{-- IMAGE --}}
    <label class="block mb-2 font-semibold">Image de l'article</label>
    @if($blog->image ?? false)
        <img id="image-preview" src="{{ asset('storage/'.$blog->image) }}" 
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
