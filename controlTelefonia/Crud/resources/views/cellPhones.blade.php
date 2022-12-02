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
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cellPhones as $cellPhone)
                    <tr>
                        <td>{{$cellPhone->id}}</td>
                        <td>{{$cellPhone->mark}}</td>
                        <td>{{$cellPhone->model}}</td>
                        <td>
                            <div class="col-12 rounded-circle" style="color: {{$cellPhone->color}}">
                               <h4>●</h4>
                            </div>
                        </td>
                        <td>
                            <form method="post" action="{{route('viewEditCellphone')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="idCellphone" value="{{$cellPhone->id}}">
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
