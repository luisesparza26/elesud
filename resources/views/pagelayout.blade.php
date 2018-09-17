<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ELESUD</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content="Quickly"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	<header id="menu" class="fixed-top">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#"><img src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>
			<div class="menu">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
		</nav>
		<div class="mobile-menu nav  flex-column">
			<a class="nav-link nav-index js-scroll-trigger" href="#home">Inicio</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#about">Nosotros</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#products">Productos</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#services">Servicios</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#brands">Marcas</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#projects">Proyectos</a>
			<a class="nav-link nav-index js-scroll-trigger" href="#contact">Contacto</a>
		</div>
	</header>
	@yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/scroll.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>

</body>

</html>