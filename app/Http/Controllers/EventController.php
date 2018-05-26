<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
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
    	return view('events.create',compact('event'));
    }

    public function store(EventStoreRequest $request){
      
      $event = Event::create($request->all());
      return redirect()->route('events.index',compact('event'));
    }

    public function update(EventUpdateRequest $request, Event $event){
       
       //$event = Event::find($id);
       $event->update($request->all());

       return redirect()->route('events.index');

    }


    public function edit(Event $event){
    	
    	return view('events.edit',compact('event'));
    }

    public function show(Event $event){
    	
    	return view('events.show',compact('event'));
    }

    public function destroy(Event $event){

    	$event->delete();

    	return redirect()->route('events.index');
    }


   

    

}
