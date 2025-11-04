<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10">
        <x-slot name="header">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Témoignages des membres
                </h2>
                <a href="{{ route('temoignage.create') }}"
                    class="bg-[#003366] text-white text-sm px-4 py-2 rounded-md hover:bg-[#002244] transition">
                    ➕ Nouveau Témoignage
                </a>
            </div>
        </x-slot>

        {{-- Liste des témoignages --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @forelse($temoignages as $temoignage)
                <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="flex flex-col items-center text-center gap-3 mb-4">
                        @if($temoignage->image)
                            <img src="{{ asset('storage/'.$temoignage->image) }}" 
                                 alt="{{ $temoignage->nom }}"
                                 class="w-24 h-24 object-cover rounded-full border-2 border-primary shadow-md">
                        @else
                            <img src="{{ asset('images/logo-cjsen.jpg') }}" 
                                 alt="Image par défaut"
                                 class="w-24 h-24 object-cover rounded-full border-2 border-gray-300 opacity-70">
                        @endif

                        <h3 class="text-lg font-bold text-gray-900">{{ $temoignage->nom }}</h3>
                        <p class="text-sm text-gray-500 italic">{{ $temoignage->profession }}</p>
                    </div>

                    <p class="text-gray-700 text-sm leading-relaxed mb-4 border-l-4 border-primary pl-3">
                        “{{ Str::limit($temoignage->message, 150) }}”
                    </p>

                    <small class="text-gray-400 block mb-3 text-xs">
                        📅 Publié le {{ $temoignage->created_at->format('d M Y') }}
                    </small>

                    <div class="flex justify-between items-center mt-auto pt-3 border-t">
                        <a href="{{ route('temoignage.edit', $temoignage) }}"
                           class="text-yellow-600 font-semibold hover:text-yellow-800 hover:underline transition">
                            ✏️ Modifier
                        </a>
                        <form action="{{ route('temoignage.destroy', $temoignage) }}" method="POST"
                              onsubmit="return confirm('Confirmer la suppression de ce témoignage ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="text-red-600 font-semibold hover:text-red-800 hover:underline transition">
                                🗑️ Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500 mt-10 text-lg">
                    ⚠️ Aucun témoignage trouvé.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-8 flex justify-center">
            {{ $temoignages->links() }}
        </div>
    </div>
</x-app-layout>