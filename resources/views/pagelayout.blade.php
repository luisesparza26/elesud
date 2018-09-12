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
    <div class="row m-0">
        <div class="col-md-3 px-1" id="sticky-sidebar">
            <div class="py-2 sticky-top">
                <div class="logo"> <img class="w-100" src="{{ asset('img/logo/logo.png') }}" alt="logo-elesud"> </div>
                <ul class="nav flex-column">
                    <li class="nav-item"> <a class="nav-link active" href="#">Inicio</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Nosotros</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Productos</a> </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Proyectos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Contácto</a> </li>
                </ul>
            </div>
            <footer class="fixed-bottom">
                <h1>footer</h1> </footer>
        </div>
        <div class="col-md-9" id="main"> @yield('content') </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>