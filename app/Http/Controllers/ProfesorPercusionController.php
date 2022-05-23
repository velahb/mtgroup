<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesorPercusion;

class ProfesorPercusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesorPercusion = ProfesorPercusion::all();
        return view('profesorPercusion.index',compact('profesorPercusion'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesorPercusion.create');

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
        $profesorPercusion = new ProfesorPercusion();
        $profesorPercusion->nombre = $request->nombre;
        $profesorPercusion->experiencia = $request->experiencia;
        $profesorPercusion->video = $request->video;
        $profesorPercusion->save();
        return redirect()->route('profesorPercusion.index');

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
        $profesorPercusion = ProfesorPercusion::find($id);
        return view('profesorPercusion.edit',compact('profesorPercusion'));
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
        $profesorPercusion = ProfesorPercusion::find($id);
        $profesorPercusion->nombre = $request->nombre;
        $profesorPercusion->experiencia = $request->experiencia;
        $profesorPercusion->video = $request->video;
        $profesorPercusion->save();
        return redirect()->route('profesorPercusion.index');
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
        $profesorPercusion = ProfesorPercusion::find($id);
        $profesorPercusion->delete();
        return redirect()->route('profesorPercusion.index');
        
    }
}
