<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

use App\Libro;
use App\User;

class ComentarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
    // public function store(Request $request)
    // {
    //     var_dump($request->titulo);
    //     return;
    //     Comentario::create($request->all());
        
    // }

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
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::findOrFail($id);
        
        $this->authorize('acceso',$comentario);

        return view('comentarios.show',compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comentario = Comentario::findOrFail($id);
        $this->authorize('acceso',$comentario);
        $comentario->update($request->all());
        // $comentario = Comentario::findOrFail($id)->update($request->all());
    
        return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $this->authorize('acceso',$comentario);
        $comentario->delete();
        //Comentario::findOrFail($id)->delete();

        return back();
    }
}
