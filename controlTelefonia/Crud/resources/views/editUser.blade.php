@extends('layouts.headerAuth')
@section('title')
    <title>Editar Usuario</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark">
                    <div class="card-header text-center">REGISTRO</div>

                    <div class="card-body">
                        <form action="{{route('edit')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <input type="hidden" class="form-control  mt-2 @error('idUser') is-invalid @enderror" name="idUser" value="{{$userEdit->id}}" required autocomplete="name" autofocus>
                                    <label for="name" >Nombre</label>
                                    <input id="name" type="text" class="form-control  mt-2 @error('nombre') is-invalid @enderror" name="name" value="{{$userEdit->name}}" required autocomplete="name" autofocus>

                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="name" >Rol</label>
                                    <select name="role" class="form-control mt-2 @error('rol') is-invalid @enderror" name="role">
                                        <option value="user">...</option>
                                        <option value="user">Cliente</option>
                                        <option value="admin">Administrador</option>
                                    </select>

                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="email" >Correo</label>
                                    <input id="email" type="email" class="form-control mt-2 @error('correo') is-invalid @enderror" name="email" value="{{$userEdit->email}}" required autocomplete="email">

                                    @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success d-block mx-auto" value="Actualizar">
                                </div>
                            </div>
                        </form>
                        <form method="post" action="{{route('deleteUser')}}">
                            @csrf
                            <input type="hidden" name="idUser" value="{{$userEdit->id}}">
                            <input type=submit class="btn btn-danger" type="button" value="Eliminar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
