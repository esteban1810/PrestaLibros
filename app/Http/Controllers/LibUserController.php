<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LibUser;

use DB;

class LibUserController extends Controller
{
    public function agregar($id){
        
        DB::table('libro_user')->insert([
            'user_id' => \Auth::id(),
            'libro_id' => $id
        ]);

        return back();
    }
}
