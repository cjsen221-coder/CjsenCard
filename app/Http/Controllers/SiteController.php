<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     public function accueil()
    {
        return view('site.accueil');
    }

    
     public function services()
    {
        return view('site.services');
    }

    
     public function apropos()
    {
        return view('site.apropos');
    }

    
     public function contact()
    {
        return view('site.contact');
    }

}
