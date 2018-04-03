<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    'nombres_prof',
    'apellidos_prof',
    'identificacion_prof',
    'celular_prof',
    'correo_prof'];
}
