@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!

                        <div>
                            <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Ver Lista Libros</a>
                            <br>
                            <br>
                            <a href="{{route('users.index')}}" class="btn btn-primary btn-sm">Ver Lista Usuarios</a>
                            <br>
                            <br>
                            <a href="{{route('users.show',\Auth::id())}}" class="btn btn-primary btn-sm">Ver perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
