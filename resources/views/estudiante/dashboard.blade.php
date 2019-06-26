@extends('template.layout')
@section('content')
    <div class="col-md-12 contasign espaciado">
            <div class="col-md-12">
                <div class="col-md-10 content-title"><p>Materias por evaluar</p></div>
            </div>
            
            <div class="col-md-12 grid-content">
                @foreach($materias as $materia)
                    <a href="/quest"><div class="col-md-12 grid-item">
                    <p class="title-card minespacio">{{ $materia->materiasalu->nombre}}</p>
                    <div class="col-md-12 d-asign minespacio">
                        <div class="minespacio"><img src="img/book.png"><p>ISC</p></div>
                        <div class="minespacio"><img src="img/group.png"><p>6A</p></div>
                    </div>
                    <div class="minespacio"><img src="img/presentation.png"><p>{{ $materia->materiasalu->maestrosasig->nombre}} {{ $materia->materiasalu->maestrosasig->apellido}}</p></div>
                    <div class="col-md-12 idcolor"></div>
                </div></a>
                @endforeach
            </div>
            
    </div>
    <div class="col-md-12 contasign espaciado">
            <div class="col-md-12">
                <div class="col-md-10 content-title2"><p>Materias evaluadas</p></div>
            </div>
            <a href="#"><div class="col-md-12 grid-content">
                <div class="col-md-12 grid-item">
                    <p class="title-card minespacio">Simulación</p>
                    <div class="col-md-12 d-asign minespacio">
                        <div class="minespacio"><img src="img/book.png"><p>ISC</p></div>
                        <div class="minespacio"><img src="img/group.png"><p>6A</p></div>
                    </div>
                    <div class="minespacio"><img src="img/presentation.png"><p>Yaqueline Pech Huu</p></div>
                    <div class="col-md-12 idcolor2"></div>
                </div>
            </div></a>
    </div>
@endsection