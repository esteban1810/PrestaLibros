@extends('generos.master')

@section('contenido')
<div class="card-header">Crear Genero Nuevo</div>
    <div class="card-body">
        @if (isset($genero))
        <form action="{{route('generos.update',$genero->id)}}" method="POST">
        @method('PUT')
        @else
        <form action="{{route('generos.store')}}" method="post">
        @endif
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                {!! Form::text('nombre', $genero->nombre??'', ['class'=>'form-control']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::submit('Aceptar', ['class'=>'btn btn-primary']) !!}
            </div>
        </form>
    </div>
</div>
@endsection