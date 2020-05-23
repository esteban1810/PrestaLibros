@extends('roles.master')

@section('contenido')
<div class="card-header">Lista de roles</div>
    <div class="card-body">
        @if (isset($role))
            {!! Form::open(['route'=>['roles.update', $role->id],'method'=>'PUT']) !!}
            {{-- <form action="{{route('roles.update',$role->id)}}" method="GET">
                @method('PUT') --}}
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