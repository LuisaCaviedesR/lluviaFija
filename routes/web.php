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

/*URL,Nombre de la funcion del controlador*/
Route::get('lluviafija/crearAfiliado','AfiliadoController@crearAfiliado');

Route::get('lluviafija/editarAfiliado','AfiliadoController@editarAfiliado');

Route::get('lluviafija/listarAfiliados','AfiliadoController@listarAfiliados');

Route::get('lluviafija/crearCabana','CabanasController@crearCabana');

Route::get('lluviafija/editarCabana','CabanasController@editarCabana');

Route::get('lluviafija/listarCabanas','CabanasController@listarCabanas');
