<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LibUser;
use App\User;
use App\Libro;

class LibUserController extends Controller
{
    public function agregar($id){
        
        $user = User::findOrFail(\Auth::id());

        $user->libros()->sync($id);

        return back();
    }
}
