@extends('template.layout')

@section('content')

	<p><h1>Editar Unidad</h1></p>
	<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3"></div>
	<form action="/unidad/{{$unidad->id_Unidad}}" class="col-md-6" method="PATCH" role="form">
		{{csrf_field()}}
		
		<div class="titulobd form-group">
			<label for="Titulo">Titulo</label>
			<input class="form-control" type="text" placeholder="Tutulo de la Unidad" name="Titulo" id="Titulo_input" value="{{$unidad->Titulo}}" maxlength="30" required>
		</div>
		<div class="subunidadbd form-group">
			<label for="SubUnidad">Titulo</label>
			<input class="form-control" type="text" placeholder="Sub Unidad" name="SubUnidad" id="SubUnidad_input" value="{{$unidad->SubUnidad}}" maxlength="30" required>
		</div>
		<div>
			<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4"></div>
			<div class="submit col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
				<input class="btn btn-success btn-group-justified" type="submit" value="Guardar" id="form_button" />
			</div>
		
		</div>
	</form>

@endsection