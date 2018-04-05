
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



Route::resource('events',     'EventController');