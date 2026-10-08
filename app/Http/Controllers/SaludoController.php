<?php

namespace App\Http\Controllers;

class SaludoController extends Controller
{
    public function index()
    {
        $nombre = 'Marco';
        $libros = ['Cien Años de Soledad', 'El Aleph', 'Ficciones'];

        return view('saludo', compact('nombre', 'libros'));
    }
}
