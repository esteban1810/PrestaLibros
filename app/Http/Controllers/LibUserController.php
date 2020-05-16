<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LibUser;
use App\User;
use App\Libro;

class LibUserController extends Controller
{
    protected $fillable = [
        'user_id',
        'libro_id'
    ];
<<<<<<< HEAD
    
=======
>>>>>>> master
    public function agregar($id){

        $user = User::findOrFail(\Auth::id());

        $user->libros()->sync($id);

        return back();
    }

    public function quitar($id){

        $user = User::findOrFail(\Auth::id());

        $user->libros()->detach($id);

        return back();
    }
}
