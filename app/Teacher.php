<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    'schools_id',
    'nombres_prof',
    'apellidos_prof',
    'identificacion_prof',
    'celular_prof',
    'correo_prof'];

    public function schools(){
    	 return $this->belongsTo(\App\School::class, 'schools_id', 'id');
    }
}
