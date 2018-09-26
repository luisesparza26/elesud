<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-trans" id="menu">
	<a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt="logo"></a>
		<div class="social">
		<p><a href="https://api.whatsapp.com/send?phone=975148573&text=Hola, estoy interesado en sus servicios y productos" target="_blank"><img class="mr-2" src="{{ asset('img/social/whatsapp.svg') }}" alt="wp" width="25"></a>(+51) 948 582 846</p>
		<p>ventas@elesud.com</p>
	</div>
	<button class="menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<div><span class="line"></span><span class="line"></span><span class="line"></span>
		</div>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/') }}">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#about') }}">Nosotros</a>
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