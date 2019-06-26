<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dasboard_estudiante extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materias =\App\Cargas_academica::where("matricula","=",5871)->get();
        return view('estudiante.dashboard',compact('materias'));
        //$materias = DB::table('cargas_academicas')
        //->join('materias', 'materias.id_materia','=','cargas_academicas.id_materia')
        //->select('materias.nombre')
        //->where('cargas_academicas.matricula','=','5871')
        //->get();
        //$maestros = DB::table('maestros')
        //->join('materias', 'materias.id_maestro','=','maestros.id_maestro')
        //->select('maestros.nombre')
        //->where('cargas_academicas.matricula','=','5871')
        //->get();
        //return view('estudiante.dashboard',compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
