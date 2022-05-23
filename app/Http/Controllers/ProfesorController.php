<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesor = Profesor::all();
 
       return view('profesor.index',compact('profesor'));
    }
    public function create()
    {
        return view('profesor.create');
    }
    public function store(Request $request)
    {
        $profesor = new Profesor();
        $profesor->nombre = $request->input('nombre');
        $profesor->experiencia = $request->input('experiencia');
        $profesor->video = $request->input('video');
        $profesor->save();
        return redirect()->route('profesor.create');
    }
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesor.edit',compact('profesor'));
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->nombre = $request->input('nombre');
        $profesor->experiencia = $request->input('experiencia');
        $profesor->video = $request->input('video');
        $profesor->save();
        return redirect()->route('profesor.index');
    }
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
}
