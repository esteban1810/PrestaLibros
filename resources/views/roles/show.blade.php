@extends('roles.master')

@section('contenido')
<div class="card-header">Rol</div>
    <div class="card-body">
        <p><strong>Nombre:</strong></p>
        <p>{{$role->nombre}}</p>
        {!! link_to_route('roles.index', 'volver', null, ['class'=>'btn btn-primary']) !!}
        <p></p>
        {!! link_to_route('roles.edit', 'Modificar', [$role->id], ['class'=>'btn btn-warning']) !!}
        
        <p></p>
        @if (count($role->users)==0||$role_id!=2)
        {!!Form::open(['route' => ['roles.destroy', $role->id], 'method'=>'DELETE'])!!}
            {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endif
        
        {{-- <form action="{{route('roles.destroy',$role->id)}}" method="POST">
            <input type="submit" value="Eliminar" class='btn btn-danger'>
            @method('DELETE')
            @csrf
        </form> --}}
    </div>
</div>
@endsection