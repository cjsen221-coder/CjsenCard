<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- TITRE --}}
    <label class="block mb-2 font-semibold">Titre</label>
    <input type="text" name="title" class="w-full p-2 border rounded mb-4"
           value="{{ old('title', $media->title ?? '') }}" required>

    @if($isEdit)
        <input type="text" name="event_id" class="w-full p-2 border rounded mb-4"
               value="{{ $media->id }}" readonly>
    @endif

    {{-- DESCRIPTION --}}
    <label class="block mb-2 font-semibold">Description</label>
    <textarea name="description" class="w-full p-2 border rounded mb-4"
              rows="4">{{ old('description', $media->description ?? '') }}</textarea>

    {{-- NOUVELLES IMAGES --}}
    <label class="block mb-2 font-semibold">Nouvelles images</label>
    <div id="new-images-preview" class="flex flex-wrap gap-2 mb-4"></div>

    <input type="file" name="images[]" id="images"
           class="w-full p-2 border rounded mb-4"
           accept="image/*" multiple>

    {{-- IMAGES EXISTANTES --}}
    @if($isEdit && isset($media->media))
        <label class="block mb-2 font-semibold">Images existantes</label>
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($media->media as $img)
                <div class="relative w-[100px] h-[100px] border rounded overflow-hidden">
                    <img src="{{ asset('public/' . $img->image) }}"
                         class="w-full h-full object-cover">

                    <button type="button" onclick="deleteImage({{ $img->id }});"
                            class="absolute top-1 right-1 bg-red-600 text-white text-xs rounded-full 
                                   w-5 h-5 flex items-center justify-center hover:bg-red-700">
                        ✕
                    </button>
                </div>
            @endforeach
        </div>
    @endif

    {{-- SUBMIT --}}
    <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
        {{ $submitLabel }}
    </button>
</form>

{{-- FORMULAIRE SUPPRESSION IMAGE --}}
<form id="delete-image-form" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

<script>
function deleteImage(id) {
    if (confirm('Supprimer cette image ?')) {
        let form = document.getElementById('delete-image-form');
        form.action = "/media-image/" + id;
        form.submit();
    }
}
</script>

{{-- SCRIPT UNIQUE & FONCTIONNEL POUR APERCU --}}
<script>
    const input = document.getElementById('images');
    const preview = document.getElementById('new-images-preview');

    let selectedFiles = [];

    input.addEventListener('change', function () {
        selectedFiles = selectedFiles.concat(Array.from(this.files));
        renderPreview();
        updateInputFiles();
    });

    function renderPreview() {
        preview.innerHTML = "";

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = e => {
                const box = document.createElement('div');
                box.classList.add(
                    'relative','w-[100px]','h-[100px]','border','rounded','overflow-hidden'
                );

                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full','h-full','object-cover');

                const btn = document.createElement('button');
                btn.innerText = '✕';
                btn.classList.add(
                    'absolute','top-1','right-1','bg-red-600','text-white','text-xs',
                    'rounded-full','w-5','h-5','flex','items-center','justify-center','hover:bg-red-700'
                );
                btn.onclick = () => removeFile(index);

                box.appendChild(img);
                box.appendChild(btn);
                preview.appendChild(box);
            };
            reader.readAsDataURL(file);
        });
    }

    function removeFile(index) {
        selectedFiles.splice(index, 1);
        renderPreview();
        updateInputFiles();
    }

    function updateInputFiles() {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }
</script>
