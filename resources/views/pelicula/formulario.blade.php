<h1>Formulario Laravel</h1>

<form action="{{ url('/recibir') }}" method="post">
    {{ csrf_field() }}
    <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Escriba su nombre">
    </div>
    <br>
    <div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Escriba su correo">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
