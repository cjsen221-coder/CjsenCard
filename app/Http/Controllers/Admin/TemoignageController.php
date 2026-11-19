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
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $originalName);

            $request->file('image')->move(public_path('temoignages'), $filename);

            $validated['image'] = 'temoignages/' . $filename;
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
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($temoignage->image && file_exists(public_path($temoignage->image))) {
                unlink(public_path($temoignage->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->move(public_path('temoignages'), $filename);

            $validated['image'] = 'temoignages/' . $filename;
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
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
            'image' => 'required|file|max:5120',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            // Vérifier que le fichier a bien été téléchargé
            if (!$file->isValid()) {
                return back()->withErrors([
                    'image' => 'Le téléchargement de votre image a échoué.'
                ])->withInput();
            }

            // Vérifier manuellement les extensions autorisées
            $extension = strtolower($file->getClientOriginalExtension());

            $extensionsAutorisees = ['jpg', 'jpeg', 'png'];

            if (!in_array($extension, $extensionsAutorisees, true)) {
                return back()->withErrors([
                    'image' => 'Veuillez choisir une image JPG ou PNG.'
                ])->withInput();
            }

            // Générer un nom de fichier sécurisé
            $filename = uniqid('temoignage_', true) . '.' . $extension;

            // Créer le dossier si nécessaire
            $destination = public_path('temoignages');

            if (!is_dir($destination)) {
                mkdir($destination, 0755, true);
            }

            // Déplacer le fichier
            $file->move($destination, $filename);

            $imagePath = 'temoignages/' . $filename;
        }

        Temoignage::create([
            'nom' => $validated['nom'],
            'profession' => $validated['profession'] ?? null,
            'message' => $validated['message'],
            'image' => $imagePath,
            'is_approved' => false,
        ]);

        return back()->with(
            'success',
            'Votre témoignage a été envoyé et sera affiché après validation.'
        );
    }

    public function approve(Temoignage $temoignage)
    {
        $temoignage->is_approved = !$temoignage->is_approved; // Bascule l’état
        $temoignage->save();

        $status = $temoignage->is_approved ? 'validé' : 'invalidé';

        return back()->with('success', "Le témoignage a été $status.");
    }
}
