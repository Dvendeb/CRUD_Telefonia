@extends('layouts.headerAuth')

@section('content')
    <div class="container mt-5">
        @if(isset($status))
            @if($status=="error")
                <label class="text-danger">{{$msg}}</label>
            @endif
            @if($status=="success")
                <label class="text-success">{{$msg}}</label>
            @endif
        @endif
        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
            <table class="table table-dark mb-0">
                <thead style="background-color: #1a202c;">
                <tr class="text-uppercase text-success">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->getRoleNames()->first()}}</td>
                        <td>
                            <form method="post" action="{{route('viewEditUser')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="idUser" value="{{$user->id}}">
                                <input type=submit class="btn btn-warning" type="button" value="Editar">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
