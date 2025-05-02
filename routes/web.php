<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/providencia', function () {
    return view('house.providencia-departamento');
})->name("providencia");

Route::get('/chapalita', function () {
    return view('house.chapalita');
})->name("chapalita");

Route::get('/americana-nau-living', function () {
    return view('house.americana');
})->name("americana");

Route::get('/rio-residencial', function () {
    return view('house.rio-residencial');
})->name("rio");

Route::get('/arboledas', function () {
    return view('house.arboledas');
})->name("arboledas");

Route::get('/cumbres', function () {
    return view('house.cumbres');
})->name("cumbres");
