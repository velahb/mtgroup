<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesorCuerdas;

class ProfesorCuerdasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesorCuerdas = ProfesorCuerdas::all();
        return view('profesorCuerdas.index',compact('profesorCuerdas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesorCuerdas.create');
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
        $profesorCuerdas = new ProfesorCuerdas();
        $profesorCuerdas->nombre = $request->nombre;
        $profesorCuerdas->experiencia = $request->experiencia;
        $profesorCuerdas->video = $request->video;
        $profesorCuerdas->save();
        return redirect()->route('profesorCuerdas.index');

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
        $profesorCuerdas = ProfesorCuerdas::find($id);
        return view('profesorCuerdas.edit',compact('profesorCuerdas'));
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
        $profesorCuerdas = ProfesorCuerdas::find($id);
        $profesorCuerdas->nombre = $request->nombre;
        $profesorCuerdas->experiencia = $request->experiencia;
        $profesorCuerdas->video = $request->video;
        $profesorCuerdas->save();
        return redirect()->route('profesorCuerdas.index');

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
        $profesorCuerdas = ProfesorCuerdas::find($id);
        $profesorCuerdas->delete();
        return redirect()->route('profesorCuerdas.index');
    }
}
