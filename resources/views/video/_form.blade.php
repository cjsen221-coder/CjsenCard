<form action="{{ $action }}" method="POST">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- TITRE --}}
    <label class="block mb-2 font-semibold">Titre</label>
    <input name="title" type="text" class="w-full p-2 border rounded mb-4" value="{{ old('title', $video->title ?? '') }}" required>

    {{-- DESCRIPTION --}}
    <label class="block mb-2 font-semibold">Description</label>
    <textarea name="description" class="w-full p-2 border rounded mb-4">{{ old('description', $video->description ?? '') }}</textarea>

    {{-- URL --}}
    <label class="block mb-2 font-semibold">URL de la vidéo</label>
    <input name="url" type="url" class="w-full p-2 border rounded mb-4" value="{{ old('url', $video->url ?? '') }}" required>

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
        {{ $submitLabel }}
    </button>
</form>
