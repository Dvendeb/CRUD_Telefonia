@extends('layouts.headerAuth')
@section('title')
    <title>Perfil</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header bg-white text-center"><h2>Bienvenido</h2></div>

                <div class="card-body">
                    <div>
                        Tipo de Usuario:
                        @if(@Auth::user()->HasRole('user'))
                            <h5>Cliente</h5>
                        @else
                            <h5>Administrador</h5>
                        @endif
                    </div>
                    <div>
                        Nombre:
                        <h5>{{ Auth::user()->name }}</h5>
                    </div>
                    <div>
                        Nombre:
                        <h5>{{ Auth::user()->email }}</h5>
                    </div>
                    @can('adminPermission')
                        <div class="mt-5">
                            <a href="{{route('registerUser')}}" class="btn btn-outline-dark">Registrar Usuario</a>
                            <a href="{{route('registerCellPhone')}}" class="btn btn-outline-dark">Registrar Celular</a>
                            <a href="{{route('viewAssingCell')}}" class="btn btn-outline-dark">Asignar Celular</a>
                        </div>
                    @endcan
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
