<?php

namespace App\Http\Controllers;

use App\Libro;
use DB;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::paginate(10);
        //$libros = Libro::with('autor, titulo, anio, descripcion')->paginate(5);

        return view('libros.index', compact('libros'));
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
        $id = Libro::create($request->all())->id;

        DB::table('libro_user')->insert([
            'user_id' => \Auth::id(),
            'libro_id' => $id,
        ]);

        return $this->index();

        /*return redirect()->route('libros.index')
        ->with([
            'alerta' => 'Libro creado con éxito',
            'clase-alerta' => 'alert-success'
            ]);*/

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
        return view('libros.show',compact('libro'));
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
        Libro::findOrFail($id)->update($request->all());

        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('libro_user')->where('libro_id',$id)->delete();
        Libro::findOrFail($id)->delete();

        return $this->index();/*->with([
            'alerta' => 'Libro eliminado',
            'clase-alerta' => 'alert-danger'
            ]);*/
    }
}
