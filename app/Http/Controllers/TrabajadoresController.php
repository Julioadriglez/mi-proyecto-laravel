<?php

namespace App\Http\Controllers;

use App\Models\Trabajadores;

use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajadores::all();
        return view('trabajadores',compact('trabajadores'));
    }
}
