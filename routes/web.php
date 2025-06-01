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