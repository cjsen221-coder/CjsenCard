<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     public function accueil()
    {
        return view('site.accueil');
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

         public function media()
    {
        return view('site.media');
    }

         public function blog()
    {
        return view('site.blog');
    }
    
     public function contact()
    {
        return view('site.contact');
    }


}
