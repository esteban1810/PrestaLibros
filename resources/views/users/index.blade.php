@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista De Usuarios</div>

                    <div class="card-body">
<<<<<<< HEAD
                      <div>
                        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al menu</a>
                      </div>
                      <br>
                      
=======
>>>>>>> master
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                              <th scope="col">email</th>
                              <th scope="col">perfil</th>
                            </tr>
                        </thead>
                
                        <tbody>
                          @foreach ($users as $user)
                          <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                              <form action="{{route('users.show',$user->id)}}" method="GET">
                                <input type="submit" class="btn btn-primary" value="Ver perfil">
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection