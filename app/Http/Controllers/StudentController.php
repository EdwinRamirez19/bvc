<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;
use App\Inquest;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
class StudentController extends Controller
{
    
    public function __construct(){
       
       $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::latest()->paginate(3);

        return view('students.index', compact('students'));
        
    }

    public function create()
    {
        $student = null;
        $schools = School::all();
       //$inquests = Inquest::all();
        return view('students.create', compact('student','schools'));
    }

    public function store(StudentStoreRequest $request)
    {
        $student = Student::create($request->all());

        return redirect()->route('students.index')
            ->with('info','Estudiante Creado con Exito');
    }

    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $schools = School::all();
        //$inquests = Inquest::all();

        return view('students.edit', compact('student','schools'));
    }

   
    public function update(StudentUpdateRequest $request, $id)
    {
        $student = Student::find($id);
         $schools = School::all();
        $student->update($request->all());

        return redirect()->route('students.index',compact('student','schools'))->with('info','Estudiante Actualizado con éxito');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();

        return back()->with('info','Eliminado Correctamente');

    }
}
