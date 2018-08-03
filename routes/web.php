
<?php
 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//rutas Aplicacion
Route::get('inicio',            'web\InicioController@inicio')->name('inicio');

//Route::resource('students',     'StudentController');
//Route::resource('schools',      'SchoolController');
//Route::resource('teachers',     'TeacherController');
//Route::resource('questions',    'QuestionController');

//Route::resource('events',     'EventController');

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

        Route::put('roles/{role}','RoleController@update')->name('roles.update')
              ->middleware('permission:roles.edit');

        Route::get('roles/{role}','RoleController@show')->name('roles.show')
              ->middleware('permission:roles.show');

        Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
              ->middleware('permission:roles.destroy');

        Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
              ->middleware('permission:roles.edit');



              //Events


        Route::post('events/store','EventController@store')->name('events.store')
              ->middleware('permission:events.create');

        Route::get('events','EventController@index')->name('events.index')
              ->middleware('permission:events.index');

        Route::get('events/create','EventController@create')->name('events.create')
              ->middleware('permission:events.create');

        Route::put('events/{event}','EventController@update')->name('events.update')
              ->middleware('permission:events.edit');

        Route::get('events/{event}','EventController@show')->name('events.show')
              ->middleware('permission:events.show');

        Route::delete('events/{event}', 'EventController@destroy')->name('events.destroy')
              ->middleware('permission:events.destroy');

        Route::get('events/{event}/edit','EventController@edit')->name('events.edit')
              ->middleware('permission:events.edit');


        
       //Questions

         Route::post('questions/store','QuestionController@store')->name('questions.store')
              ->middleware('permission:questions.create');

        Route::get('questions','QuestionController@index')->name('questions.index')
              ->middleware('permission:questions.index');

        Route::get('questions/create','QuestionController@create')->name('questions.create')
              ->middleware('permission:questions.create');

        Route::put('questions/{question}','QuestionController@update')->name('questions.update')
              ->middleware('permission:questions.edit');

        Route::get('questions/{question}','QuestionController@show')->name('questions.show')
              ->middleware('permission:questions.show');

        Route::delete('questions/{question}','QuestionController@destroy')->name('questions.destroy')
              ->middleware('permission:questions.destroy');

        Route::get('questions/{question}/edit','QuestionController@edit')->name('questions.edit')
              ->middleware('permission:questions.edit');
   

     


        //Schools


        Route::post('schools/store','SchoolController@store')->name('schools.store')
              ->middleware('permission:schools.create');

        Route::get('schools','SchoolController@index')->name('schools.index')
              ->middleware('permission:schools.index');

        Route::get('schools/create','SchoolController@create')->name('schools.create')
              ->middleware('permission:schools.create');

        Route::put('schools/{school}','SchoolController@update')->name('schools.update')
              ->middleware('permission:schools.edit');

        Route::get('schools/{school}','SchoolController@show')->name('schools.show')
              ->middleware('permission:schools.show');

        Route::delete('schools/{school}','SchoolController@destroy')->name('schools.destroy')
              ->middleware('permission:schools.destroy');

        Route::get('schools/{school}/edit','SchoolController@edit')->name('schools.edit')
              ->middleware('permission:schools.edit');



        //Students


        Route::post('students/store','StudentController@store')->name('students.store')
              ->middleware('permission:students.create');

        Route::get('students','StudentController@index')->name('students.index')
              ->middleware('permission:students.index');

        Route::get('students/create','StudentController@create')->name('students.create')
              ->middleware('permission:students.create');

        Route::put('students/{student}','StudentController@update')->name('students.update')
              ->middleware('permission:students.edit');

        Route::get('students/{student}','StudentController@show')->name('students.show')
              ->middleware('permission:students.show');

        Route::delete('students/{student}','StudentController@destroy')->name('students.destroy')
              ->middleware('permission:students.destroy');

        Route::get('students/{student}/edit','StudentController@edit')->name('students.edit')
              ->middleware('permission:students.edit');



        //Teachers


        Route::post('teachers/store','TeacherController@store')->name('teachers.store')
              ->middleware('permission:teachers.create');

        Route::get('teachers','TeacherController@index')->name('teachers.index')
              ->middleware('permission:teachers.index');

        Route::get('teachers/create','TeacherController@create')->name('teachers.create')
              ->middleware('permission:teachers.create');

        Route::put('teachers/{teacher}','TeacherController@update')->name('teachers.update')
              ->middleware('permission:teachers.edit');

        Route::get('teachers/{teacher}','TeacherController@show')->name('teachers.show')
              ->middleware('permission:teachers.show');

        Route::delete('teachers/{teacher}','TeacherController@destroy')->name('teachers.destroy')
              ->middleware('permission:teachers.destroy');

        Route::get('teachers/{teacher}/edit','TeacherController@edit')->name('teachers.edit')
              ->middleware('permission:teachers.edit');


       




        //Users


        Route::get('users','UserController@index')->name('users.index')
              ->middleware('permission:users.index');

        Route::put('users/{user}','UserController@update')->name('users.update')
              ->middleware('permission:users.edit');

        Route::get('users/{user}','UserController@show')->name('users.show')
              ->middleware('permission:users.show');

        Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
              ->middleware('permission:users.destroy');

        Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
              ->middleware('permission:users.edit');

   });


Route::resource('events_schools','EventSchoolController');

              




Route::get('Listado/reporte/{id_even}','ReporteController@reporte')->name('listado');
Route::get('Listado/reporteExcel/{id_even}','ReporteController@reporteExcel')->name('excel');

Route::get('Listado/reporteExcel2/{id_even}','ReporteController@reporteExcel2')->name('excel2');


