<h1>{{$title}}</h1>
<p>(Accion index del controlador PeliculasController)</p>

@if(isset($page))
    <h3>La pagina es: {{$page}}</h3>
@endif
<!-- enlaces laravel -->
<a href="{{ url('/detalle') }}">Ir a detalle</a>