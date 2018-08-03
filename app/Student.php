<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'questions_id','schools_id',
      'nombres_est','apellidos_est',
      'tipoDocumento_est',
      'identificacion_est','sexo_est','celular_est',
      'correo_est','firma_est',
      'autizacion_uso_datos_personales_est'
    ];

    public function schools()
    {
        return $this->belongsTo(\App\School::class, 'schools_id', 'id');
    }
    

    public function questions(){
    	 return $this->belongsTo(\App\Question::class, 'questions_id', 'id');
    }
}
