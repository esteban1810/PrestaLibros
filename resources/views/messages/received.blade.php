<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    {{-- <p>Recibiste un mensaje de: {{$msg['name']}} - {{$msg['email']}}</p> --}}
    {{-- <p><strong>Asunto:</strong>{{$msg['subject']}}</p> --}}
    <p><strong>Asunto:</strong> Solicitud de prestamo</p>
    {{-- <p>Libro: </p>
    <p>De: </p> --}}
    <p><strong>Para:</strong> {{$user->name}} - {{$user->email}}</p>
    <p><strong>De:</strong> Presta Libros - prestalibrosgdl@gmail.com</p>
    <p><strong>Asunto: </strong> Solicitud de prestamo de libro</p>
    <p><strong>Lo solicita:</strong> {{$miUser->name}} - {{$miUser->email}}</p>
    <p><strong>Libro:</strong> {{$libro->titulo}}</p>
    <p><strong>Autor:</strong> {{$libro->autor}}</p>
    <p><strong>Contenido:</strong>{{$msg['content']}}</p>
    <p>Por favor comunicale tu respuesta al correo del usuario</p>
</body>
</html>