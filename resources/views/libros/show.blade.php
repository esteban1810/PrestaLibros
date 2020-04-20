@extends('layouts.app')

<<<<<<< HEAD
@section('contenido')
<div class="card-header">Libro</div>

<div class="card-body">
    <div class="float-right">
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Ver Lista</a>
        <p></p>
        @if ($libro->users->find(\Auth::id()))
            <form action="{{route('LibUser.quitar',$libro->id)}}" method="POST">
                <input type="submit" value="Quitar de mi biblioteca" class="btn btn-danger btn-sm">
                @csrf
            </form>
        @else
            <form action="{{route('libUser.agregar',$libro->id)}}" method="POST">
                <input type="submit" value="Añadir a mi biblioteca" class="btn btn-success btn-sm">
                @csrf
            </form>
        @endif
        <p></p>
        <form action="{{route('libros.edit',$libro->id)}}" method="GET">
            <input type="submit" class="btn btn-warning btn-sm" value="Editar">
        </form>
        <p></p>
        <form action="{{route('libros.destroy',$libro->id)}}" method="POST">
            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
            @method('DELETE')
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

    {{-- <div class="form-group float-left">
        <form action="{{route('libros.edit',$libro->id)}}" method="GET">
            <input type="submit" class="btn btn-warning" value="Editar">
        </form>
    </div>

    <div class="form-group float-right">
        <form action="{{route('libros.destroy',$libro->id)}}" method="POST">
            <input type="submit" class="btn btn-danger" value="Eliminar">
            @method('DELETE')
            @csrf
        </form>
    </div> --}}

    {{-- Eliminar p--}}
    <p></p>
    {{-- fin p --}}

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
=======
@section('content')

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">genero_id</th>
                                <th scope="col">autor</th>
                                <th scope="col">titulo</th>
                                <th scope="col">editorial</th>
                                <th scope="col">edicion</th>
                                <th scope="col">año</th>
                                <th scope="col">descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row"><a href="{{route('libros.show',$libro->id)}}">{{$libro->id}}</a></th>
                                    <td>{{$libro->genero_id}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->titulo}}</td>
                                    <td>{{$libro->editorial}}</td>
                                    <td>{{$libro->edicion}}</td>
                                    <td>{{$libro->anio}}</td>
                                    <td>{{$libro->descripcion}}</td>
                                </tr>
                        </tbody>
                    </table>
                
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
                
                    <div>
                        @foreach ($libro->comentarios as $comentario)
                            <hr>
                            <p>
                                <a href="{{route('users.show',$comentario->user->id)}}">{{$comentario->user->name}}</a>
                            </p>
                            <p>
                                {{$comentario->contenido}}
                            </p>
                        @endforeach
                        <hr>
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
                </div>
            </div>
        </div>
>>>>>>> master
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