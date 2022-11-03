<h1>Listado de frutas</h1>
<h3>
    <a href="{{ action('App\Http\Controllers\FrutaController@create') }}">Crear frutas</a>
</h3>

@if(session('status'))
    <p style="background: red; color: white; ">
        {{session('status')}}
    </p>
@endif
<ul>
    @foreach($frutas as $fruta)
        <li>
            <a href="{{ action('App\Http\Controllers\FrutaController@detail', [$fruta->id]) }}">{{$fruta->nombre}}</a> 
        </li>
    @endforeach
</ul>