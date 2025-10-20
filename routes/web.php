<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SiteController;

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');
Route::get('/cards/{card:slug}', [CardController::class, 'show'])->name('cards.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/', [CardController::class, 'dashboard'])->name('dashboard');
    Route::get('/cards', [CardController::class, 'index'])->name('cards.index');
    Route::get('/create', [CardController::class, 'create'])->name('cards.create');
    Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

    Route::get('/cards/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');
    Route::put('/cards/{card}', [CardController::class, 'update'])->name('cards.update');
    Route::delete('/cards/{card}', [CardController::class, 'destroy'])->name('cards.destroy');

    Route::get('/cards/{card}/qr', [CardController::class, 'showQr'])->name('cards.qr');
    // Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






// Les routes du site
Route::get('/accueil', [SiteController::class, 'accueil'])->name('site.accueil');
Route::get('/domaines', [SiteController::class, 'domaines'])->name('site.domaines');
Route::get('/apropos', [SiteController::class, 'apropos'])->name('site.apropos');
Route::get('/equipe', [SiteController::class, 'equipe'])->name('site.equipe');

Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');



require __DIR__ . '/auth.php';
