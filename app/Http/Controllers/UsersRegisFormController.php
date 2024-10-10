<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersRegisForm;
use App\Models\Actividad;
use App\Mail\enviar;
use Illuminate\Support\Facades\Mail;

class UsersRegisFormController extends Controller
{
    public function index()
    {
        $usersRegisForms = UsersRegisForm::orderBy('id','ASC')->paginate(7);
        return view('UsersRegisForms.index',compact('usersRegisForms'))
        ->with('i', (request()->input('page', 1) - 1) * 7);

    }

    public function create() {

        $usersRegisForms = new UsersRegisForm();
        $actividads = Actividad::pluck('name','id');
        return view('UsersRegisForms.create', compact('usersRegisForms','actividads'));
    }


    public function store(Request $request){
        request()->validate([
            'fecha_inscripcion' => 'required',
            'name' => 'required|string',
            'appe_mat' => 'required|string',
             'appe_pat' => 'required|string',
             'calle' => 'required|string',
            'numero' => 'required|string',
            'colonia' => 'required|string',
            'codigo_postal' => 'required|string',
            'municipio' => 'required|string',
            'cel' => 'required|integer',
            'email' => 'required|email|unique:users,email',
            'tipo_participante' => 'required|string',
             'enrollment'=>'required|integer',
             'division'=>'required|string',
             'grupo' => 'required|string',
            'cuatrimestre' => 'required|string',
             'activities_id' => 'required'

        ]);

        UsersRegisForm::create($request->all());

        foreach(['rosasa@gmail.com'] as $recipient){
            $correo = new enviar($request->all());
    Mail::to('rosasa@gmail.com')->send($correo);
        }


        return redirect()->route('UsersRegisForms.index')
                        ->with('success','Creada con éxito.');
    }
}
