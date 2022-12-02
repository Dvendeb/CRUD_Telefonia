@extends('layouts.headerAuth')
@section('title')
    <title>Registrar Usuario</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark">
                    <div class="card-header text-center">REGISTRO</div>

                    <div class="card-body">
                        @if(isset($status))
                            @if($status=="error")
                                <label class="text-danger">{{$msg}}</label>
                            @endif
                            @if($status=="success")
                                <label class="text-success">{{$msg}}</label>
                            @endif
                        @endif
                        <form method="POST" action="{{ route('registeredUser') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="name" >Nombre</label>
                                    <input id="name" type="text" class="form-control  mt-2 @error('nombre') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                    <select name="role" class="form-control mt-2 @error('nombre') is-invalid @enderror" name="role">
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
                                    <input id="email" type="email" class="form-control mt-2 @error('correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="password" >Contraseña</label>
                                    <input id="password" type="password" class="form-control mt-2 @error('contraseña') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('contraseña')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="password-confirm" >Confirmar contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-light d-block mx-auto">
                                        Registrar cuenta
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
