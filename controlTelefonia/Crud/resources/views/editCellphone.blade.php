@extends('layouts.headerAuth')
@section('title')
    <title>Editar Celular</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark">
                    <div class="card-header text-center">Editar CELULAR</div>

                    <div class="card-body">
                        <!--recepcion de la funcion store clase CellphoneController -->
                        @if(isset($status))
                            @if($status=="error")
                                <label class="text-danger">{{$msg}}</label>
                            @endif
                            @if($status=="success")
                                <label class="text-success">{{$msg}}</label>
                            @endif
                        @endif
                        <!--form -->
                        <form method="POST" action="{{route('editCellphone')}}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="mark" >Marca</label>
                                    <input id="id" type="hidden" class="form-control  mt-2 @error('id') is-invalid @enderror" name="idCellphone" value="{{$cellphone->id}}" required autocomplete="mark" autofocus>
                                    <input id="mark" type="text" class="form-control  mt-2 @error('marca') is-invalid @enderror" name="mark" value="{{$cellphone->mark}}" required autocomplete="mark" autofocus>
                                    @error('marca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="model" >Modelo</label>
                                    <input id="model" type="text" class="form-control  mt-2 @error('modelo') is-invalid @enderror" name="model" value="{{$cellphone->model}}" required autocomplete="model" autofocus>

                                    @error('modelo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mx-auto">
                                    <label for="color" >Color</label>
                                    <input id="color" type="color" class="form-control  mt-2 @error('color') is-invalid @enderror" name="color" value="{{$cellphone->color}} required autocomplete="color" autofocus>

                                    @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-light d-block mx-auto">
                                        Actualizar celular
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
