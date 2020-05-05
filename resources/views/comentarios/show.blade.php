@extends('comentarios.master')

@section('contenido')
    <div class="card-header">Libro</div>
        <div class="card-body">
            <p><strong>Comentario original:</strong></p>
            <p>{{$comentario->contenido}}</p>
            <hr>
            <form action="{{route('comentarios.update',$comentario->id)}}" method="POST">
                @method('PUT')
                <div class="form-group">
                    <label for="comentario" style="font-weight: bold;">Nuevo Comentario</label>
                    <textarea class="form-control" id="comentario" name="contenido" rows="5"></textarea>
                </div>
                @csrf
                <input type="submit" value="Modificar" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection