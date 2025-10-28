<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(12);
        return view('media.index', compact('media'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('media', 'public');
        }

        Media::create($data);

        return redirect()->route('medias.index')->with('success', 'Média créé avec succès !');
    }

    public function edit(Media $media)
    {
        return view('media.edit', compact('media'));
    }

    public function update(Request $request, Media $media)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($media->image) Storage::disk('public')->delete($media->image);
            $data['image'] = $request->file('image')->store('media', 'public');
        }

        $media->update($data);

        return redirect()->route('medias.index')->with('success', 'Média mis à jour avec succès !');
    }

    public function destroy(Media $media)
    {
        if ($media->image) Storage::disk('public')->delete($media->image);
        $media->delete();

        return redirect()->route('media.index')->with('success', 'Média supprimé avec succès !');
    }
}