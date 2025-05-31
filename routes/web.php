<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaSingleViewController;

Route::get('/', function () {
    $title = 'MSCC — Developers Conference 2025';
    return view('index', compact('title'));
})->name('index');

// Agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{id}', [AgendaSingleViewController::class, 'searchSessionById'])->name('session');