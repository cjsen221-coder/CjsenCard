<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Domaine;
use App\Models\Media;
use App\Models\Temoignage;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function accueil()
    {

        $temoignages = Temoignage::latest()->get();

        // Derniers articles, galerie et vidéos
        $blogs = Blog::latest()->take(4)->get();
        $gallery = Media::latest()->take(6)->get();
        $videos = Video::latest()->take(3)->get();

        // Convertir les URLs YouTube en URLs embed
        $videos->transform(function ($video) {
            if (str_contains($video->url, 'youtube.com/watch?v=')) {
                $video->embed_url = str_replace('watch?v=', 'embed/', $video->url);
            } elseif (str_contains($video->url, 'youtu.be/')) {
                $video->embed_url = str_replace('youtu.be/', 'www.youtube.com/embed/', $video->url);
            } else {
                $video->embed_url = $video->url; // Pour d'autres sources
            }
            return $video;
        });

        return view('site.accueil', compact('blogs', 'gallery', 'videos', 'temoignages'));
    }

    public function domaines(Request $request)
    {
        // Pagination séparée pour chaque type
        $formations = Domaine::where('type', 'formation')
            ->latest()
            ->paginate(3, ['*'], 'page_formations');

        $causeries = Domaine::where('type', 'causerie')
            ->latest()
            ->paginate(3, ['*'], 'page_causeries');

        $sensibilisations = Domaine::where('type', 'sensibilisation')
            ->latest()
            ->paginate(3, ['*'], 'page_sensibilisations');

        $cohesions = Domaine::where('type', 'cohesion')
            ->latest()
            ->paginate(3, ['*'], 'page_cohesions');

        $actions = Domaine::where('type', 'action')
            ->latest()
            ->paginate(3, ['*'], 'page_actions');

        $projets = Domaine::where('type', 'projet')
            ->latest()
            ->paginate(3, ['*'], 'page_projets');

        return view('site.domaine', compact(
            'formations',
            'causeries',
            'sensibilisations',
            'cohesions',
            'actions',
            'projets'
        ));
    }


    public function apropos()
    {
        return view('site.apropos');
    }

    public function equipe()
    {
        return view('site.equipe');
    }

    public function mediatheque()
    {
        $gallery = Media::latest()->paginate(12);
        $videos = Video::latest()->paginate(6);

        // Convertir les URLs YouTube en URLs embed
        $videos->transform(function ($video) {
            if (str_contains($video->url, 'youtube.com/watch?v=')) {
                $video->embed_url = str_replace('watch?v=', 'embed/', $video->url);
            } elseif (str_contains($video->url, 'youtu.be/')) {
                $video->embed_url = str_replace('youtu.be/', 'www.youtube.com/embed/', $video->url);
            } else {
                $video->embed_url = $video->url; // Pour d'autres sources
            }
            return $video;
        });

        return view('site.mediatheque', compact('gallery', 'videos'));
    }
    public function showPhoto(Media $photo)
    {
        return view('site.photo_show', compact('photo'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('site.blog', compact('blogs'));
    }
    public function show_blog(Blog $blog)
    {
        return view('site.show_blog', compact('blog'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'messageContent' => $request->message,
        ];

        Mail::raw(
            "Nom: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['messageContent']}",
            function ($mail) use ($data) {
                $mail->to('cjsen221@gmail.com')
                    ->subject($data['subject'])
                    ->from($data['email'], $data['name']);
            }
        );

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }

     public function show_domaine($type, $id)
    {
        // On récupère le domaine correspondant à l’ID et au type
        $domaine = Domaine::where('id', $id)
            ->where('type', $type)
            ->firstOrFail();

        // On renvoie vers la vue détail
        return view('site.show_domaine', compact('domaine'));
    }
}
