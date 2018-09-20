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

//Rutas Principales
Route::get('/', 'Web\PageController@inicio');

//Accesibilidad
Route::get('/accesibilidad/{producto}','Web\AccesibilidadController@show');
Route::get('/accesibilidad', 'Web\AccesibilidadController@accesibilidad');

//Contacto
Route::post('/contact','ContactController@contact')->name('contacto');








Route::get('/crear_productos','Admin\ProductController@create')->name('crear');
Route::post('/crear_productos','Admin\ProductController@store')->name('store');