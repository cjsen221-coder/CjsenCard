<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $events = Event::with('media')->orderBy('id', 'desc')->paginate(12);
        return view('media.index', compact('events'));
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
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|max:20480',
        ]);

        // Créer l'événement (titre + description)
        $event = Event::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        // Enregistrer chaque image en tant que ligne dans la table media
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $img->getClientOriginalName());
                $img->move(public_path('medias'), $filename);

                Media::create([
                    'event_id' => $event->id,
                    'image' => 'medias/' . $filename,
                ]);
            }
        }

        return redirect()->route('medias.index')->with('success', 'Événement publié avec succès !');
    }

    public function show(Media $media)
    {
        return view('medias.show', compact('media'));
    }

    public function edit(Event $media)
    {
        // page d'édition de l'événement + gestion des images
        $media->load('media');
        return view('media.edit', compact('media'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_id' => 'nullable|string',
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|max:20480',
        ]);

        $event->update([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        // Ajouter de nouvelles images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {

                $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $img->getClientOriginalName());
                $img->move(public_path('medias'), $filename);

                // 👍 FIX : forcer event_id
                Media::create([
                    'event_id' => $request->event_id,
                    'image'    => 'medias/' . $filename,
                ]);
            }
        }

        return redirect()->route('medias.index')->with('success', 'Événement mis à jour !');
    }


    public function destroy(Event $event)
    {
        // Supprime les fichiers images liés
        foreach ($event->media as $m) {
            if ($m->image && file_exists(public_path($m->image))) {
                unlink(public_path($m->image));
            }
        }

        // Supprime l'événement (les media seront supprimés via contrainte onDelete cascade)
        $event->delete();

        return redirect()->route('medias.index')->with('success', 'Événement supprimé !');
    }

    // Supprimer une image individuelle
    public function destroyImage(Media $media)
    {
        if ($media->image && file_exists(public_path($media->image))) {
            unlink(public_path($media->image));
        }
        $media->delete();

        return back()->with('success', 'Image supprimée !');
    }
}
