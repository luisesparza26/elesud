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

//Contacto
Route::post('/contacto','ContactController@contact')->name('contact');

//Rutas Principales
Route::get('/', 'Web\PageController@inicio');

//Accesibilidad
Route::get('/accesibilidad/{producto}','Web\AccesibilidadController@show');
Route::get('/accesibilidad', 'Web\AccesibilidadController@accesibilidad');

//Ascensores
Route::get('/ascensores/{producto}','Web\AscensoresController@show');
Route::get('/ascensores', 'Web\AscensoresController@ascensores');

//Construccion
Route::get('/construccion/{producto}','Web\ConstruccionController@show');
Route::get('/construccion', 'Web\ConstruccionController@construccion');

//Elevadores no hay vistas
Route::get('/elevadores/{producto}','Web\ElevadoresController@show');
Route::get('/elevadores', 'Web\ElevadoresController@elevadores');



//Escaleras
Route::get('/escaleras/{producto}','Web\EscalerasController@show');
Route::get('/escaleras', 'Web\EscalerasController@escaleras');


//Industrial
Route::get('/industriales/{producto}','Web\IndustrialController@show');
Route::get('/industriales', 'Web\IndustrialController@industriales');


Route::get('/crear_productos','Admin\ProductController@create')->name('crear');
Route::post('/crear_productos','Admin\ProductController@store')->name('store');