<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['dia_semana','hora_inicio','hora_fin', 'activ_id'];


    public function actividad()
    {
        return $this->hasOne('App\Models\Actividad', 'id', 'activ_id');

        return $this->belongsTo(Actividad::class);
    }
}
