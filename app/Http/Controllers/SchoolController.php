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


          $school = null;
          return view('schools.create', compact('school'));
    }


    public function store(SchoolStoreRequest $request){

    	$school = School::create($request->all());
          
          return redirect()->route('schools.index', compact('schools.index','school'));
    }

    public function edit(School $school){
          
      return view('schools.edit',compact('school'));

    }

    public function show( School $school){
          
          return view('schools.show',compact('school'));

    }

    public function update(SchoolUpdateRequest $request, School $school){
    	
      $school->update($request->all());

    	return redirect()->route('schools.index');
    }

    public function destroy(School $school){
      
       $school->delete();
       return redirect()->route('schools.index');

    }
}
