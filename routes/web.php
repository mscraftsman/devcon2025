<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaSingleViewController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SpeakersController;

Route::get('/', function () {
    $title = 'MSCC — Developers Conference 2025';
    return view('index', compact('title'));
})->name('index');

// Agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{id}', [AgendaSingleViewController::class, 'searchSessionById'])->name('session');

//Speakers

Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers');
Route::get('/speaker/{id}', [SpeakerController::class, 'searchById'])->name('speaker');

// Photo Album
// Route::redirect('/photos', 'https://photos.google.com/share/AF1QipMxOy3GNTMyJAITPiw7L-Cd9GbzzFkdpH6d9JQTeL8QhlZg8vKhhDi__mfOQ6GZMQ', 301);
Route::redirect('/photos', 'https://photos.app.goo.gl/7eP1bQubGdNDDkPf8', 301);
