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
/*Al abrir el archivo dashboard ahi se tiene la aplicacion vue(diseno) y de ahi para abrir y usar las rutas se usaran las herramientas*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('task','TaskController',['except'=>'show']);