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
Route::get('/nosotros', 'Web\PageController@nosotros');
Route::get('/marcas', 'Web\PageController@marcas');
Route::get('/accesibilidad', 'Web\PageController@accesibilidad');
Route::get('/productos', 'Web\PageController@productos');
Route::get('/proyectos', 'Web\PageController@proyectos');
Route::get('/servicios', 'Web\PageController@servicios');


//Rutas Ascensores
Route::get('/ascensores', 'Web\AscensoresController@ascensores');
Route::get('/ascensores-alta-proteccion', 'Web\AscensoresController@ascensores_alta_proteccion');
Route::get('/ascensores-especiales', 'Web\AscensoresController@ascensores_especiales');
Route::get('/ascensores-industriales', 'Web\AscensoresController@ascensores_industriales');
Route::get('/ascensores-para-explosivos', 'Web\AscensoresController@ascensores_para_explosivos');
Route::get('/ascensores-y-escaleras', 'Web\AscensoresController@ascensores_escaleras');

//Rutas Elevadores
Route::get('/elevador-autos', 'Web\ElevadoresController@elevador_autos');
Route::get('/elevador-carga', 'Web\ElevadoresController@elevador_carga');
Route::get('/elevador-pasajeros', 'Web\ElevadoresController@elevador_pasajeros');
Route::get('/elevador-hidraulico', 'Web\ElevadoresController@elevador_hidraulico');
Route::get('/elevador-hospitales', 'Web\ElevadoresController@elevador_hospitales');
Route::get('/elevador-piscina', 'Web\ElevadoresController@elevador_piscina');
Route::get('/elevador-cremallera', 'Web\ElevadoresController@elevador_cremallera');
Route::get('/elevadores-para-construccion', 'Web\ElevadoresController@elevadores_para_construccion');

//Rutas Escaleras
Route::get('/escaleras-y-rampas', 'Web\EscalerasController@escaleras_y_rampas');
Route::get('/escaleras-electricas', 'Web\EscalerasController@escaleras_electricas');
Route::get('/escaleras-mecanicas', 'Web\EscalerasController@escaleras_mecanicas');
Route::get('/escaleras-publicas', 'Web\EscalerasController@escaleras_publicas');

//Rutas Orugas
Route::get('/orugas', 'Web\OrugasController@orugas');

//Rutas Plataformas
Route::get('/plataforma-delta', 'Web\PlataformasController@plataforma_delta');
Route::get('/plataforma-omega', 'Web\PlataformasController@plataforma_omega');
Route::get('/plataforma-salvaescaleras', 'Web\PlataformasController@plataforma_salvaescaleras');
Route::get('/plataforma-stratos', 'Web\PlataformasController@plataforma_stratos');
Route::get('/plataformas-verticales', 'Web\PlataformasController@plataformas_verticales');

//Rutas Sillas
Route::get('/silla-curva', 'Web\PageController@inicio');
Route::get('/silla-recta', 'Web\PageController@inicio');
Route::get('/accesibilidad/silla-salvaescaleras', 'Web\PageController@inicio');

//Rutas Marcas
Route::get('/sa3-sa-s', 'Web\PageController@inicio');
Route::get('/stairmax', 'Web\PageController@inicio');






