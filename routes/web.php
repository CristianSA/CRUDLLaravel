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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* Crearemos las rutas para las distintas acciones */
/* Editar */
Route::get('/edit/{id}', 'UserController@editUser')->name('user.edit');
/* Guardar editado */
Route::post('/edit/save/{id}', 'UserController@saveUser')->name('user.save');
/* Eliminar */
/* Mostrar */
