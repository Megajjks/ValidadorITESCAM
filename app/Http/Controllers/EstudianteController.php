<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = Estudiante::all();

        return view('admin.Estudiante.contenido',['estudiantes'=>$estudiante]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Estudiante.insertestudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante;
        $estudiante->Matricula_Estudiante=$request->Matricula_Estudiante;
        $estudiante->nombre=$request->Nombre;
        $estudiante->apellido=$request->Apellido;
        $estudiante->carrera=$request->Carrera;
        $estudiante->semestre=$request->Semestre;
        $estudiante->grupo=$request->Grupo;
        $estudiante->password=$request->Password;
        $estudiante->save();
        return redirect("/Estudiante");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante=Estudiante::find($id);
        return view('admin.Estudiante.edit',['estudiante'=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante=Estudiante::find($id);
        $estudiante->nombre=$request->Nombre;
        $estudiante->apellido=$request->Apellido;
        $estudiante->carrera=$request->Carrera;
        $estudiante->semestre=$request->Semestre;
        $estudiante->grupo=$request->Grupo;
        $estudiante->password=$request->Password;
        $estudiante->save();
        return redirect("/Estudiante");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $maestro=Estudiante::where('matricula',$id)->delete();
        return back();
        
    }
}
