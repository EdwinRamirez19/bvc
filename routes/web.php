
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