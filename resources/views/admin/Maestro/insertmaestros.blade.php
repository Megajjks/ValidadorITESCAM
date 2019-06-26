@extends('layout.plantilla')
@section('principalMaestro')


<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>AGREGAR MAESTROS</b></center></h3>
      </div>
    </div>
</div class="panel-heading">
<form action="/Maestro" method="post">
  {{ csrf_field() }}
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name="Nombre" required>
	</div>
	<div class="form-group">
        <label for="apellidos">Apellido</label>
        <input type="text" class="form-control" name="Apellido" required>
    </div>
    <div class="form-group">
        <label for="calle">Contraseña</label>
        <input type="Password" class="form-control" name ="Password" pattern=".{6,}" required>
        <label for="calle">Contraseña mayor a 6 caracteres</label>
    </div>
    <button class="btn btn-success" type="submit">Guardar</button>
</form>


@endsection