<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesorTeclado;

class ProfesorTecladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesorTeclado = ProfesorTeclado::all();
        return view('profesorTeclado.index',compact('profesorTeclado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesorTeclado.create');
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
        $profesorTeclado = new ProfesorTeclado();
        $profesorTeclado->nombre = $request->nombre;
        $profesorTeclado->experiencia = $request->experiencia;
        $profesorTeclado->video = $request->video;
        $profesorTeclado->save();
        return redirect()->route('profesorTeclado.index');
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
        $profesorTeclado = ProfesorTeclado::find($id);
        return view('profesorTeclado.edit',compact('profesorTeclado'));
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
        $profesorTeclado = ProfesorTeclado::find($id);
        $profesorTeclado->nombre = $request->nombre;
        $profesorTeclado->experiencia = $request->experiencia;
        $profesorTeclado->video = $request->video;
        $profesorTeclado->save();
        return redirect()->route('profesorTeclado.index');
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
        $profesorTeclado = ProfesorTeclado::find($id);
        $profesorTeclado->delete();
        return redirect()->route('profesorTeclado.index');
    }
}
