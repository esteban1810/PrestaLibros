@extends('libros.master')

@section('contenido')
<div class="card-header">Nuevo Libro</div>

<div class="card-body">

    <div class="float-right">
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Ver Lista</a>
    </div>

    @if (isset($libro))
        <form action="{{route('libros.update',$libro->id)}}" method="POST">
            @method('PUT')
    @else
        <form action="{{route('libros.store')}}" method="POST">
            <?php $libro = new App\Libro() ?>
    @endif
        <div class="form-group col-md-12">
            <label for="autor">Autor</label>
            <input class="form-control" type="text" name="autor" value="{{$libro->autor}}">
        </div>
        <div class="form-group col-md-12">
            <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo" value="{{$libro->titulo}}">
        </div>
        <div class="form-group col-md-12">
            <label for="editorial">Editorial</label>
            <input class="form-control" type="text" name="editorial" value="{{$libro->editorial}}">
        </div>
        <div class="form-group col-md-12">
            <label for="edicion">Edicion</label>
            <input class="form-control" type="text" name="edicion" value="{{$libro->edicion}}">
        </div>
        <div class="form-group col-md-12">
            <label for="anio">Año</label>
            <input class="form-control" type="text" name="anio" value="{{$libro->anio}}">
        </div>
        <div class="form-group col-md-12">
        <label for="genero">Genero</label>
        <input class="form-control" type="select" name="genero" value="{{$libro->genero}}">
        </div>
        {{--{!! Form::select('genero_id', $generos ,null, ['class' => 'form-control']) !!}--}}

        <div class="form-group col-md-12">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" rows="3" name="descripcion">{{$libro->descripcion}}</textarea>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" class="btn btn-primary" value="Aceptar">
        </div>
        @csrf
    </form>
</div>
@endsection
