<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Libro;
use App\LibUser;
use DB;

use Illuminate\Http\Request;

class LibroController extends Controller
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
        $libros = Libro::with('genero')->paginate(10);
        $visible=false;
        return view('libros.index', compact(['libros','visible']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'genero_id' => 'required',
            'autor' => 'required|max:255',
            'titulo' => 'required',
            'editorial' => 'required',
            'edicion' => 'required|int',
            'anio' => 'required|max:2020',
            'descripcion' => 'required|max:255'
        ]);

        $libro = (new Libro)->fill($request->all());

        if($request->hasFile('portada')){
            $libro->portada = $request->file('portada')->store('public');
        } else {
            $libro->portada = "default.jpg";
        }

        $libro->save();

        $libro->users()->attach(\Auth::id());

        return redirect()->route('libros.index')
        ->with([
            'alerta' => 'Libro creado con éxito',
            'clase-alerta' => 'alert-success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        $visible = false;
        return view('libros.show',compact(['libro','visible']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.form',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'autor' => 'required|max:255',
            'titulo' => 'required',
            'editorial' => 'required',
            'edicion' => 'required|int',
            'anio' => 'required|max:2020',
            'descripcion' => 'required|max:255'
        ]);
        
        $libro = Libro::findOrFail($id)->fill($request->all());

        if($request->hasFile('portada')){
            $libro->portada = $request->file('portada')->store('public');
        } else {
            $libro->portada = "default.jpg";
        }

        $libro->save();

        return redirect()->route('libros.show', $id)
        ->with([
            'alerta' => 'Libro editado con éxito',
            'clase-alerta' => 'alert-info'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LibUser::where('libro_id',$id)->delete();
        Comentario::commentsLib($id)->delete();
        Libro::findOrFail($id)->delete();

        return redirect()->route('libros.index')
        ->with([
            'alerta' => 'Libro eliminado',
            'clase-alerta' => 'alert-danger'
            ]);
    }

    public function eliminar($id){
        LibUser::where('libro_id',$id)->forceDelete();
        Comentario::commentsLib($id)->forceDelete();
        Libro::where('id',$id)->forceDelete();

        return redirect()->route('libros.indexElim')
        ->with([
            'alerta' => 'Libro eliminado permanentemente',
            'clase-alerta' => 'alert-danger'
            ]);
    }

    public function restaurar($id){
        Comentario::commentsLib($id)->restore();
        Libro::where('id',$id)->restore();

        return redirect()->route('libros.indexElim')
        ->with([
            'alerta' => 'Libro restaurado con éxito',
            'clase-alerta' => 'alert-success'
            ]);
    }

    public function showElim($id)
    {
        $libro = Libro::onlyTrashed()->with(['comentarios','users'])->firstWhere('id',$id);
        $visible = true;
        return view('libros.show',compact(['libro','visible']));
    }

    public function indexElim(){
        $libros = Libro::onlyTrashed()->get();
        $visible = true;
        return view('libros.index', compact(['libros','visible']));
    }
}
