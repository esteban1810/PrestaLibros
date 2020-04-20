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

<<<<<<< HEAD
Route::post('/quita/{libro}', 'LibUserController@quitar')->name('LibUser.quitar');

Route::post('/agregar/{libro}', 'LibUserController@agregar')->name('libUser.agregar');

Route::post('/comentarioLibro/{libro}', 'ComentarioController@storeLibro')->name('comentarios.storeLibro');

Route::post('/comentarioUser/{user}','ComentarioController@storeUser')->name('comentarios.storeUser');
=======
Route::post('/comentariosLibros/{libro}', 'ComentarioController@storeLibro')->name('comentarios.storeLibro');

Route::post('/comentariosUsuarios/{user}','ComentarioController@storeUser')->name('comentario.storeUser');
>>>>>>> master

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/libros', 'LibroController');

Route::resource('/users', 'UserController');

<<<<<<< HEAD
Route::resource('/comentarios', 'ComentarioController');
=======
Route::resource('/comentarios', 'ComentarioController');
>>>>>>> master
