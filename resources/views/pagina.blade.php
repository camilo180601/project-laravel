<!-- Seccion de contenido de la vista master.blade.php el cual se muestra en cuanto cargamos la vista pagina.blade.php-->
@section('content')
    <h1>
        Bienvendio ala pagina generica
    </h1>
@stop
<!-- Seccion de header de la vista master.blade.php y se le agrega con el parent() un h2 "Hola" el cual se muestra en cuanto cargamos la vista pagina.blade.php-->
@section('header')
    @parent()
    <h2>Hola</h2>
@stop
<!-- Seccion de contenido de la vista master.blade.php el cual se muestra la section con la variable title el cual se le pasa el bienvenido y se hace extends del la vista de master en cuanto cargamos la vista pagina.blade.php-->
@section('title', 'Bienvenido')
@extends('layouts.master')