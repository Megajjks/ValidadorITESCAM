@extends('layout.plantilla')
@section('principalMaestro')


<div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h3><center><b>AGREGAR ESTUDIANTE</b></center></h3>
      </div>
    </div>
</div>
<form action="/Estudiante" method="post">
  {{ csrf_field() }}
    <div class="col-md-4">
	   <div class="form-group">
       
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" required />
        </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">   
        <label>Apellido</label>
        <input type="text" class="form-control" name ="apellido"required  />
        </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
        <label>Contraseña</label>
        <input type="Password" class="form-control" name="password" pattern=".{6,}" required />
        <label>Contraseña mayor a 6 caracteres</label>
    </div>
    </div>
    

    <div class="col-md-4">
    <div class="form-group">
        <label>Semestre</label>
        <input type="number" class="form-control" name="semestre" min="1" max="14" required />
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
        <label >Grupo</label>
        <input type="char" class="form-control" name="grupo" required />
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label >Carrera</label>
        <select name="carrera" class="form-control" required>
        <option ></option> 
        <option value="INGENIERIA EN SISTEMAS COMPUTACIONAES">Ingenieria en sistemas computacionales</option> 
        <option value="INGENIERIA EN INFORMATICA">Ingenieria en informatica</option> 
        <option value="INGENIERIA EN MECATRONICA">Ingenieria en mecatronica</option>
    </select>
    </div>
    </div>

<div class="col-md-12">
    <button class="btn btn-success" type="submit">Guardar</button>
</div>
</form>


@endsection