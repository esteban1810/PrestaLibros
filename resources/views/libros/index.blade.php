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
            @foreach ($libros as $libro)
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
            @endforeach
        </tbody>
    </table>
</div>
@endsection
