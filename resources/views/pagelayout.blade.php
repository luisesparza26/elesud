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
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#"><img src="{{ asset('img/logo/logo.png')}}" alt="logo-elesud" width="250"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Nosotros</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class="container">
							<div class="row">
								<div class="col-md-3">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Silla Salaescaleras</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Silla Recta</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Silla Curva</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Plataforma Delta</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Plataforma Stratos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Plataforma Omega</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Plataforma Vertical</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Escaleras Cremallera Piñón</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Elevador de pasajeros</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Elevador de autos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Elevador para hospitales</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Elevador de carga</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Ascensores Antiexplosivos</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Escaleras Eléctricas</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Escaleras Mecánicas</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Pasillos Mecánicos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Veredas Mecánicas</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Ascensores con protección IP</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Proyectos</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="#">Matenimiento Preventivo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Matenimiento Correctivo</a>
							</li>
						</ul>
					</div>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category 3</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="#">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link item</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link item</a>
											</li>
										</ul>
									</div>
									<!-- /.col-md-4  -->
									<div class="col-md-4">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="#">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link item</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link item</a>
											</li>
										</ul>
									</div>
									<!-- /.col-md-4  -->
									<div class="col-md-4">
									</div>
								</div>
							</div>
						</div>
					</li>
			</ul>
		</div>
	</nav>
	@yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>

</body>

</html>