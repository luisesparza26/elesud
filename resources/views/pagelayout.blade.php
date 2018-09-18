<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title','ELESUD')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta prefix="og: http://ogp.me/ns#" property="og:url" content="{{ isset($meta['url'])?$meta['url']:'http://www.elesud.com/' }}"/>
	<meta prefix="og: http://ogp.me/ns#" property="og:type" content="{{ isset($meta['type'])?$meta['type']:'website' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="title" property="og:title" content="{{ isset($meta['title'])?$meta['title']:'ELESUD - Elevadores Sudamericanos' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="description" property="og:description" content="{{ isset($meta['description'])? $meta['description']:'Somos una empresa formada por capitales peruanos, responsable del cumplimiento de las leyes nacionales en transporte vertical, ofreciendo equipos que cumplen con las normativas nacionales e internacionales de equipos de elevación, con el objetivo de garantizar la seguridad de los usuarios.'}}"/>
	<!--SUBIR IMAGEN CHULA-->
	<meta prefix="og: http://ogp.me/ns#" name="image" property="og:image" content="{{ isset($meta['image'])?$meta['image']:'#' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="author" content="Quickly LA"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
		<a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt="logo"></a>
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