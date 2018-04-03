
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','inicio');

Auth::routes();

Route::get('inicio', 'web\InicioController@inicio')->name('inicio');

Route::resource('students', 'StudentController');
Route::resource('schools', 'SchoolController');
Route::resource('teachers','TeacherController');

