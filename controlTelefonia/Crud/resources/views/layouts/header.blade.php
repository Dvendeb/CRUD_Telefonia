<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean bg-dark">
        <div class="container">
            <div><a class="navbar-brand text-white" href="#">Control Telefonía</a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{url('/')}}"><strong>Inicio</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}"><strong>Registrar</strong></a></li>
                    <li class="nav-item"><a class=" nav-link text-white" href="{{ route('login') }}"><strong>Iniciar Sesión</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('content')
@yield('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
