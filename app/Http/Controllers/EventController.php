<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
class EventController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        
        $events = Event::latest()->paginate(3);
    	return view('events.index', compact('events'));
    }

    public function create(){

    	$event = null;
    	return view('events.create');
    }

    public function store(EventStoreRequest $request){
      
      $event = Event::create($request->all());
      return redirect()->route('events.index');
    }
    public function update(EventUpdateRequest $request,$id){

       $event = Event::find($id);
       $event->update($request->all());
       return view('events.index',compact('event'));

    }


    public function edit($id){
    	$event = Event::find($id);
    	return view('events.edit',compact('event'));
    }

    public function show($id){
    	$event = Event::find($id);
    	return view('events.show',compact('event'));
    }

    public function destroy($id){
    	Event::find($id)->delete();
    	return redirect()->route('events.index');
    }

    

}
