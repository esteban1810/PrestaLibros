<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info-User</title>
</head>
<body>
    <style>
        .table{
            width: 100%;
            border-style: double;
            text-align: center;
        }
    </style>
<h1> Información del Usuario {{$users->name}}</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Colección</th>
            <th scope="col">Comentarios</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$users->email}}</td>
                <td>{{$users->role->nombre??App\Role::find($users->id)->nombre}}</td>
                <td>
                    @if (count($users->libros))
                        @foreach ($users->libros as $libro)
                                    {{$libro->titulo}}
                                    <br>
                        @endforeach
                    @else
                        <p>Aún no tiene libros agregados</p>
                    @endif
                <td>
                    @if (count($users->comentarios))
                        @foreach ($users->comentarios as $comentario)
                                    {{$comentario->user->name}} :
                                    {{$comentario->contenido}}
                                    <br>
                        @endforeach
                    @else
                        <p>No tiene ningún comentario</p>
                    @endif
                </td>
            </tr>
    </tbody>
</table>

</body>
</html>
