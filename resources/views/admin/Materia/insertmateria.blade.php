@extends('layout.plantilla')
@section('principalMaestro')


<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>AGREGAR MATERIA</b></center></h3>
      </div>
    </div>
</div>
<form action="/Materia" method="post">
  {{ csrf_field() }}
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name="Nombre" required>
	</div>
	<div class="form-group">
        <label for="apellidos">Contenido</label>
        <input type="text" class="form-control" name="Contenido" required= />
    </div>
    <div class="form-group">
        <label for="calle">Carrera</label>
        <select name="Carrera" class="form-control" required>
   <option ></option> 
   <option value="INGENIERIA EN SISTEMAS COMPUTACIONAES">Ingenieria en sistemas computacionales</option> 
   <option value="INGENIERIA EN INFORMATICA">Ingenieria en informatica</option> 
   <option value="INGENIERIA EN MECATRONICA">Ingenieria en mecatronica</option>
</select>
    </div>
    <button class="btn btn-success" type="submit">Guardar</button>
</form>


@endsection