<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
	<a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt="logo"></a>
	<button class="menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<div><span class="line"></span><span class="line"></span><span class="line"></span>
		</div>
	</button>
	<div class="dark-container collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/') }}">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#about') }}">Nosotros</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#products') }}">Productos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#services') }}">Servicios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#brands') }}">Marcas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#projects') }}">Proyectos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger nav-index" href="{{ url('/#contact') }}">Contacto</a>
			</li>
		</ul>
	</div>
</nav>