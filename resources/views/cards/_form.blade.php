<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- NOM --}}
    <label class="block mb-2 font-semibold">Nom complet</label>
    <input name="name" type="text" class="w-full p-2 border rounded mb-4" value="{{ old('name', $card->name ?? '') }}"
        required>

    {{-- ROLE / STATUT --}}
    <label class="block mb-2 font-semibold">Statut / Fonction</label>
    <input name="role" type="text" class="w-full p-2 border rounded mb-4" value="{{ old('role', $card->role ?? '') }}"
        required>

    {{-- GENRE --}}
    <label class="block mb-2 font-semibold">Sexe</label>
    <select name="gender" class="w-full p-2 border rounded mb-4">
        <option value="">-- Choisir --</option>
        <option value="Homme" {{ old('gender', $card->gender ?? '') === 'Homme' ? 'selected' : '' }}>Homme</option>
        <option value="Femme" {{ old('gender', $card->gender ?? '') === 'Femme' ? 'selected' : '' }}>Femme</option>
        <option value="Autre" {{ old('gender', $card->gender ?? '') === 'Autre' ? 'selected' : '' }}>Autre</option>
    </select>

    {{-- DATE DE NAISSANCE --}}
    <label class="block mb-2 font-semibold">Date de naissance</label>
    <input name="birthdate" type="date" class="w-full p-2 border rounded mb-4"
        value="{{ old('birthdate', $card->birthdate ?? '') }}">

    {{-- NATIONALITÉ --}}
    <label class="block mb-2 font-semibold">Nationalité</label>
    <input name="nationality" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('nationality', $card->nationality ?? '') }}">

    {{-- ADRESSE --}}
    <label class="block mb-2 font-semibold">Adresse</label>
    <input name="address" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('address', $card->address ?? '') }}">

    {{-- RÉGION --}}
    <label class="block mb-2 font-semibold">Région</label>
    <input name="region" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('region', $card->region ?? '') }}">

    {{-- VILLE --}}
    <label class="block mb-2 font-semibold">Ville</label>
    <input name="city" type="text" class="w-full p-2 border rounded mb-4" value="{{ old('city', $card->city ?? '') }}">

    {{-- EMAIL --}}
    <label class="block mb-2 font-semibold">Email</label>
    <input name="email" type="email" class="w-full p-2 border rounded mb-4"
        value="{{ old('email', $card->email ?? '') }}">

    {{-- TÉLÉPHONE --}}
    <label class="block mb-2 font-semibold">Téléphone</label>
    <input name="phone" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('phone', $card->phone ?? '') }}">

    {{-- WHATSAPP --}}
    <label class="block mb-2 font-semibold">Numéro WhatsApp</label>
    <input name="whatsapp" type="text" class="w-full p-2 border rounded mb-4"
        value="{{ old('whatsapp', $card->whatsapp ?? '') }}">

    {{-- AVATAR --}}
    <label class="block mb-2 font-semibold">Photo / Avatar</label>
    @if($card->avatar ?? false)
        <img id="avatar-preview" src="{{ asset($card->avatar) }}" alt="avatar"
            class="w-20 h-20 rounded-full object-cover mb-2">
    @else
        <img id="avatar-preview" src="" alt="avatar" class="w-20 h-20 rounded-full object-cover mb-2 hidden">
    @endif

    <input id="avatar" name="avatar" type="file" class="w-full p-2 border rounded mb-4" accept="image/*">


    <div class="mb-4">
        <label for="honorMember" class="font-semibold block mb-1">Type de membre</label>
        <select id="honorMember" name="honorMember" class="w-full p-2 border rounded">
            <option value="Membre simple" {{ old('honorMember', $card->honorMember ?? 'Membre simple') === 'Membre simple' ? 'selected' : '' }}>Membre simple</option>
            <option value="Membre d'honneur" {{ old('honorMember', $card->honorMember ?? 'Membre simple') === "Membre d'honneur" ? 'selected' : '' }}>Membre d'honneur</option>
        </select>
    </div>

    {{-- BOUTON --}}
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
        {{ $submitLabel }}
    </button>
</form>


<script>
    const avatarInput = document.getElementById('avatar');
    const avatarPreview = document.getElementById('avatar-preview');

    avatarInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                avatarPreview.src = reader.result;
                avatarPreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            avatarPreview.src = '';
            avatarPreview.classList.add('hidden');
        }
    });
</script>