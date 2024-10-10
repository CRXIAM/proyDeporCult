<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image','teachers_id'];

    function notes() {
        return $this->hasMany(Actividad::class);
    }

    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'teachers_id');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class, 'activ_id', 'id');
    }
}
