<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/muestraProductos', 'ProductoController@muestraProducto');

Route::get('/agregaProductos', 'ProductoController@agregaProducto');

Route::post('/envio', 'ProductoController@create');

Route::get('/editar/{id}', 'ProductoController@edit');

Route::post('/editar/guardaEdicion', 'ProductoController@guardaEdicion');

Route::get('/borrar/{id}', 'ProductoController@destroy');

Auth::routes();

Route::get('/archivo', 'ProductoController@pruebaArchivo');

Route::post('/guardaArchivo', 'ProductoController@guardaArchivo');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'ProductoController@muestraProducto');

Route::get('/vistaUsuario', 'ProductoController@index');
