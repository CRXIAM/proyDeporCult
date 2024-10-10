<?php

namespace App\Http\Controllers;

use App\Models\Actividad;

use Illuminate\Http\Request;

class AlumActivController extends Controller
{
    

    public function index()
    {
        
        $actividads = Actividad::all()->take(6);
        return view('alumnos2.index',compact('actividads'));

    }

  
 
    
}
