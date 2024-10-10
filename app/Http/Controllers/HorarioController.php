<?php
namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{

    public function index(Request $request)
    {
        $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

     $busqueda = $request->input('busqueda');
     $horarios = Horario::     where('dia_semana', 'LIKE', "%$busqueda%")->paginate(7);


    //$horarios = Horario::where('indice', $indice)->get();


    // $horarios = Horario::all();
     //$horarios = Horario::where('activ_id', [0,2])->get();
     return view('horarios.index', compact('horarios', 'diasSemana'));


    }

    public function create()
    {

        $horario = new Horario();
        $actividads = Actividad::pluck('name','id');
        return view('horarios.create', compact('horario','actividads'));

    }

public function store(Request $request)
    {
        $request->validate([
            'dia_semana' => 'required|string|max:255',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'activ_id' => 'required',
        ]);

        Horario::create($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado correctamente.');
    }

    public function edit(Horario $horario)
    {

        $actividads = Actividad::pluck('name','id');
        return view('horarios.edit', compact('horario','actividads'));


    }

    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'dia_semana' => 'sometimes|string|max:255',
            'hora_inicio' => 'sometimes',
            'hora_fin' => 'sometimes',
            'activ_id' => 'sometimes',
        ]);

        $horario->update($request->all());

        return redirect()->route('horarios.index')
                        ->with('success','Horario actualizada con éxito');
    }

    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario eliminado correctamente.');
    }

    }



