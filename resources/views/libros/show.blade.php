@extends('libros.master')

@section('contenido')
<div class="card-header">Libro</div>

<div class="card-body">
    <div class="float-right">
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Ver Lista</a>
        <p></p>
        <form action="{{route('libUser.agregar',$libro->id)}}" method="POST">
            <input type="submit" value="Añadir a mi biblioteca" class="btn btn-primary btn-sm">
            @csrf
        </form>
    </div>

    <h1>{{$libro->titulo}}</h1>

    <div>
        <div>
            <h2 class="apartados">Autor</h2>
            <p>{{$libro->autor}}</p>
        </div>
    
        <div>
            <h2 class="apartados">Género</h2>
            <p>#Aqui va el genero#</p>
        </div>
    
        <div>
            <h2 class="apartados">Editorial</h2>
            <p>{{$libro->editorial}}</p>
        </div>
    
        <div>
            <h2 class="apartados">Edición</h2>
            <p>{{$libro->edicion}}</p>
        </div>
    
        <div>
            <h2 class="apartados">Año De Publicación</h2>
            <p>{{$libro->anio}}</p>
        </div>
    
        <div>
            <h2 class="apartados">Descripción</h2>
            <p>{{$libro->descripcion}}</p>
        </div>
    </div>
    <hr>

    <div class="form-group">
        <form action="{{route('libros.edit',$libro->id)}}" method="GET">
            <input type="submit" class="btn btn-warning" value="Editar">
        </form>
    </div>

    <div class="form-group">
        <form action="{{route('libros.destroy',$libro->id)}}" method="POST">
            <input type="submit" class="btn btn-danger" value="Eliminar">
            @method('DELETE')
            @csrf
        </form>
    </div>

    <hr>

    <div>
        <h2 class="apartados">Personas que tienen el libro</h2>
        @if (count($libro->users))
            <ul class="list-group">
                @foreach ($libro->users as $user)
                    <li class="list-group-item"><a href="{{route('users.show',$user->id)}}">{{$user->name}}</a></li>
                @endforeach
            </ul>
        @else
        <p>Nadie lo tiene</p>
        @endif
    </div>

    <hr>

    <div>
        <h2 class="apartados">Comentarios</h2>
        @if (count($libro->comentarios))
            @foreach ($libro->comentarios as $comentario)
                <a href="{{route('users.show',$comentario->user->id)}}">{{$comentario->user->name}}</a>
                <p>
                    {{$comentario->contenido}}
                </p>
            @endforeach
        @else
            <p>No hay comentarios</p>
        @endif
    </div>
    <br>
    <form action="{{route('comentarios.storeLibro',$libro->id)}}" method="POST">
        <div class="form-group">
            <label for="comentario" style="font-weight: bold;">Comentario</label>
            <textarea class="form-control" id="comentario" name="contenido" rows="5"></textarea>
        </div>
        @csrf
        <input type="submit" value="Aceptar" class="btn btn-primary">
    </form>
</div>

@endsection