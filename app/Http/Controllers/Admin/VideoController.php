<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(12);

        // Transformer chaque vidéo pour créer l'URL d'embed
        $videos->getCollection()->transform(function ($video) {

            // --- YouTube ---
            if (strpos($video->url, 'youtube.com/watch') !== false || strpos($video->url, 'youtu.be') !== false) {
                if (strpos($video->url, 'youtu.be') !== false) {
                    // Format court : youtu.be/ID
                    $videoId = last(explode('/', $video->url));
                } else {
                    // Format long : youtube.com/watch?v=ID
                    parse_str(parse_url($video->url, PHP_URL_QUERY), $query);
                    $videoId = $query['v'] ?? null;
                }

                if ($videoId) {
                    $video->embed_url = "https://www.youtube.com/embed/{$videoId}";
                }
            }

            // --- Vimeo ---
            if (strpos($video->url, 'vimeo.com') !== false) {
                preg_match("/vimeo\.com\/([0-9]+)/", $video->url, $matches);
                $videoId = $matches[1] ?? null;
                if ($videoId) {
                    $video->embed_url = "https://player.vimeo.com/video/{$videoId}";
                }
            }

            return $video;
        });

        return view('video.index', compact('videos'));
    }


    public function create()
    {
        return view('video.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url',
        ]);

        Video::create($data);

        return redirect()->route('videos.index')->with('success', 'Vidéo créée avec succès !');
    }

    public function edit(Video $video)
    {
        return view('video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url',
        ]);

        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'Vidéo mise à jour avec succès !');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Vidéo supprimée avec succès !');
    }
}
