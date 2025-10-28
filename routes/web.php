<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SiteController;

// Route::get('/', function () {
//     return view('site.accueil');
// });

// Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');
Route::get('/cards/{card:slug}', [CardController::class, 'show'])->name('cards.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [CardController::class, 'dashboard'])->name('dashboard');
    Route::get('/cards', [CardController::class, 'index'])->name('cards.index');
    Route::get('/create', [CardController::class, 'create'])->name('cards.create');
    Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

    Route::get('/cards/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');
    Route::put('/cards/{card}', [CardController::class, 'update'])->name('cards.update');
    Route::delete('/cards/{card}', [CardController::class, 'destroy'])->name('cards.destroy');

    Route::get('/cards/{card}/qr', [CardController::class, 'showQr'])->name('cards.qr');
    // Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');

    //Gérer les medias 
    Route::resource('blogs', BlogController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('videos', VideoController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






// Les routes du site
Route::get('/', [SiteController::class, 'accueil'])->name('site.accueil');
Route::get('/domaines', [SiteController::class, 'domaines'])->name('site.domaines');
Route::get('/apropos', [SiteController::class, 'apropos'])->name('site.apropos');
Route::get('/equipe', [SiteController::class, 'equipe'])->name('site.equipe');
Route::get('/mediatheque', [SiteController::class, 'mediatheque'])->name('site.mediatheque');
Route::get('/blog', [SiteController::class, 'blog'])->name('site.blog');
Route::get('/blog/{blog}', [SiteController::class, 'show_blog'])->name('blog.show');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');

// web.php
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');




require __DIR__ . '/auth.php';
