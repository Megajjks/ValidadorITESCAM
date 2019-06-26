@extends('layout.plantilla')
@section('principalMaestro')
<div class="panel-heading">
	<div class="row">
		<div class="col-lg-12">
			ACTUALIZAR MATERIA
		</div>
	</div>
</div>

<FORM action="/Materia/{{$materia->id_Materia}}" method="POST">

	{{csrf_field() }}
	<input type="HIDDEN" value="PUT" name="_method">
	<input type="HIDDEN" value="{{$materia->id_Materia}}" name="id_Materia" required>

	<div class="form-group">
		<label for="nombre">Nombre </label>
		<input type="text" name="Nombre" value="{{$materia->Nombre}}" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="nombre">Contenido </label>
		<input type="text" name="Contenido" value="{{$materia->Contenido}}" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="nombre">Carrera </label>
		<select name="Carrera" class="form-control" value="{{$materia->Carrera}}" required>
   		<option value="INGENIERIA EN SISTEMAS COMPUTACIONAES">Ingenieria en sistemas computacionales</option> 
   		<option value="INGENIERIA EN INFORMATICA">Ingenieria en informatica</option> 
  		 <option value="INGENIERIA EN MECATRONICA">Ingenieria en mecatronica</option>
		</select>
	</div>
	<button class="btn btn-success" type="submit">Actualizar</button>
</FORM>

@endsection