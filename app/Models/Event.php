<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'time_i','time_f','color','start_date', 'end_date'
    ];

 //   public function teacher()
   // {
    //    return $this->hasOne('App\Models\Teacher', 'id', 'teachers_id');
    //}
}
