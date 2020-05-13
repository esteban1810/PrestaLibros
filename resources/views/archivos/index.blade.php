@extends('libros.master')
<div class="card">
    <div class="card-header">Archivos Cargados</div>
    <div class="card-body">
      <table class="table">
        <tr>
          <th>Archivo</th>
          <th>Tamaño</th>
          <th colspan="2">Acciones</th>
        </tr>

        @foreach($archivos as $archivo)
          <tr>
            <td>{{ $archivo->nombre_original }}</td>
            <td>{{ $archivo->tamaño }}</td>
            <td>
              <a href="{{ route('archivo.download', $archivo->id) }}" class="btn btn-sm btn-success">Descargar</a>
            </td>
            <td>
              <!-- Formulario para eliminar archivo -->
              {!! Form::open(['route' => ['archivo.delete', $archivo->id]]) !!}
              <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach

      </table>
    </div>
  </div>
