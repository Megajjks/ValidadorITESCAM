@extends('template.layout')

@section('content')

	<p><h1>Unidades</h1></p>

	<p><div class="col-md-12 col-xs-12">
		<a href="{{action('UnidadController@create')}}"><button class="btn btn-default">Agregar</button></a>
	</div></p>

	
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2 col-xl-2">ID Unidad</div>
					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">Titulo</div>
					<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">SubUnidad</div>
					<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">Opciones</div>
				</div>
			</div>
			<div class="panel-body">
				@foreach($unidades as $unidad)
				<div class="row">
					<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2 col-xl-2">{{$unidad->id_Unidad}}</div>
					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">{{$unidad->Titulo}}</div>
					<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">{{$unidad->SubUnidad}}</div>
					<div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
						<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
							<form action="{{route('unidad.edit',$unidad->id_Unidad)}}" method="post">
								{{csrf_field()}}
								{{method_field('GET')}}
								<button class="btn btn-warning" type="submit">Editar</button>
							</form>
						</div>
						<div  class="col-md-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
							<form action="{{route('unidad.destroy',$unidad->id_Unidad)}}" method="post">
								{{csrf_field()}}
								{{method_field('DELETE')}}
								<button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de eliminar este elemento?')">Eliminar</button>
							</form>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	

@endsection