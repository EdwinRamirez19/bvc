<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use App\School;
use App\EventSchool;
use App\Http\Requests\EventSchoolStoreRequest;
use App\Http\Requests\EventSchoolUpdateRequest;
class EventSchoolController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        
        $events_schools = EventSchool::latest()->paginate(3);
          
          $datos = \DB::select("select schools.nombre_esc,                                  events.nombre_even,event_schools.id from 
                               schools, events, event_schools 
                               where schools.id = event_schools.schools_id 
                               and events.id = event_schools.events_id");



    	return view('events_schools.index', compact('datos'));
    }

    public function create(){
        $event_school = null;
    	$events = Event::all();
        $schools = School::all();
    	return view('events_schools.create',compact('events','schools','event_school'));
    }

    public function store(EventSchoolStoreRequest $request){

      
      $event_school = EventSchool::create($request->all());
     
      
      return redirect()->route('events_schools.index',compact('event_school'));
    }

    public function update(EventSchoolUpdateRequest $request, EventSchool $event_school){
       
       //$event = Event::find($id);
       $event_school->update($request->all());

       return redirect()->route('events_schools.index');

    }


    public function edit(EventSchool $event_school){
    	  $schools = School::all();
          $events = Event::all();

          dd($event_school);

    	return view('events_schools.edit',compact('event_school','schools','events'));
    }

    public function show(Event $event){
    	
    	return view('events.show',compact('event'));
    }

    public function destroy(EventSchool $event_school){

    	$event_school->delete();

    	return redirect()->route('events_schools.index');
    }


   

    

}
