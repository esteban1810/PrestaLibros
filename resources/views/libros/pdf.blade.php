<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info-Libro</title>
</head>
<body>
    <style>
        .table{
            width: 100%;
            border-style: double;
            text-align: center;
        }
    </style>
<h1> Información del libro "{{$libros->titulo}}"</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Portada</th>
            <th scope="col">Género</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Descripción</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><img width="200px" height="250px" src="{{Storage::url($libros->portada)}}"></td>
                <td>{{$libros->genero->nombre}}</td>
                <td>{{$libros->titulo}}</td>
                <td>{{$libros->autor}}</td>
                <td>{{$libros->descripcion}}</td>
            </tr>
    </tbody>
</table>

</body>
</html>

