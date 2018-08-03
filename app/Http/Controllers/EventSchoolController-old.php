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
        
        $event_schools = \DB::table('event_schools')
        ->join("schools","schools.id","=","event_schools.schools_id")
        ->join("events","events.id","=","event_schools.events_id")
        ->select(\DB::raw("schools.nombre_esc, events.nombre_even,event_schools.id"))
        ->orderBy('event_schools.id','DESC')
        ->paginate(3);
        
        return view('events_schools.index', compact('event_schools'));
    }

    public function create(){

        $event_schools = null;
    	$events = Event::all();
        $schools = School::all();
    	return view('events_schools.create',compact('events','schools','event_schools'));
    }

    public function store(Request $request){
    
        $event_schools = EventSchool::create($request->all());
        return redirect()->route('events_schools.index',compact('event_schools'));

    }

    public function update(Request $request, EventSchool $event_school){
       
       //$event = Event::find($id);
        $event_school->update($request->all());
        return redirect()->route('events_schools.index');

    }


    public function edit(EventSchool $event_school){
        $schools = School::all();
        $events = Event::all();
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
