<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Http\Requests\SchoolStoreRequest;
use App\Http\Requests\SchoolUpdateRequest;
class SchoolController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
	}

    public function index(){

          $schools = School::latest()->paginate(3);
          return view('schools.index',compact('schools'));
    }


    public function create(){
          
          return view('schools.create');
    }


    public function store(SchoolStoreRequest $request){

    	$school = School::create($request->all());
          
          return redirect()->route('schools.index')
          ->with('info','Escuela Creada Exitosamente');
    }

    public function edit($id){
          
          $school = School::find($id);
          return view('schools.edit',compact('school'));

    }

    public function show($id){
          
          $school = School::find($id);
          return view('schools.show',compact('school'));

    }

    public function update(SchoolUpdateRequest $request, $id){
    	$school = School::find($id);
    	$school->update($request->all());
    	return redirect()->route('schools.index')->with('info','Escuela Actualizada Exitosamente');
    }

    public function destroy($id){
      
       School::find($id)->delete();
       return redirect()->route('schools.index')->with('info','Escuela Eliminada Exitosamente');

    }
}
