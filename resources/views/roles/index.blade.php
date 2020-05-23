@extends('roles.master')

@section('contenido')
<div class="card-header">Lista de roles</div>
    <div class="card-body">
        <a href="{{route('roles.create')}}" class="btn btn-primary">Nuevo</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Detalles</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->nombre}}</td>
                    <td>{!!link_to_route('roles.show', $title = 'Mostrar', $parameters = [$role->id], $attributes = ['class'=>'btn btn-primary'])!!}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
