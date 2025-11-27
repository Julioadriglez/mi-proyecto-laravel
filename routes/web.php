<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function () {
    return view('inicial');
});

Route::get('/imagen', function () {
    return view('imagen');
});

Route::get('/php', function () {
    return view('php');
});
