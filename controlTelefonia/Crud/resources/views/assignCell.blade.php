@extends('layouts.headerAuth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-white text-center"><h2>Bienvenido</h2></div>

                    <div class="card-body">
                        <form method="post" action="{{route('assingCell')}}">
                            @csrf
                        <div class="mt-5">
                            <label for="name" >Usuario</label>
                            <select name="idUser" class="form-control mt-2 @error('celular') is-invalid @enderror" name="cell">
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="mt-5">
                            <label for="idCell" >Celular</label>
                            <select name="idCell" class="form-control mt-2 @error('celular') is-invalid @enderror" name="cell">
                                <option value="null">...</option>
                                @foreach($cells as $cell)
                                    <option value="{{$cell->id}}" style="background: {{$cell->color}};color: #a0aec0">
                                        {{$cell->mark}}, {{$cell->model}}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-5">
                                <input type=submit class="btn btn-outline-dark" type="button" value="Asignar Celular">
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
