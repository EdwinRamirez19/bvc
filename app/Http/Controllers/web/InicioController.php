<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Student;
use App\School;
class InicioController extends Controller
{
    public function inicio(){

        $students = Student::all();
        $schools = School::all();
        
        $consultas = \DB::table('students')
        ->join("schools","schools.id","=","students.schools_id")
        ->select('nombre_esc','schools.id',\DB::raw('count(*) as cant'))
        ->groupBy('schools_id')
        ->get();

        return view('web.inicios',compact('students','schools','consultas'));
    }
}
