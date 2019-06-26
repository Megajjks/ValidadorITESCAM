@extends('layout.plantilla')
@section('principalMaestro')



<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>ADMINISTRACION DE CUENTAS MAESTROS</b></center></h3>
      </div>
    </div>
  </div class="panel-heading">


<a  class="btn btn-success" href="{{action('Maestrocontroller@create')}}">Nuevo</a>


	<div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
             
              <div class="col-md-2">Matricula</div>
              <div class="col-md-4">Nombre</div>
              <div class="col-md-3">Apellidos</div>
              <div class="col-md-3">Opciones</div>
        </div>
      </div>     
      <div class="panel-body"> 
 				@foreach($maestros as $maestro)
              <div class="row">
                <div class="col-md-2">{{$maestro->Matricula_Maestro}}</div>
                <div class="col-md-4"> {{$maestro->Nombre}}</div>
                <div class="col-md-3"> {{$maestro->Apellido}}</div>
                <div class="col-md-3">
                  <div class="col-md-4">
                <a class="btn btn-success" href="Maestro/{{$maestro->Matricula_Maestro}}/edit" >Actualizar</a>
                </div>
                <div class="col-md-4">
                 	<form action="{{route('Maestro.destroy',$maestro->Matricula_Maestro)}}" method="post" >
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

@endsection

