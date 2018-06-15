<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['nombre_esc','descripcion_esc','ciudad_esc','email'];



     public function events()
    {
        return $this->belongsToMany('Event');
    }

      public function teachers()
    {
        return $this->hasMany(\App\Teacher::class, 'schools_id');
    }

      public function students()
    {
        return $this->hasMany(\App\Student::class, 'schools_id');
    }

}


