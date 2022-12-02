@extends('layouts.headerAuth')
@section('title')
    <title>Notificación</title>
@endsection
@section('content')
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="text-center p-4 p-lg-5">
            <p class="fw-bold text-primary mb-2"><h2>Notificación</h2></p>
            <h1 class="fw-bold mb-4">
                @if(isset($status))
                    @if($status=="error")
                        <label class="text-danger">{{$msg}}</label>
                    @endif
                    @if($status=="success")
                        <label class="text-success">{{$msg}}</label>
                    @endif
                @endif
            </h1>
            <a class="btn btn-primary fs-5 me-2 py-2 px-4" href="#" type="button">Regresar</a>
        </div>
    </div>
</section>
@endsection
