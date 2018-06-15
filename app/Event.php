<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['schools_id','nombre_even','lugar_even','descripcion_even','tipo_even','organizador_even', 'fecha_even','hora_even'];

     public function schools()
    {
        return $this->belongsToMany('School');
    }
}
