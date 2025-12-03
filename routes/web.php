<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\TrabajadoresController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function () {
    return view('inicial');
});

Route::get('/suma', [sumaController::class,'index']);

Route::post('/suma', [sumaController::class,'suma']);

Route::get('/saludo', [SaludoController::class, 'index'])->name('index');

Route::get('/imagen', [SaludoController::class, 'imagen'])->name('imagen');

Route::get('/php', [SaludoController::class, 'php'])->name('php');

Route::get('/trabajadores', [TrabajadoresController::class, 'index'])->name('trabajadores');