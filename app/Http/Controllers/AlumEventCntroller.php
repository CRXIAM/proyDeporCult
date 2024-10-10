<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AlumEventCntroller extends Controller
{
    public function index()
    {
        
        $events = Event::all()->take(6);
        return view('alumnos.index',['events'=>$events]);
     
    }
}
