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

        /*$consulta = Student::join("schools","schools.id","=","students.schools_id")
        ->where("schools.id","=",$school->schools_id)
        ->get();*/
        
        
        foreach($schools as $school){
            $consultas = \DB::select("select * from students where schools_id = '$school->id'");
            dd($consultas);
        }

        
       
        
       
        return view('web.inicios',compact('students','schools','consultas'));
    }
}
