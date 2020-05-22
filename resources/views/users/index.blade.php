@extends('layouts.tema')

@section('content')

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista De Usuarios</div>

                    <div class="card-body">
                        <div>
                            <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al menu</a>
                            @if ($visible)
                                <a href="{{route('users.index')}}" class="btn btn-primary btn-sm">Usuarios Visibles</a>
                            @else
                                @if (\Gate::allows('isAmin'))
                                    <a href="{{route('users.indexElim')}}" class="btn btn-primary btn-sm">Usuarios Eliminados</a>
                                @endif

                                <p></p>
                                <div>
                                    {{$users->links()}}
                                </div>
                            @endif
                        </div>

                        <br>
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
                                        @if ($visible)
                                            <td>
                                                <form action="{{route('users.showElim',$user->id)}}" method="GET">
                                                    <input type="submit" class="btn btn-primary" value="Ver perfil">
                                                </form>
                                            </td>
                                        @else
                                            <td>
                                                <form action="{{route('users.show',$user->id)}}" method="GET">
                                                    <input type="submit" class="btn btn-primary" value="Ver perfil">
                                                </form>
                                            </td>
                                        @endif
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