<?php

namespace App\Http\Controllers;

use App\Models\Card;
// use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


// use Dompdf\Dompdf;
// use Dompdf\Options;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Card::query();

        $type = $request->get('type', 'name'); // type sélectionné, par défaut "name"
        $search = $request->get('search');

        if ($search) {
            // Vérifie que le type est autorisé pour éviter l'injection SQL
            $allowed = ['name', 'gender', 'address', 'region', 'email', 'phone'];
            if (in_array($type, $allowed)) {
                $query->where($type, 'like', "%{$search}%");
            }
        }

        $cards = $query->orderBy('created_at', 'desc')->paginate(6);

        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|string|in:Homme,Femme,Autre|max:10',
            'birthdate' => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',

            'role' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',

            'avatar' => 'nullable|image|max:2048',
            'honorMember' => 'required|string|max:255',
        ]);

        // dd($data);   

        $data['serial_number'] = 'CJSEN-' . strtoupper(Str::random(8));
        // $data['honorMember'] = $request->has('honorMember') ? 1 : 0;

        $data['slug'] = Str::slug($data['name']);
        $originalSlug = $data['slug'];
        $count = 1;
        while (Card::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $originalSlug . '-' . $count++;
        }

        if ($request->hasFile('avatar')) {
            $filename = time() . '_' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('avatars'), $filename);
            $data['avatar'] = 'avatars/' . $filename;
        }

        Card::create($data);

        return redirect()->route('cards.index')->with('success', 'Carte membre créée avec succès.');
    }

    public function update(Request $request, Card $card)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|string|in:Homme,Femme,Autre|max:10',
            'birthdate' => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'region' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',

            'role' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',

            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'honorMember' => 'required|string|max:255',
        ]);

        // $validated['honorMember'] = $request->has('honorMember') ? 1 : 0;

        $slug = Str::slug($validated['name']);
        $originalSlug = $slug;
        $count = 1;
        while (Card::where('slug', $slug)->where('id', '!=', $card->id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        $validated['slug'] = $slug;

        if ($request->hasFile('avatar')) {
            if ($card->avatar && file_exists(public_path($card->avatar))) {
                unlink(public_path($card->avatar));
            }
            $filename = time() . '_' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('avatars'), $filename);
            $validated['avatar'] = 'avatars/' . $filename;
        }

        $card->update($validated);

        return redirect()->route('cards.index')->with('success', 'Carte mise à jour avec succès !');
    }


    public function destroy(Card $card)
    {
        if ($card->avatar && Storage::disk('public')->exists($card->avatar)) {
            Storage::disk('public')->delete($card->avatar);
        }
        $card->delete();

        return redirect()->route('cards.index')->with('success', 'Carte supprimée avec succès !');
    }


    public function show(Card $card)
    {
        $qr = base64_encode(
            QrCode::format('svg')
                ->size(300)
                ->generate(route('cards.show', $card))
        );

        // $qr = base64_encode(QrCode::format('png')->size(150)->generate(route('cards.show', $card)));

        return view('cards.show', compact('card', 'qr'));
    }
    public function showQr(Card $card)
    {
        // Vérifie si le membre est d'honneur
        $isHonor = $card->honorMember === 'Membre d\'honneur';

        // Génération du QR code
        $qr = base64_encode(
            QrCode::format('svg')
                ->size(300)
                ->generate(route('cards.show', $card))
        );

        $fileName = 'Carte-Membre-' . str_replace(' ', '-', $card->name);

        // Choix de la vue selon le type de membre
        if ($isHonor) {
            return view('cards.honneur', compact('card', 'qr', 'fileName'));
        } else {
            return view('cards.qr', compact('card', 'qr', 'fileName'));
        }
    }
}
