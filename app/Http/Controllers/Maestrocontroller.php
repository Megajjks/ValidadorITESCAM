<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maestro;

class Maestrocontroller extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $maestro = Maestro::all();

        return view('Maestro.contenido',['maestros'=>$maestro]);

   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Maestro.insertmaestros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestro = new Maestro;
        $maestro->Matricula_Maestro=$request->Matricula_Maestro;
        $maestro->Nombre=$request->Nombre;
        $maestro->Apellido=$request->Apellido;
        $maestro->Password=$request->Password;
        $maestro->save();
        return redirect("/Maestro");
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
        $maestro=Maestro::find($id);
        return view('Maestro.editmaestros',['maestro' => $maestro]);
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
        $maestro=Maestro::find($id);
        $maestro->Matricula_Maestro=$request->Matricula_Maestro;
        $maestro->nombre=$request->Nombre;
        $maestro->apellido=$request->Apellido;
        $maestro->password=$request->Password;
        $maestro->save();
        return redirect("/Maestro");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $maestro=Maestro::where('Matricula_Maestro',$id)->delete();
        return back();
        
    }
}
