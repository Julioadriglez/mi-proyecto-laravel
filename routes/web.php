<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\SaludoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial', function () {
    return view('inicial');
});

// Route::get('/imagen', function () {
//     return view('imagen');
// });

/* Route::get('/php', function () {
    return view('php');
}); */

Route::get('/suma', [sumaController::class,'index']);

Route::post('/suma', [sumaController::class,'suma']);

Route::get('/saludo', [SaludoController::class, 'index'])->name('index');

Route::get('/imagen', [SaludoController::class, 'imagen'])->name('imagen');

Route::get('/php', [SaludoController::class, 'php'])->name('php');