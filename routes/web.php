<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

Route::post('/quita/{libro}', 'LibUserController@quitar')->name('LibUser.quitar')->middleware('verified');
Route::post('/agregar/{libro}', 'LibUserController@agregar')->name('libUser.agregar')->middleware('verified');

Route::post('/comentarioLibro/{libro}', 'ComentarioController@storeLibro')->name('comentarios.storeLibro')->middleware('verified');
Route::post('/comentarioUser/{user}','ComentarioController@storeUser')->name('comentarios.storeUser')->middleware('verified');

Route::resource('/comentarios', 'ComentarioController')->middleware('verified');

Route::resource('/libros', 'LibroController')->middleware('verified');

Route::resource('/users', 'UserController')->middleware('verified');

Route::resource('/generos', 'GeneroController')->middleware('verified');

Route::get('/librosElim', 'LibroController@indexElim')->name('libros.indexElim')->middleware('verified');
Route::get('/libroShowElim/{libro}', 'LibroController@showElim')->name('libros.showElim')->middleware('verified');
Route::delete('/libroEliminar/{libro}', 'LibroController@eliminar')->name('libros.eliminar')->middleware('verified');
Route::get('/libroRestaurar/{libro}', 'LibroController@restaurar')->name('libros.restaurar');

Route::get('/usersElim', 'UserController@indexElim')->name('users.indexElim')->middleware('verified');
Route::get('/usersElim/{libro}/show', 'UserController@showElim')->name('users.showElim')->middleware('verified');
Route::delete('/usersElim/{libro}/elim', 'UserController@eliminar')->name('users.eliminar')->middleware('verified');
Route::get('/usersElim/{libro}/rest', 'UserController@restaurar')->name('users.restaurar')->middleware('verified');


Route::get('/messages/{libro}/{user}', 'MessageController@solicitud')->name('messages.solicitud')->middleware('verified');

Route::post('/messagesC/{libro}/{user}', 'MessageController@recibo')->name('messages.recibo')->middleware('verified');

Route::get('/imprimir-pdf/{libro}', 'LibroController@imprimir')->name('imprimir')->middleware('verified');

Route::get('/imprimir-userpdf/{user}', 'UserController@imprimirUser')->name('ImprimirDatos')->middleware('verified');

<<<<<<< HEAD
Route::resource('/roles', 'RoleController')->middleware('verified');
=======
Route::get('/imprimir-userpdf/{user}', 'UserController@imprimirUser')->name('ImprimirDatos');

Route::get('emails.libroscount', function(){
    $details = 'prestalibrosgdl@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($details));
    dd('done');
});
>>>>>>> master
