@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">email</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        </tbody>
                      </table>

                      <div>
                        @foreach ($user->comentarios as $comentario)
                            <p>{{$comentario->contenido}}</p>
                        @endforeach
                      </div>
                      <div>
                        <form action="{{route('comentarios.storeUser',$user->id)}}" method="POST">
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