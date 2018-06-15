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
       
        return view('students.create', compact('student','schools'));
    }

    public function store(StudentStoreRequest $request)
    {
        $student = Student::create($request->all());

        return redirect()->route('students.index', compact('student'));
    }

    public function show(Student $student)
    {
        
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
       
        $schools = School::all();
       

        return view('students.edit', compact('student','schools'));
    }

   
    public function update(StudentUpdateRequest $request, Student $student)
    {
        
        //$schools = School::all();

        $student->update($request->all());

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');

    }
}
