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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::post('/quita/{libro}', 'LibUserController@quitar')->name('LibUser.quitar');
Route::post('/agregar/{libro}', 'LibUserController@agregar')->name('libUser.agregar');

Route::post('/comentarioLibro/{libro}', 'ComentarioController@storeLibro')->name('comentarios.storeLibro');
Route::post('/comentarioUser/{user}','ComentarioController@storeUser')->name('comentarios.storeUser');

Route::resource('/comentarios', 'ComentarioController');

Route::resource('/libros', 'LibroController');

Route::resource('/users', 'UserController');

Route::resource('/generos', 'GeneroController');

Route::get('/librosElim', 'LibroController@indexElim')->name('libros.indexElim');
Route::get('/libroShowElim/{libro}', 'LibroController@showElim')->name('libros.showElim');
Route::delete('/libroEliminar/{libro}', 'LibroController@eliminar')->name('libros.eliminar');
Route::get('/libroRestaurar/{libro}', 'LibroController@restaurar')->name('libros.restaurar');

Route::get('/usersElim', 'UserController@indexElim')->name('users.indexElim');
Route::get('/usersElim/{libro}/show', 'UserController@showElim')->name('users.showElim');
Route::delete('/usersElim/{libro}/elim', 'UserController@eliminar')->name('users.eliminar');
Route::get('/usersElim/{libro}/rest', 'UserController@restaurar')->name('users.restaurar');