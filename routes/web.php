<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('apps.home.home');
});

Route::get('/home', function () {
    return view('apps.home.home');
});

Route::get('/about', function () {
    return view('apps.about.about');
});

Route::get('/skill', function () {
    return view('apps.skill.skill');
});

Route::get('/portfolio', function () {
    return view('apps.portfolio.portfolio');
});

Route::get('/contact', function () {
    return view('apps.contact.contact');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('apps.home.dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
