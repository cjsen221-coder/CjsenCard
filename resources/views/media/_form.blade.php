<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <label class="block mb-2 font-semibold">Titre</label>
    <input type="text" name="title" class="w-full p-2 border rounded mb-4" value="{{ old('title', $media->title ?? '') }}" required>

    <label class="block mb-2 font-semibold">Description</label>
    <textarea name="description" class="w-full p-2 border rounded mb-4" rows="4">{{ old('description', $media->description ?? '') }}</textarea>

    <label class="block mb-2 font-semibold">Image</label>
    @if($media->image ?? false)
        <img id="image-preview" src="{{ asset('storage/'.$media->image) }}" alt="image" class="w-40 h-40 object-cover mb-2 rounded">
    @else
        <img id="image-preview" class="hidden w-40 h-40 object-cover mb-2 rounded">
    @endif
    <input type="file" name="image" id="image" class="w-full p-2 border rounded mb-4" accept="image/*">

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
        {{ $submitLabel }}
    </button>
</form>

<script>
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
        }
    });
</script>
