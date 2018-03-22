<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'nombres_est','apellidos_est',
      'identificacion_est','celular_est',
      'correo_est','firma_est',
      'autizacion_uso_datos_personales_est'
    ];
    
}
