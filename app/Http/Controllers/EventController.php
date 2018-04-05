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
   
   $events = null;
   return view('events.create',compact('events'));

   }

   public function store(EventsStoreRequest $request){
   
   $events = Events::create($request->all());
     
     return redirect()->route('events.index');
     


   }

   public function show($id){
   

   $events = Events::find($id);

   return view('events.show', compact('events'));

   }

   public function edit($id){
    $events = Events::find($id);
    return view('events.edit',compact('events'));
   }

   public function update(EventsUpdateRequest $request, $id){
    
    $events = Events::find($id);
    $events->update($request->all());

    return redirect()->route('events.index');

   }

   public function distroy($id){
    Events::find($id)->delete();
    return back()->with('info','Evento Eliminado Con Exito');
   }
}
