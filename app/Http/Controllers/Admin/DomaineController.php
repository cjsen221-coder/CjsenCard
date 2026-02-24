<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Domaine;

class DomaineController extends Controller
{
    public function index()
    {
        $domaines = Domaine::latest()->paginate(9);;
        return view('domaine.index', compact('domaines'));
    }

    public function create()
    {
        return view('domaine.create');
    }

    public function store(Request $request)
    {
        $data =  $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $originalName);

            $request->file('image')->move(public_path('domaines'), $filename);

            $data['image'] = 'domaines/' . $filename;
        }


        Domaine::create($data);
        return redirect()->route('domaine.index')->with('success', 'Domaine ajouté avec succès.');
    }

    public function edit(Domaine $domaine)
    {
        return view('domaine.edit', compact('domaine'));
    }

    public function update(Request $request, Domaine $domaine)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($domaine->image && file_exists(public_path($domaine->image))) {
                unlink(public_path($domaine->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->move(public_path('domaines'), $filename);

            $validated['image'] = 'domaines/' . $filename;
        }

        $domaine->update($validated);
        return redirect()->route('domaine.index')->with('success', 'Domaine modifié avec succès.');
    }

    public function destroy(Domaine $domaine)
    {
        $domaine->delete();
        return back()->with('success', 'Domaine supprimé avec succès.');
    }
}
