@extends('roles.master')

@section('contenido')
<div class="card-header">Lista de roles</div>
    <div class="card-body">
        @if (isset($role))
            {!! Form::open(['route'=>['roles.update', $role->id]]) !!}
        @else
            {!!Form::open(['route'=>'roles.store','method'=>'POST'])!!}
        @endif
        
            @csrf
            <div class="form-group">
                {!!Form::label('nombre', 'Nombre')!!}<br>
                {!!Form::text('nombre',$role->nombre ?? null,['class'=>'form-control'])!!}
            </div>
            {!! Form::submit('Aceptar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection