<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   
     

    function __construct()
    {
         $this->middleware('permission:Ver Profesores|Crear Profesor|Editar Profesor|Borrar Profesor', ['only' => ['index','show']]);
         $this->middleware('permission:Crear Profesor', ['only' => ['create','store']]);
         $this->middleware('permission:Editar Profesor', ['only' => ['edit','update']]);
         $this->middleware('permission:Borrar Profesor', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$teachers = Teacher::latest()->paginate(7);
        $teachers = Teacher::orderBy('id','ASC')->paginate(7);
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 7);

    }
    
  
    public function create()
    {
        return view('teachers.create');
    }
  
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'appepat' => 'required|string',
             'appemat' => 'required|string',
             'email' => 'required|email|unique:users,email',
             'cel' => 'required|integer'
           
        ]);
    
        Teacher::create($request->all());
    
        return redirect()->route('teachers.index')
                        ->with('success','Profesor@ creada con éxito.');
    }
 
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }
  
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }
    

    public function update(Request $request, Teacher $teacher)
    {
         request()->validate([
            'name' => 'required|string',
            'appepat' => 'required|string',
             'appemat' => 'required|string',
             'email' => 'required|email|unique:users,email',
             'cel' => 'required|integer'
        ]);
    
        $teacher->update($request->all());
    
        return redirect()->route('teachers.index')
                        ->with('success','Profesor@ actualizada con éxito');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
    
        return redirect()->route('teachers.index')
                        ->with('success','Profesor@ eliminada exitosamente');
    }
}