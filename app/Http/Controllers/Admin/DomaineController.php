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
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('domaines', 'public');
        }

        Domaine::create($validated);
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
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('domaines', 'public');
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
