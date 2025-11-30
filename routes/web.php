<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;

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

Route::get('/suma', [sumaController::class,'index']);

Route::post('/suma', [sumaController::class,'suma']);

Route::get('/saludos', function () {
    return view('saludos');
});
