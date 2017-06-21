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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('odontologos','OdontologoController');
Route::resource('pacientes','PacienteController');
Route::resource('sesions','SesionController');
Route::resource('tratamientos','TratamientoController');
Route::resource('aseguradoras','AseguradoraController');
Route::resource('gabinetes','GabineteController');
Route::resource('especialidads','EspecialidadController');

Route::delete('especialidades/destroyAll', 'EspecialidadController@destroyAll')->name('especialidades.destroyAll');

Route::delete('sesions/destroyAll', 'SesionController@destroyAll')->name('sesions.destroyAll');

//Vistas register y home


Route::get('/registerpaciente', function () {
    return view('auth/registerpaciente');
})->name('auth/registerpaciente');

/*Route::get('/home', function (){
    return view('home');
});

Route::get('/homepaciente', function (){
    return view('homepaciente');
}); */

Route::get('/home', 'HomeController@index');
Route::get('/homepaciente', 'HomeController@index');
//Route::get('/registerpaciente', 'HomeController@showRegistrationFormPaciente');

Auth::routes();
