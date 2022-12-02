@extends('layouts.headerAuth')
@section('title')
<title>Mi celular</title>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-white text-center"><h2>TU CELULAR ASIGNADO</h2></div>

                    <div class="card-body">
                        <div>
                            <p>ID:</p>
                            <h3>{{$cellphone->id}}</h3>
                        </div>
                        <div>
                            <p>Marca:</p>
                            <h3>{{$cellphone->mark}}</h3>
                        </div>
                        <div>
                            <p>Modelo:</p>
                            <h3>{{$cellphone->model}}</h3>
                            <h3></h3>
                        </div>
                        <div>
                            <p>Color:</p>
                            <h2 style="color: {{$cellphone->color}}">●</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
