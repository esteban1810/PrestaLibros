<?php

namespace App\Http\Controllers;

use App\Archivos;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->mi_archivo->isValid()) { //Valida carga

            //Guarda en storage/app/archivos_cargados
            $nombreHash = $request->mi_archivo->store('archivos_cargados');

            //Crea registro en tabla archivos
            Archivos::create([
                'nombre_original' => $request->archivo->getClientOriginalName(),
                'hash' => $nombreHash,
                'mime' => $request->archivo->getClientMimeType(),
                'tamaño' => $request->archivo->getClientSize(),
            ]);
        }

        return redirect()->back();
    }

    public function download(Archivos $archivo)
    {
        //Obtiene ruta del archivo
        $rutaArchivo = storage_path('app/' . $archivo->hash);

        //La respuesta contiene el archivo con el tipo de documento
        return response()->download($rutaArchivo, $archivo->original, ['Content-Type' => $archivo->mime]);
    }

    public function delete(Archivos $archivo)
    {
        $rutaArchivo = storage_path($archivo->hash);

        //Verifica la existencia del archivo
        if (\Storage::exists($archivo->hash)) {
            \Storage::delete($archivo->hash); //Elimina archivo
            $archivo->delete(); //Elimina registro en tabla
        }

        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivo = Archivos::all();
        return view('archivos.index',compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function show(Archivos $archivos)
    {
        $archivo = Archivos::findOrFail($archivos);
        return view('archivos.form',compact('archivos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivos $archivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivos $archivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivos $archivos)
    {
        //
    }
}
