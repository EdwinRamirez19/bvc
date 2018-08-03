<?php

namespace App\Http\Controllers;
Use App\EventSchool;
Use App\Event;
Use App\School;
use Illuminate\Http\Request;

class EventSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct(){
       
        $this->middleware('auth');
     }
 
    public function index()
    {
        $event_schools = \DB::table('event_schools')
        ->join("schools","schools.id","=","event_schools.school_id")
        ->join("events","events.id","=","event_schools.event_id")
        ->select(\DB::raw("schools.nombre_esc, events.nombre_even,event_schools.id"))
        ->orderBy('event_schools.id','DESC')
        ->paginate(3);
        

        return view('events_schools.index',compact('event_schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $events = Event::all();
        $schools = School::all();
        return view('events_schools.create',compact('events','schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_school = EventSchool::create($request->all());

        return redirect()->route('events_schools.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $event_school = EventSchool::find($id);
        return view('events_schools.show',compact('event_school','event_schools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event_school = EventSchool::find($id);
        $events = Event::orderBy('id','DESC')->pluck('nombre_even','id');
        $schools = School::orderBy('id','DESC')->pluck('nombre_esc','id');
        return view('events_schools.edit',compact('event_school','events','schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event_school = EventSchool::find($id);
        $event_school->fill($request->all())->save();
        return redirect()->route('events_schools.index',compact('event_school'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventSchool::find($id)->delete();
        return redirect()->route('events_schools.index');
    }
}
