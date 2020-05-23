@extends('libros.master')

@section('contenido')
<div class="card-header">Acerca del Genero</div>
    <div class="card-body">

        <div>
            <h2>{{$genero->nombre}}</h2>
        </div>

        <a href="{{route('generos.index')}}" class="btn btn-primary">Volver</a>
        <a href="{{route('generos.edit',$genero->id)}}" class="btn btn-warning">Modificar</a>
        <p></p>
        
        @if (count($genero->libros)==0)
            <form action="{{route('generos.destroy',$genero->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar" class="btn btn-danger">
            </form>
        @endif
    </div>
</div>
@endsection
