@extends('layouts.app')

@section('content')
<div class="card-header">Agregar</div>

<div class="card-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
