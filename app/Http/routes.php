<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UsuariosCtr@usuariosInicio');
Route::post('/verVentas', 'UsuariosCtr@verVentas');
Route::post('/descargaExcel', "UsuariosCtr@descargarExcel");
Route::post('/verPuntos', 'UsuariosCtr@verPuntos');
