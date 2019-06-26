@extends('layout.plantilla')
@section('principalMaestro')



<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>ADMINISTRACION DE MATERIAS</b></center></h3>
      </div>
    </div>

  </div class="panel-heading">
  <p><div class="col-md-12 col-xs-12">
<a class="btn btn-success" href="{{action('Materiacontroller@create')}}"><b>Nuevo</b></a>
</div>

<div class="col-md-12 col-xs-12">
	<div class="pane panel-default">
            <div class="panel-heading">
             <div class="row">
                  <div class="col-md-2">Nombre</div>
                  <div class="col-md-4">Contenido</div>
                  <div class="col-md-3">Carrera</div>
                  <div class="col-md-3">Opciones</div>
               
             </div>
           </div>
             <div class="panel-body">
 				@foreach($materias as $materia)
              <div class="row">
                    <div class="col-md-2">{{$materia->Nombre}}</div>
                    <div class="col-md-4">{{$materia->Contenido}}</div>
                    <div class="col-md-3">{{$materia->Carrera}}</div>
                    <div class="col-md-3">
                    <div class="col-md-4">
                <a href="{{action('Materiacontroller@edit', $materia['id_Materia'])}}" class="btn btn-success"><b>Actualizar</b></a>
                </div>
                <div class="col-md-4">
                 	<form action="{{route('Materia.destroy',$materia->id_Materia)}}" method="post" >
            		{{csrf_field()}}
          	  		{{method_field('Delete')}} 
           			<button class="btn btn-danger" type="submint"><b>Eliminar</b></button>
          			</form>
                      </div>
                 </div>
            </div>
            @endforeach 

          </div>
</div>
 </div>

               

</div>
</div>

@endsection