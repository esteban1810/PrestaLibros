@extends('libros.master')

@section('contenido')
<div class="card-header">Libros</div>

<div class="card-body">
    <div>
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-md">Ver Lista</a>
        <a href="{{route('libros.create')}}" class="btn btn-primary btn-md">Nuevo</a>
    </div>
   <br>
    
    <table class="table">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Género</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                {{-- <th scope="col">editorial</th>
                <th scope="col">edicion</th>
                <th scope="col">año</th> --}}
                <th scope="col">Descripción</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    {{-- <th scope="row"><a href="{{route('libros.show',$libro->id)}}">{{$libro->id}}</a></th> --}}
                    <td>{{$libro->genero_id}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    {{-- <td>{{$libro->editorial}}</td>
                    <td>{{$libro->edicion}}</td>
                    <td>{{$libro->anio}}</td> --}}
                    <td>{{$libro->descripcion}}</td>

                    <td>
                        <div>
                            <a href="{{route('libros.show',$libro->id)}}" class="btn btn-primary btn-sm">Detalles</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
