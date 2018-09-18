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
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
		<a class="navbar-brand js-scroll-trigger" href="#home"><img src="{{ asset('img/logo/logo2.png') }}" alt="logo"></a>
		<button class="menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<div><span class="line"></span><span class="line"></span><span class="line"></span>
			</div>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#home">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#about">Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#products">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#services">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#brands">Marcas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#projects">Proyectos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger nav-index" href="#contact">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
	@yield('content')
	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright 2018 &copy;Elevadores Sudamericanos S.A.C &#124; Designed by Quickly LA</p>
		</div>
	</footer>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/scroll.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>
	<script>
		new WOW().init();
	</script>

</body>

</html>