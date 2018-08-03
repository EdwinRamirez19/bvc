<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Student;
class InicioController extends Controller
{
    public function inicio(){

        $students = Student::all();
        

    	return view('web.inicios',compact('students'));
    }
}
