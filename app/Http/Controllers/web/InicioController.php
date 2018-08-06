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
        
        
        foreach($schools as $school){
            $consultas = \DB::select("select * from students where schools_id = '$school->id'");
        }

        
       
        
       
        return view('web.inicios',compact('students','schools','consultas'));
    }
}
