
<?php
 
Route::get('/', function () {
    return view('welcome');
});

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


   Route::middleware(['auth'])->group(function(){

    //Roles

        Route::post('roles/store','RoleController@store')->name('roles.store')
              ->middleware('permission:roles.create');

        Route::get('roles','RoleController@index')->name('roles.index')
              ->middleware('permission:roles.index');

        Route::get('roles/create','RoleController@create')->name('roles.create')
              ->middleware('permission:roles.create');

        Route::post('roles/{role}','RoleController@update')->name('roles.update')
              ->middleware('permission:roles.edit');

        Route::post('roles/{role}','RoleController@show')->name('roles.show')
              ->middleware('permission:roles.show');

        Route::post('roles/{role}','RoleController@destroy')->name('roles.destroy')
              ->middleware('permission:roles.destroy');

        Route::post('roles/{role}/edit','RoleController@edit')->name('roles.edit')
              ->middleware('permission:roles.edit');



              //Events


        Route::post('events/store','EventController@store')->name('events.store')
              ->middleware('permission:events.create');

        Route::get('events','EventController@index')->name('events.index')
              ->middleware('permission:events.index');

        Route::get('events/create','EventController@create')->name('events.create')
              ->middleware('permission:events.create');

        Route::post('events/{role}','EventController@update')->name('events.update')
              ->middleware('permission:events.edit');

        Route::post('events/{role}','EventController@show')->name('events.show')
              ->middleware('permission:events.show');

        Route::post('events/{role}','EventController@destroy')->name('events.destroy')
              ->middleware('permission:events.destroy');

        Route::post('events/{role}/edit','EventController@edit')->name('events.edit')
              ->middleware('permission:events.edit');


        //Users


        Route::get('users','UserController@index')->name('users.index')
              ->middleware('permission:users.index');

        Route::post('users/{role}','UserController@update')->name('users.update')
              ->middleware('permission:users.edit');

        Route::post('users/{role}','UserController@show')->name('users.show')
              ->middleware('permission:users.show');

        Route::post('users/{role}','UserController@destroy')->name('users.destroy')
              ->middleware('permission:users.destroy');

        Route::post('users/{role}/edit','UserController@edit')->name('users.edit')
              ->middleware('permission:users.edit');







   });