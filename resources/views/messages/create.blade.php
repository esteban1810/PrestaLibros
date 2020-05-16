@extends('libros.master')

@section('contenido')

<div class="card-header">Enviar solicitud de prestamo</div>
    
    <div class="card-body">
        <h1>Estructura del correo</h1>
        <p><strong>Para:</strong> {{$user->name}} - {{$user->email}}</p>
        <p><strong>De:</strong> Presta Libros - prestalibrosgdl@gmail.com</p>
        <p><strong>Asunto: </strong> Solicitud de prestamo de libro</p>
        <p><strong>Lo solicita:</strong> {{$miUser->name}} - {{$miUser->email}}</p>
        <p><strong>Libro:</strong> {{$libro->titulo}}</p>
        <p><strong>Autor:</strong> {{$libro->autor}}</p>
        {{-- <form action="{{route('messages.store')}}" method="POST"> --}}
        <form action="{{route('messages.recibo',['libro'=>$libro->id,'user'=>$user->id])}}" method="POST">
            @csrf
            {{-- <div>
                <label for="name">Nombre: </label><br>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="subject">Asunto:</label><br>
                <input type="text" name="subject" id="subject">
            </div>
            <div> --}}
            <div class="form-group">
                <label for="content"><strong>Contenido Adicional:</strong></label><br>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Aquí puedes agregar una nota adicional"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
</div>
@endsection