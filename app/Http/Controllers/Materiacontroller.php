<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class Materiacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = Materia::all();

        return view('Materia.contenido',['materias'=>$materia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Materia.insertmateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia;
        $materia->id_Materia=$request->id_Materia;
        $materia->Nombre=$request->Nombre;
        $materia->Contenido=$request->Contenido;
        $materia->Carrera=$request->Carrera;
        $materia->save();
        return redirect("/Materia");
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
        $materia=Materia::find($id);
        return view('Materia.edit',['materia'=>$materia]);
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
        if(!$request->ajax() )
        $materia=Materia::find($id);
        $materia->Nombre=$request->Nombre;
        $materia->Contenido=$request->Contenido;
        $materia->Carrera=$request->Carrera;
        $materia->save();
        return redirect("/Materia");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia=Materia::where('id_Materia',$id)->delete();
        return back();
    }
}
