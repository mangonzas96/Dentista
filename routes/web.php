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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('odontologos','OdontologoController');
Route::resource('pacientes','PacientesController');
Route::resource('sesions','SesionController');
Route::resource('tratamientos','TratamientoController');

//Vistas register y home
/*
Route::get('/registerodontologo', function () {
    return view('auth/registerodontologo');
});
Route::get('/registerpaciente', function () {
    return view('auth/registerpaciente');
});

Route::get('/homesecretaria', function (){
    return view('homesecretaria');
});

Route::get('/homedoctor', function (){
    return view('homedoctor');
});
 */