<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation du champ email
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Enregistrement dans la base
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Message flash
        return back()->with('success', '✅ Merci pour votre inscription à notre newsletter !');
    }
}
