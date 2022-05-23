<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesorVoz;

class ProfesorVozController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesorVoz = ProfesorVoz::all();
        return view('profesorVoz.index',compact('profesorVoz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesorVoz.create');
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
        $profesorVoz = new ProfesorVoz();
        $profesorVoz->nombre = $request->nombre;
        $profesorVoz->experiencia = $request->experiencia;
        $profesorVoz->video = $request->video;
        $profesorVoz->save();
        return redirect()->route('profesorVoz.index');
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
        $profesorVoz = ProfesorVoz::find($id);
        return view('profesorVoz.edit',compact('profesorVoz'));
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
        $profesorVoz = ProfesorVoz::find($id);
        $profesorVoz->nombre = $request->nombre;
        $profesorVoz->experiencia = $request->experiencia;
        $profesorVoz->video = $request->video;
        $profesorVoz->save();
        return redirect()->route('profesorVoz.index');
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
        $profesorVoz = ProfesorVoz::find($id);
        $profesorVoz->delete();
        return redirect()->route('profesorVoz.index');
    }
}
