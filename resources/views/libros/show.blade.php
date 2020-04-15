@extends('libros.master')

@section('contenido')
<div class="card-header">Libros</div>

<div class="card-body">
    <p>
        <form action="{{route('libros.create')}}" method="GET">
            <input type="submit" class="btn btn-primary" value="Agregar">
        </form>
    </p>
    <p>
        <form action="{{route('libros.index')}}" method="GET">
            <input type="submit" class="btn btn-primary" value="Todo">
        </form>
    </p>

    <h1>{{$libro->titulo}}</h1>

    <div>
        <div>
            <h2>Autor</h2>
            <p>{{$libro->autor}}</p>
        </div>
    
        <div>
            <h2>Género</h2>
            <p>#Aqui va el genero#</p>
        </div>
    
        <div>
            <h2>Editorial</h2>
            <p>{{$libro->editorial}}</p>
        </div>
    
        <div>
            <h2>Edición</h2>
            <p>{{$libro->edicion}}</p>
        </div>
    
        <div>
            <h2>Año De Publicación</h2>
            <p>{{$libro->anio}}</p>
        </div>
    
        <div>
            <h2>Descripcion</h2>
            <p>{{$libro->descripcion}}</p>
        </div>
    </div>
    <hr>

    <div class="form-group col-md-6">
        <form action="{{route('libros.edit',$libro->id)}}" method="GET">
            <input type="submit" class="btn btn-warning" value="Editar">
        </form>
    </div>

    <div class="form-group col-md-6">
        <form action="{{route('libros.destroy',$libro->id)}}" method="POST">
            <input type="submit" class="btn btn-danger" value="Eliminar">
            @method('DELETE')
            @csrf
        </form>
    </div>

    <hr>

    <div>
        @foreach ($libro->comentarios as $comentario)
            <p>
                {{$comentario->contenido}}
            </p>
        @endforeach
    </div>
    <p></p>
    <form action="{{route('comentarios.storeLibro',$libro->id)}}" method="POST">
        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea class="form-control" id="comentario" name="contenido" rows="5"></textarea>
        </div>
        @csrf
        <input type="submit" value="Aceptar" class="btn btn-primary">
    </form>
</div>

@endsection