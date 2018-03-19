<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\http\request\StudentStoreRequest;
use App\http\request\StudentUpdateRequest;
class StudentController extends Controller
{
    
    public function __construct(){
       
       $this->middleware('auth');
    }

    public function index()
    {

        $students = Student::orderBy('id','desc')->paginate(4);
        //dd($students);
        return view('students.index', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreRequest $request)
    {
        $student = Student::create($request->all());
        return redirect()->route('students.edit',$student->id)
            ->witd('info','Estudiante Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequest $request, $id)
    {
        $student = Student::find($id);
        $student->fill($request->all())->save();

        return redirect()->route('students.edit',$student->id)->with('info','Estudiante Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return back()->with('info','Eliminado Correctamente');

    }
}
