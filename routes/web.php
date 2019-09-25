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


Route::get('/bienvenida/{nombre}/{apellido?}', function ($nombre, $apellido = null) {
    $nombre = strtoupper($nombre);
    // dd('nombre');
        return view('landing-page', compact('nombre', 'apellido'));// ->with(['nombre' => $nombre]);
    });

    Route::get('/contacto', 'SitioController@Contacto')->name('contacto');
    Route::post('/contacto', 'SitioController@guardarComentario')->name('contacto-guardar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
