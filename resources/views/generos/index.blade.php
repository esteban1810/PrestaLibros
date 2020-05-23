@extends('generos.master')

@section('contenido')
<div class="card-header">Lista de Generos</div>
    <div class="card-body">
        <a href="{{route('generos.create')}}" class="btn btn-primary">Nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Género</th>
                    <th scope="col">Detalles</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($genero as $item)
                    <tr>
                        <td>{{$item->id}} </td>
                        <td>{{$item->nombre}}</td>
                        <td><a href="{{route('generos.show',$item->id)}}" class="btn btn-primary btn-sm">Ver detalles</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
