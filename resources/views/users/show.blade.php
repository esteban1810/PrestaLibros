@extends('layouts.app')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                      <p>
                        {{$user->name}}
                      </p>
                      <p>
                        {{$user->email}}
                      </p>

                      <div>
                        @foreach ($user->comentarios as $comentario)
                          <hr>
                            <p>
                                <a href="{{route('users.show',$comentario->user->id)}}">{{$comentario->user->name}}</a>
                            </p>
                            <p>
                                {{$comentario->contenido}}
                            </p>
                        @endforeach
                        <hr>
                    </div>
                      <div>
                        <form action="{{route('comentario.storeUser',$user->id)}}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label for="contenido">Comentar</label>
                            <textarea class="form-control" id="comentario" name="contenido" rows="5"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Aceptar">
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection