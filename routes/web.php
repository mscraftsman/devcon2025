<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/old', function () {
    return view('old');
});

Route::get('/test', function () {
    return view('test');
});
