
<?php

//Ruta Raiz
Route::redirect('/','inicio');

//Ruta de Logueo
Auth::routes();

//rutas Aplicacion
Route::get('inicio',            'web\InicioController@inicio')->name('inicio');

Route::resource('students',     'StudentController');
Route::resource('schools',      'SchoolController');
Route::resource('teachers',     'TeacherController');
Route::resource('questions',    'QuestionController');




Route::resource('events',     'EventController');




//Route::get('enviar-evento','EventController@email')->name('email');

Route::get('enviar-email', function(){

	$schools = App\School::all();
	$events = App\Event::all();
    
	foreach ($schools as $school) {
		foreach ($events as $event)
		
		Mail::send('prueba',['school'=> $school,'event'=>$event], function($message) use ($school,$event){

   	 $message->from('admin@bvc.me','Bolsa de valores');
     $message->to($school->email, $school->nombre_esc)->subject('Invitacion a evento BVC', $school->nombre_esc);

    });
		
	}

 return redirect()->route('events.index');

    })->name('enviar-email');