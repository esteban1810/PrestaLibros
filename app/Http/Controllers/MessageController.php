<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

use App\Libro;
use App\User;

class MessageController extends Controller
{
    public function recibo(Request $request,$libro_id,$user_id)
    {
        $user = User::findOrFail($user_id);
        Mail::to($user->email)->send(new MessageReceived($request,$libro_id,$user_id));

        //return 'Mensaje Enviado';
        return redirect()->route('libros.show',$libro_id)
        ->with([
            'alerta' => 'Correo enviado con exito',
            'clase-alerta' => 'alert-success'
            ]);
    }

    public function solicitud($libro_id,$user_id){
        $libro = Libro::findOrFail($libro_id);
        $user = User::findOrFail($user_id);
        $miUser = User::findOrFail(\Auth::id());
        return view('messages.create',compact(['libro','user','miUser']));
    }
}
