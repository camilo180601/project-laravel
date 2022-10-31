<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //
    public function index($page=1){
        $title = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'title' => $title,
            'page' => $page
        ]);
    }

    public function detalle($year = null){
        
        return view('pelicula.detalle');

    }

    public function redirigir(){
        return redirect('/detalle');
    }
}
