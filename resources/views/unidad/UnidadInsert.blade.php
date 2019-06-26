@extends('template.layout')

@section('content')
	
	<p><h1>Agregar Unidad</h1></p>
	<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3"></div>
	<form action="/unidad" class="col-md-6" method="POST" role="form">
		{{csrf_field()}}
		
		<div class="titulobd form-group">
			<label for="Titulo">Titulo</label>
			<input class="form-control" type="text" placeholder="Tutulo de la Unidad" name="Titulo" id="Titulo_input" maxlength="30" required>
		</div>
		<div class="subunidadbd form-group">
			<label for="SubUnidad">Sub Unidad</label>
			<input class="form-control" type="text" placeholder="Sub Unidad" name="SubUnidad" id="SubUnidad_input" maxlength="30" required>
		</div>

		<div>
			<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2 col-xl-2"></div>
			<div class="submit col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
				<input class="btn btn-success btn-group-justified" type="submit" value="Guardar" id="form_button" />
			</div>
			<div class="submit col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
				<a href="{{url()->previous()}}" ><button class="btn btn-danger btn-group-justified" type="button">Cancelar</button></a>
			</div>
		</div>
	</form>


@endsection