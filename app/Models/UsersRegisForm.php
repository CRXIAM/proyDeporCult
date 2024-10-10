<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRegisForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inscripcion','name','appe_mat','appe_pat', 'calle', 'numero', 'colonia','codigo_postal','municipio','cel','email','tipo_participante', 'enrollment',  'division','grupo','cuatrimestre','turno', 'activities_id'
    ];

    public function actividad()
    {
        return $this->hasOne('App\Models\Actividad', 'id', 'activities_id');
    }
}
