<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LibUser;

class LibUserController extends Controller
{
    public function agregar($id){
        LibUser::create([
            'user_id' => \Auth::id(),
            'libro_id' => $id
        ])
    }
}
