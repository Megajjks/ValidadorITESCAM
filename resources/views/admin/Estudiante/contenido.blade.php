@extends('layout.plantilla')
@section('principalMaestro')



<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>ADMINISTRACION DE ESTUDIANTES</b></center></h3>
      </div>
    </div>
  </div class="panel-heading">



<a class="btn btn-success" href="{{action('EstudianteController@create')}}">Nuevo</a>
<div class="col-xs-12 col-md-12">
	       <div class="panel panel-default" id="miFormulario">
            <div class="panel-heading">
              <div class="row">
              
             
               <div class="col-md-2">Matricula Estudiante</div>
               <div class="col-md-1">Nombre</div>
               <div class="col-md-1">Apellido</div>
               <div class="col-md-2">Carrera</div>
              <div class="col-md-1">Semestre</div>
               <div class="col-md-1">Grupo</div>
               <div class="col-md-2">Opciones</div>
            </div>
          </div>
          
            <div class="pnael-body">
 				@foreach($estudiantes as $estudiante)
              <div class="row">
                <div class="col-md-2">{{$estudiante->matricula}}</div>
                <div class="col-md-1">{{$estudiante->nombre}}</div>
                <div class="col-md-1">{{$estudiante->apellido}}</div>
                <div class="col-md-2">{{$estudiante->carrera}}</div>
                <div class="col-md-1">{{$estudiante->semestre}}</div>
                <div class="col-md-1"> {{$estudiante->grupo}}</div>
                
                <div class="col-md-4">
                  <div class="col-md-4">
                <a class="btn btn-success" href="Estudiante/{{$estudiante->Matricula_Estudiante}}/edit" >Actualizar</a>
                  </div>
                  <div class="col-md-2">
                  <form action="{{route('Estudiante.destroy',$estudiante->Matricula_Estudiante)}}" method="post" >
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
    <script type="text/javascript">
       (function() {
         var form = document.getElementById('miFormulario');
         form.addEventListener('submit', function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('¿Realmente desea eliminar?')) {
             event.preventDefault();
           }
         }, false);
       })();
     </script>
@endsection

