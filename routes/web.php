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

Route::post('/comentariosLibros/{libro}', 'ComentarioController@storeLibro')->name('comentarios.storeLibro');

Route::post('/comentariosUsuarios/{user}','ComentarioController@storeUser')->name('comentario.storeUser');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/libros', 'LibroController');

Route::resource('/users', 'UserController');

Route::resource('/comentarios', 'ComentarioController');