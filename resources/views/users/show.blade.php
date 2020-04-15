@extends('libros.master')

@section('contenido')
<div class="card-header">Perfil</div>
  <div class="card-body">
    <div class="float-right">
      <a href="{{route('users.index')}}" class="btn btn-primary btn-sm">Ver Lista</a>
    </div>
    <h1>Perfil</h1>

    <div>
      <div>
        <h2 class="apartados">Nombre</h2>
        <p>{{$user->name}}</p>
      </div>
      <div>
        <h2 class="apartados">Email</h2>
        <p>{{$user->email}}</p>
      </div>
    </div>

    <hr>

    <div>
      <h2 class="apartados">Colección</h2>
      @if (count($user->libros))
        <ul class="list-group">
            @foreach ($user->libros as $libro)
                <li class="list-group-item"><a href="{{route('users.show',$libro->id)}}">{{$libro->titulo}}</a></li>
            @endforeach
        </ul>
      @else
          <p>Aún no tiene libros agregados</p>
      @endif
    </div>

    <hr>
    <div>
      <h2 class="apartados">Comentarios</h2>
      @if (count($user->comentarios))
        @foreach ($user->comentarios as $comentario)
          <a href="{{route('users.show',$comentario->user->id)}}">{{$comentario->user->name}}</a>
          <p>{{$comentario->contenido}}</p>
        @endforeach
      @else
          <p>No tiene ningún comentario</p>
      @endif
    </div>
    <br>
    <div>
      <form action="{{route('comentarios.storeUser',$user->id)}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="comentario" style="font-weight: bold;">Comentario</label>
          <textarea class="form-control" id="comentario" name="contenido" rows="5"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Aceptar">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection