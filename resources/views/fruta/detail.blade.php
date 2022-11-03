<h1>{{$fruta->nombre}}</h1>
<p>
    {{$fruta->descripcion}}
</p>
<a href="{{ action('App\Http\Controllers\FrutaController@delete', [$fruta->id]) }}">Eliminar</a>
<a href="{{ action('App\Http\Controllers\FrutaController@edit', [$fruta->id]) }}">Actualizar</a>