<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hsr', function () {
    return view('hsr');
});

Route::get('/gi', function () {
    return view('gi');
});

Route::get('/dino', function () {
    return view('dino');
});

Route::get('/fnaf', function () {
    return view('fnaf');
});

Route::get('/jojo', function () {
    return view('jojo');
});
