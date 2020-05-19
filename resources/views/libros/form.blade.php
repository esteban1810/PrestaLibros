@extends('libros.master')

@section('contenido')
<div class="card-header">Nuevo Libro</div>

<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6> Los campos a continuación presentan errores, favor de corregirlos </h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Ver Lista</a>
    </div>

    @if (isset($libro))
        <form action="{{route('libros.update',$libro->id)}}"
            method="POST"
            enctype="multipart/form-data"
        >
            @method('PUT')
    @else
        <form action="{{route('libros.store')}}"
            method="POST"
            enctype="multipart/form-data"
        >
            <?php $libro = new App\Libro() ?>
    @endif
        <div class="form-group col-md-12">
            <label for="portada">Portada: </label>
            <input type="file" name="portada">
        </div>
        <div class="form-group col-md-12">
            <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo" value="{{$libro->titulo}}" placeholder="Introduce el Titulo" required>
        </div>
        <div class="form-group col-md-12">
            <label for="autor">Autor</label>
            <input class="form-control" type="text" name="autor" value="{{$libro->autor}}"  placeholder="Introduce el Autor" required>
        </div>
        <div class="form-group col-md-12">
            <label for="editorial">Editorial</label>
            <input class="form-control" type="text" name="editorial" value="{{$libro->editorial}}" placeholder="Introduce la Editorial" required>
        </div>
        <div class="form-group col-md-12">
            <label for="edicion">Edicion</label>
            <input class="form-control" type="text" name="edicion" value="{{$libro->edicion}}" placeholder="Introduce la Edición" required>
        </div>
        <div class="form-group col-md-12">
            <label for="anio">Año</label>
            <input class="form-control" type="text" name="anio" value="{{$libro->anio}}" placeholder="Introduce el Año" required>
        </div>
        <div class="form-group col-md-12">
            <label for="genero">Genero</label>
            <select class="form-control" name="genero_id">
                    @if (isset($libro->genero_id))
                        <option value="{{$libro->genero_id}}">{{$libro->genero->nombre}}</option>
                        @foreach(App\Genero::all() as $genero)
                            @if ($libro->genero_id!=$genero->id)
                                <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                            @endif
                        @endforeach
                    @else
                        <option value="">Selecciona</option>
                        @foreach(App\Genero::all() as $genero)
                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                        @endforeach
                    @endif

            </select>
        </div>
        <div class="form-group col-md-12">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" rows="3" name="descripcion" placeholder="Introduce una breve descripción" value="{{$libro->descripcion}}" required></textarea>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" class="btn btn-primary" value="Aceptar">
        </div>
        @csrf
    </form>
</div>
@endsection
