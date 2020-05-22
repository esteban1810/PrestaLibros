@extends('libros.master')

@section('contenido')
<div class="card-header">Libros</div>

<div class="card-body">
    <div>

        @if ($visible)
            <a href="{{route('libros.index')}}" class="btn btn-primary btn-md">Libros visibles</a>
        @else
            <a href="{{route('libros.create')}}" class="btn btn-primary btn-md">Nuevo</a>
            @if (\Gate::allows('isAdmin'))
                <a href="{{route('libros.indexElim')}}" class="btn btn-primary btn-md">Libros Borrados</a>
            @endif
        @endif
    </div>
    <br>
    @if (!$visible)
        {{$libros->links()}}
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Portada</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Género</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td><img src="{{Storage::url($libro->portada)}}" width="80px"></td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->genero->nombre}}</td>
                    <td>
                        <div>
                            @if ($visible)
                                <a href="{{route('libros.showElim',$libro->id)}}" class="btn btn-primary btn-sm">Detalles</a>
                            @else
                                <a href="{{route('libros.show',$libro->id)}}" class="btn btn-primary btn-sm">Detalles</a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
