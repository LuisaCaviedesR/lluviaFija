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

/*URL,Nombre de la funcion del controlador*/

Route::get('/','loginController@login');

Route::get('lluviafija/crearAfiliado','AfiliadoController@crearAfiliado');

Route::get('lluviafija/editarAfiliado','AfiliadoController@editarAfiliado');

Route::get('lluviafija/listarAfiliados','AfiliadoController@listarAfiliados');

Route::resource('cabins', 'CabinController');

Route::get('lluviafija/crearUsuario','UsuariosController@crearUsuario');

Route::get('lluviafija/listarUsuarios','UsuariosController@listarUsuarios');

Route::get('lluviafija/perfilUsuario','UsuariosController@perfilUsuario');

Route::resource('rentals', 'RentalController');

Route::resource('affiliates', 'AffiliateController');

route::get('cabinsPrice/{id}', 'CabinController@getPrice');

