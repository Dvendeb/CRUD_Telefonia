<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
@if(@Auth::user()->status=="active")
<div>
    <!--menu para usuarios logueados -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean bg-dark">
        <div class="container">
            <div><a class="navbar-brand text-white" href="#">Control Telefonía</a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <!--permisos administrador-->
                    @can('adminPermission')
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('showCellphones')}}"><strong>Celulares</strong></a></li>
                    <li class="nav-item"><a class=" nav-link text-white" href="{{route('showUsers')}}"><strong>Usuarios</strong></a></li>
                    @endcan
                    @can('userPermission')
                        <li class="nav-item"><a class=" nav-link text-white" href="{{route('userCell')}}"><strong>Mi celular</strong></a></li>
                    @endcan
                    <li class="nav-item"><a class=" nav-link text-white" href="{{route('home')}}"><strong>Perfil</strong></a></li>
                    <li class="nav-item dropdown text-white">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!--Cerrar sesion -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('content')
@else
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-center p-4 p-lg-5">
                <p class="fw-bold text-primary mb-2"><h2>Notificación</h2></p>
                <h1 class="fw-bold mb-4">
                    Lo sentimos, esta cuenta fue dado de baja comunicate con algún administrador para activarla.
                </h1>
                <a class="btn btn-primary fs-5 me-2 py-2 px-4" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </section>
@endif
@yield('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

