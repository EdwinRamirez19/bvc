<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Http\Requests\TeacherStoreRequest;
use App\Http\Requests\TeacherUpdateRequest;
class TeacherController extends Controller
{

	public function __construct(){

		$this->middleware('auth');
	}

   public function index(){
   
     $teachers = Teacher::latest()->paginate(3);  
     return view('teachers.index', compact('teachers'));

   }

   public function create(){
   
   $teacher = null;
   return view('teachers.create',compact('teacher'));

   }

   public function store(TeacherStoreRequest $request){
   
   $teacher = Teacher::create($request->all());
     
     return redirect()->route('teachers.index');
     


   }

   public function show($id){
   

   $teacher = Teacher::find($id);

   return view('teachers.show', compact('teacher'));

   }

   public function edit($id){
   	$teacher = Teacher::find($id);
    return view('teachers.edit',compact('teacher'));
   }

   public function update(TeacherUpdateRequest $request, $id){
    
    $teacher = Teacher::find($id);
    $teacher->update($request->all());

    return redirect()->route('teachers.index');

   }

   public function distroy($id){
   	Teacher::find($id)->delete();
   	return back()->with('info','Docente Eliminado Con Exito');
   }
}
