@extends('users.master')

@section('contenido')
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection