@extends('layout.plantilla')
@section('principalMaestro')


<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>ACTUALIZAR</b></center></h3>
      </div>
    </div>
  </div class="panel-heading">

<FORM action="/Estudiante/{{$estudiante->Matricula_Estudiante}}" method="POST" id="contact_form">
	{{csrf_field() }}
	<input type="HIDDEN" value="PUT" name="_method">
	<div class="col-md-4">
			<div class="form-group">
				<label for="nombre">Nombre </label>
				<input type="text" name="nombre" value="{{$estudiante->nombre}}" class="form-control" required>
			</div>
	</div>
	<div class="col-md-4">
			<div class="form-group">
				<label >Apellido </label>
				<input type="text" name="apellido" value="{{$estudiante->apellido}}" class="form-control" required>
			</div>
	</div>
	
	<div class="col-md-4">
	<div class="form-group">
		<label>Semestre </label>
		<input type="number" name="semestre" value="{{$estudiante->semestre}}" min="1" max="14"" class="form-control" required>
	</div>
	</div>
	<div class="col-md-4">
	<div class="form-group">
		<label>Grupo </label>
		<input type="char" name="grupo" value="{{$estudiante->grupo}}" class="form-control" required>
	</div>
	</div>
	<div class="col-md-4">
	<div class="form-group">

		<label >Contraseña: </label>
		<input type="Password" name="password" value="{{$estudiante->password}}" pattern=".{6,}" class="form-control" required>
		<label>Contraseña mayor a 6 caracteres</label>
	</div>
	</div>
	<div class="col-md-4">
			<div class="form-group">
				<label >Carrera </label>
				<select name="carrera" class="form-control"value="{{$estudiante->carrera}}" required>
        	
        			<option value="INGENIERIA EN SISTEMAS COMPUTACIONAES">Ingenieria en sistemas computacionales</option> 
        			<option value="INGENIERIA EN INFORMATICA">Ingenieria en informatica</option> 
        			<option value="INGENIERIA EN MECATRONICA">Ingenieria en mecatronica</option>
    </select>
			</div>
	</div>
	<div class="col-md-12">
	<button class="btn btn-success" type="submit">Actualizar</button>
	<div>
</FORM>

@endsection