<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Affiche la liste des témoignages
     */
    public function index()
    {
        $temoignages = Temoignage::latest()->paginate(6);
        return view('temoignage.index', compact('temoignages'));
    }

    /**
     * Affiche le formulaire de création
     */
    public function create()
    {
        return view('temoignage.create');
    }

    /**
     * Enregistre un nouveau témoignage
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('temoignages', 'public');
        }

        Temoignage::create($validated);

        return redirect()->route('temoignage.index')->with('success', 'Témoignage ajouté avec succès.');
    }

    /**
     * Affiche le formulaire d’édition
     */
    public function edit(Temoignage $temoignage)
    {
        return view('temoignage.edit', compact('temoignage'));
    }

    /**
     * Met à jour un témoignage existant
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('temoignages', 'public');
        }

        $temoignage->update($validated);

        return redirect()->route('temoignage.index')->with('success', 'Témoignage modifié avec succès.');
    }

    /**
     * Supprime un témoignage
     */
    public function destroy(Temoignage $temoignage)
    {
        $temoignage->delete();
        return back()->with('success', 'Témoignage supprimé avec succès.');
    }


    public function storeUser(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('temoignages', 'public');
        }

        Temoignage::create([
            'nom' => $request->nom,
            'profession' => $request->profession,
            'message' => $request->message,
            'image' => $imagePath,
            'is_approved' => false,
        ]);

        return back()->with('success', 'Votre témoignage a été envoyé et sera affiché après validation.');
    }
    public function approve(Temoignage $temoignage)
    {
        $temoignage->is_approved = !$temoignage->is_approved; // Bascule l’état
        $temoignage->save();

        $status = $temoignage->is_approved ? 'validé' : 'invalidé';

        return back()->with('success', "Le témoignage a été $status.");
    }
}
