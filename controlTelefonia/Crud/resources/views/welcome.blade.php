@extends('layouts.header')
@section('title')
    <title>Inicio</title>
@endsection
@section('content')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-center p-4 p-lg-5">
                <h2 class="fw-bold text-primary mb-2 ">Bienvenido</h2>
                <h1 class="fw-bold mb-4">Control<br />Telefonía</h1>
                <a class="btn btn-outline-dark fs-5 me-2 py-2 px-4" href="{{ route('login') }}">Iniciar Sesión</a>
                <a class="btn btn-outline-dark fs-5 py-2 px-4" href="{{ route('register') }}">Registrarse</a>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
