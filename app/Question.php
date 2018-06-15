<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'students_id',
        'conf1' , 'conf2', 'conf3','tem1','tem2','tem3','log1','log2','log3',
        'sugerencia','enterar','medios','informacion','medios1','validar1',
        'cursos','hora','validar2','hora1','temas'
    ];

       public function students()
    {
        return $this->hasMany(\App\Student::class, 'questions_id');
    }
}
