<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Libro as LibroResource;
use App\Libro;
use App\User;

class ApiController extends Controller
{
    public function getColeccion(Request $request){
        $user = User::where('email',$request->input('email'))->first();
        return response()->json(LibroResource::collection($user->libros->keyBy->id),200);
    }
}
