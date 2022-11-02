<h1>Listado de frutas</h1>
<ul>
    @foreach($frutas as $fruta)
        <li>
            <a href="frutas/detail/<?=$fruta->id?>">{{$fruta->nombre}}</a> 
        </li>
    @endforeach
</ul>