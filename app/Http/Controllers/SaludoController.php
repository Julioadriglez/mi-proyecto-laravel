<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
     public function index()
    {
        // coneccion del controlador con la vista 'saludo'
        return view('saludos');
    }
    public function imagen()
    {
        // coneccion del controlador con la vista 'saludo'
        return view('imagen');
    }
    public function php()
    {
        // coneccion del controlador con la vista 'saludo'
        return view('php');
    }
}
