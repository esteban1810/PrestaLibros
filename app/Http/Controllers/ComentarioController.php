<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

use App\Libro;
use App\User;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentarios.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeLibro(Request $request, $id){

        $libro = Libro::findOrFail($id);

        $libro->comentarios()->create([
            'contenido' => $request->contenido,
            'user_id' => \Auth::id(),
            'comentario_id' => $id,
            'comentario_type' => 'App\Libro'
        ]);

        return back();
    }

    public function storeUser(Request $request, $id){

        $user = User::findOrFail($id);
        
        $user->comentarios()->create([
            'contenido' => $request->contenido,
            'user_id' => \Auth::id(),
            'comentario_id' => $id,
            'comenatario_type' => 'App\User'
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
