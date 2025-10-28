<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Media;
use App\Models\Video;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function accueil()
    {
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

        return view('site.accueil', compact('blogs', 'gallery', 'videos'));
    }


    public function domaines()
    {
        return view('site.domaine');
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
        // Récupère tous les articles, toutes les images et toutes les vidéos
        $blogs = Blog::latest()->get();
        $gallery = Media::latest()->get();
        $videos = Video::latest()->get();

        return view('site.mediatheque', compact('blogs', 'gallery', 'videos'));
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
}
