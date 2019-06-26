@extends('layout.plantilla')
@section('principalMaestro')
<div class="panel-heading">
	<div class="row">
		<div class="col-lg-12">
			ACTUALIZAR CUENTAS MAESTRO
		</div>
	</div>
</div>

<FORM action="/Maestro/{{$maestro->Matricula_Maestro}}" method="POST">
	{{csrf_field() }}
	<input type="HIDDEN" value="PUT" name="_method">
	<div class="col-md-4">
	<input type="HIDDEN" name="Matricula_Maestro" value="{{$maestro->Matricula_Maestro}}">
	<div class="form-group">
		<label for="nombre">Nombre </label>
		<input type="text" name="Nombre" value="{{$maestro->Nombre}}" class="form-control" required>
	</div>
	</div>
	<div class="col-md-4">
	<div class="form-group">
		<label for="nombre">Apellido </label>
		<input type="text" name="Apellido" value="{{$maestro->Apellido}}" class="form-control" required>
	</div>
	</div>			
	<div class="col-md-4">
	<div class="form-group">
		
		<label for="nombre">Contraseña </label>
		<input type="Password" name="Password" value="{{$maestro->Password}}" pattern=".{6,}" class="form-control" required>
		<label>Contraseña mayor a 6 caracteres</label>
	<div>	
	</div>
	<div class="col-md-12">
	<button class="btn btn-success" type="submit">Actualizar</button>
	</div>
</FORM>

@endsection