<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/providencia', function () {
    return view('house.providencia-departamento');
});

Route::get('/chapalita', function () {
    return view('house.chapalita');
});

Route::get('/americana-nau-living', function () {
    return view('house.americana');
});

Route::get('/rio-residencial', function () {
    return view('house.rio-residencial');
});

Route::get('/arboledas', function () {
    return view('house.arboledas');
});

Route::get('/cumbres', function () {
    return view('house.cumbres');
});
