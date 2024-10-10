<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ActividadController extends Controller

{
    public function index() {

        $actividads = Actividad::orderBy('id','ASC')->paginate(7);
      //return view('actividads.index',['actividads' => $actividads]);

      //  $actividads = Actividad::latest()->paginate(7);
        return view('actividads.index',compact('actividads'))
        ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    public function create() {



        //return view('actividads.create');





        $actividad = new Actividad();

        $teachers = Teacher::pluck('name','id');

        return view('actividads.create', compact('actividad','teachers'));

    }

    public function show($id)

    {

        $actividad = Actividad::findOrFail($id);

        $horarios = $actividad->horarios;



      // Agregar mensaje de depuración

     // dd($actividad->toArray(), $horarios->toArray());



      return view('actividads.show', compact('actividad', 'horarios'));

  }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg,jpg',
            'teachers_id' => 'required'
        ]);

        if ( $validator->passes() ) {



            // option #3
            $actividad = Actividad::create($request->post());

            // Upload image here
            if ($request->image) {
                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$ext;
                $request->image->move(public_path().'/uploads/actividades/',$newFileName); // This will save file in a folder

                $actividad->image = $newFileName;
                $actividad->save();
            }

            return redirect()->route('actividads.index')->with('success','Actividad creada correctamente.');


        } else {
            // return with errrors
            return redirect()->route('actividads.create')->withErrors($validator)->withInput();
        }
    }
    public function edit(Actividad $actividad) {
        //$employee = Employee::findOrFail($id);
        //return view('actividads.edit',['actividad' => $actividad]);

        $teachers = Teacher::pluck('name','id');
        return view('actividads.edit', compact('actividad','teachers'));
    }

    public function update(Actividad $actividad, Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg,jpg',
            'teachers_id' => 'required'
        ]);

        if ( $validator->passes() ) {
            // Save data here
            // $employee = Employee::find($id);
            // $employee->name = $request->name;
            // $employee->email = $request->email;
            // $employee->address = $request->address;
            // $employee->save();

            $actividad->fill($request->post())->save();

            // Upload image here
            if ($request->image) {
                $oldImage = $actividad->image;

                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$ext;
                $request->image->move(public_path().'/uploads/actividades/',$newFileName); // This will save file in a folder

                $actividad->image = $newFileName;
                $actividad->save();

                File::delete(public_path().'/uploads/actividades/'.$oldImage);
            }

            return redirect()->route('actividads.index')->with('success','Actividad actualizada.');


        } else {
            // return with errrors
            return redirect()->route('actividads.edit',$actividad->id)->withErrors($validator)->withInput();
        }
    }

    public function destroy(Actividad $actividad, Request $request) {
        //$employee = Employee::findOrFail($id);
        File::delete(public_path().'/uploads/actividades/'.$actividad->image);
        $actividad->delete();
        return redirect()->route('actividads.index')->with('success','Actividad eliminada.');
    }
}
