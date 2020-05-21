<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

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


//Route::resource('/messages', 'MessageController');

Route::get('/messages/{libro}/{user}', 'MessageController@solicitud')->name('messages.solicitud');

Route::post('/messagesC/{libro}/{user}', 'MessageController@recibo')->name('messages.recibo');

Route::get('/imprimir-pdf/{libro}', 'LibroController@imprimir')->name('imprimir');

Route::get('/imprimir-userpdf/{user}', 'UserController@imprimirUser')->name('ImprimirDatos');

