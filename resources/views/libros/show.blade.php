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
        <form action="{{route('libros.destroy',$libro->id)}}" method="get">
            <input type="submit" class="btn btn-danger" value="Eliminar">
            @method('DELETE')
        </form>
    </div>

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