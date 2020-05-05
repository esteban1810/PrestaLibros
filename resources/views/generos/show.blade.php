@extends('libros.master')

@section('contenido')
<div class="card-header">generos</div>
<div class="card-body">

        <div>
            <h2 class="apartados">Género</h2>
            <p>{{$genero->nombre}}</p>
        </div>
@endsection
