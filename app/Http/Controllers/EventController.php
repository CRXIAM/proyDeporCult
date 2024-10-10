<?php

namespace App\Http\Controllers;



use App\Models\Event;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EventController extends Controller
{
 

    public function index()
    {
        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking){         
           $events[] = [
                'id'    => $booking->id,
                'title' => $booking->title,
                'description'=>$booking->description,
                'time_i'=>$booking->time_i,
                'time_f'=>$booking->time_f,
                'color'=>$booking->color,
            //  'file' => asset('storage/'.$booking->image_path),
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                
            ];
        }

               
        //$events = new Event();
        //$teachers = Teacher::pluck('name','id');
        //return view('home', compact('events','teachers'));

        return view('home',['events'=>$events]);

 
     
    }

  

    public function store(Request $request){
        $request->validate([
            'title'=> 'required|string',
            'description'=>'required|string',
            'time_i'=>'required|string',
            'time_f'=>'required|string',
            'color'=>'required|string',
            
        ]);    

          

        $booking = Event::create([
            'title'=> $request->title,
            'description'=>$request->description,
            'time_i'=>$request->time_i,
            'time_f'=>$request->time_f,
            'color'=>$request->color,          
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
        ]);

       
       

        return response()->json($booking);
        //   return response()->json([
            //'id' => $booking->id,

            //'start' => $booking->start_date,
            //'end' => $booking->end_date,
           // 'title' => $booking->title,
           // 'description'=>$booking->description,
         //   'teach'=>$booking->teach
            
      //)  ]);
    }
    
    


    public function update(Request $request, $id){
        $booking = Event::find($id);
        if(! $booking){
            return response()->json([
                'error'=> 'No se puede localizar el evento'
            ],404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Evento actualizado');
    }

    public function destroy( $id)
    {

        $booking = Event::find($id);
        if(! $booking){
            return response()->json([
                'error'=> 'No se puede localizar el evento'
            ],404);
        }
        $booking->delete();
        return $id;
    }
    

}