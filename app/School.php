<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['nombre_esc','descripcion_esc','ciudad_esc'];
}
