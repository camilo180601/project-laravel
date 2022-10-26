<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mostrar-fecha', function () {
    $title = "Fecha de Hoy";
    return view('mostrar-fecha', array(
        'title' => $title
    ));

});

Route::get('/pelicula/{title}/{year?}', function ($title = 'No hay pelicula', $year = 2022 ) {
    return view('pelicula', array(
        'title' => $title,
        'year' => $year
    ));

})->where(array(
    'title' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function (){
    $title = "Listado de peliculas";
    $listado = array('batman', 'superman', 'hulk');
    return view('peliculas.listado')
        ->with('title', $title)
        ->with('listado', $listado);
});