<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/peliculas/{page?}', [PeliculaController::class, 'index']);
Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
    ->middleware('testyear');
Route::get('/redirigir', [PeliculaController::class, 'redirigir']);
Route::resource('usuario', UsuarioController::class);
Route::get('/formulario', [PeliculaController::class, 'formulario']);
Route::post('/recibir', [PeliculaController::class, 'recibir']);
Route::group(['prefix'=>'frutas'], function() {
    Route::get('/', [FrutaController::class, 'index'])
            ->name('index.fruta');
    Route::get('detail/{id}', [FrutaController::class, 'detail']);
    Route::get('crear', [FrutaController::class, 'create']);
    Route::post('save', [FrutaController::class, 'save']);
    Route::get('delete/{id}', [FrutaController::class, 'delete']);
    Route::get('editar/{id}', [FrutaController::class, 'edit']);
    Route::post('update', [FrutaController::class, 'update']);
});
/*
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

Route::get('/pagina-generica', function(){

    return view('pagina');

});

*/