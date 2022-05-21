<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesor = Profesor::all();
 
       return view('profesor.index',compact('profesor'));
    }
}
