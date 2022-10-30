@include('includes.header')

<!-- Imprimir por pantalla -->
<h1>{{$title}}</h1>
<h2>{{$listado[0]}}</h2>
<h3>{{ date('Y')}}</h3>

{{-- Comentario Blade --}}

<!--Ver si una variable existe o no -->
<?= isset($director) ? $director : 'No hay director'; ?>
<br>
{{ $director ?? 'No hay director'}}
<br>
<!-- condicionales -->
@if($title && count($listado) >=2 )
    <h1> titulo existe es este: {{$title}} </h1>
@else
    <h1> El titulo no existe </h1>
@endif
<!-- Bucles -->
@for ($i=0; $i<=20; $i++)
    El numero es: {{$i}}
    <br>
@endfor
<?php
    $contador = 1
?>
<hr>
@while($contador < 50)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}}
        <br>
    @endif

    <?php $contador++; ?>

@endwhile
<hr>
@foreach($listado as $pelicula)
    {{$pelicula}} <br>
@endforeach


@include('includes.footer');