@if(isset($fruta) && is_object($fruta))
    <h1>Editar una fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif

<form action="{{ isset($fruta) ? action('App\Http\Controllers\FrutaController@update') : action('App\Http\Controllers\FrutaController@save')  }}" method="post">
    {{ csrf_field() }}
    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{ $fruta->id }}">
    @endif

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Escriba su nombre" value="{{ $fruta->nombre ?? '' }}">
    </div>
    <br>
    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Escriba su descripcion" value="{{ $fruta->descripcion ?? '' }}">
    </div>
    <br>
    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Digite el precio" value="{{ $fruta->precio ?? 0 }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>