<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELESUD</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Quickly" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" /> </head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo/logo.png') }}" alt="logo-elesud" width="300px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 39.237 26.166">
                    <g>
                        <path d="M0,26.166h39.237v-4.365H0V26.166z M0,15.265h39.237V10.9H0V15.265z M0,0v4.366h39.237V0H0z M0,0" /> </g>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Inicio</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('#') }}">Nosotros</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="productosLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu" aria-labelledby="productosLink"> <a class="dropdown-item" href="{{ url('#') }}">Mantenimiento Preventivo</a> <a class="dropdown-item" href="{{ url('#') }}">Mantenimiento Correctivo</a> </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="serviciosLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu" aria-labelledby="serviciosLink"> <a class="dropdown-item" href="{{ url('#') }}">Mantenimiento Preventivo</a> <a class="dropdown-item" href="{{ url('#') }}">Mantenimiento Correctivo</a> </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('#') }}">Proyectos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('#') }}">Contacto</a> </li>
                </ul>
            </div>
        </div>
    </nav> @yield('content')
    <footer> </footer>
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>