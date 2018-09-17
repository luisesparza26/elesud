@extends( 'pagelayout' )@section( 'content' )
	<section id="index" class="row">
		<div class="col-lg-2 p-0 btn-elesud">
			<div class="nav  flex-column align-items-start">
				<input class="mb-5" type="text" id="panel" readonly disabled>
				<a id="homebtn" class="js-scroll-trigger" href="#home" value="INICIO" numero="6">Inicio</a>
				<a id="aboutbtn" class="js-scroll-trigger" href="#about" value="NOSOTROS" numero="5">Nosotros</a>
				<a id="productsbtn" class="js-scroll-trigger" href="#products" value="PRODUCTOS" numero="4">Productos</a>
				<a id="servicesbtn" class="js-scroll-trigger" href="#services" value="SERVICIOS" numero="3">Servicios</a>
				<a id="brandsbtn" class="js-scroll-trigger" href="#brands" value="MARCAS" numero="2">Marcas</a>
				<a id="projectsbtn" class="js-scroll-trigger" href="#projects" value="PROYECTOS" numero="1">Proyectos</a>
				<a id="contactbtn" class="js-scroll-trigger" href="#contact" value="CONTACTO" numero="S1">Contacto</a>
			</div>
		</div>
		<div class="col-lg-10 p-0 index-content">
			<div id="home" class="section-index">
				<div class="video-bg">
					<video autoplay loop muted>
						<source src="{{ asset('img/index/home.mp4') }}">
					</video>
					<div class="home-content"></div>
				</div>
			</div>
			<div id="about" class="section-index">
				<div class="p-4 text-about">
					<h2>Nosotros</h2>
					<div class="row align-items-center">
						<div class="col-lg-3 py-2">
							<img src="{{ asset('img/index/sgs.png') }}" alt="SGS">
						</div>
						<div class="col-lg-9">
							<p>Somos una empresa formada por capitales peruanos, responsable del cumplimiento de las leyes nacionales en transporte vertical, ofreciendo equipos que cumplen con las normativas nacionales e internacionales de equipos de elevación, con el objetivo de garantizar la seguridad de los usuarios. <br><br>Cumplimos con Norma A120 para personas discapacitadas y Reglamento Nacional de Edificaciones- Sección Transporte Mecánico. Contamos con Certificaciones <b>ISO 9001- Calidad</b>.</p>
						</div>
					</div>
				</div>
				<div class="row mvv m-0 text-center">
					<div class="col-lg-4">
						<img src="{{ asset('img/index/mision.svg') }}" alt="mision" width="50">
						<h3>Misión</h3>
						<p>Garantizar la mejor solución en transporte vertical brindando seguridad a nuestros usuarios con equipos de última generación.</p>
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('img/index/vision.svg') }}" alt="vision" width="50">
						<h3>Visión</h3>
						<p>Ser una de las empresas más confiables brindando las mejores soluciones en los diferentes proyectos del país.</p>
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('img/index/valores.svg') }}" alt="valores" width="50">
						<h3>Valores</h3>
						<p>Responsabilidad y compromiso en los servicios asumidos.</p>
					</div>
				</div>
			</div>
			<div id="products" class="section-index">
			</div>
			<div id="services" class="section-index">
				<div class="services-content p-5">
					<div class="row align-items-center py-5">
						<div class="col-lg-4">
							<div class="card">
								<img class="card-img-top" src="{{ asset('img/index/mtto-prev.jpg') }}" alt="Mantenimiento Preventivo">
								<div class="card-body">
									<h5 class="card-title">Mantenimiento preventivo</h5>
									<p class="card-text">El servicio de mantenimiento de ELESUD consta de lo siguiente:<br><br> INSPECCION, LIMPIEZA Y LUBRICACION por especialista. Solicita tu cotizacion y mejoramos las demas propuesta. Contamos con emergencistas 24/7</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<img class="card-img-top" src="{{ asset('img/index/mtto.jpg') }}" alt="Mantenimiento Preventivo">
							<div class="card-body">
								<h5 class="card-title">Mantenimiento preventivo</h5>
								<p class="card-text">El servicio de mantenimiento de ELESUD consta de lo siguiente:<br><br> INSPECCION, LIMPIEZA Y LUBRICACION por especialista. Solicita tu cotizacion y mejoramos las demas propuesta. Contamos con emergencistas 24/7</p>
							</div>
						</div>
					</div>
				</div>
				<div id="brands" class="section-index">
					<div class="p-4 text-brands">
						<h2>Representamos a las mejores marcas del mundo</h2>
						<p>Somos una empresa 100% peruana especialista en trasporte vertical y con más de 15 años de experiencia en el rubro, lo cual nos ha permitido seleccionar a las mejores marcas para cada aplicación a nivel mundial.</p>
						<div class="row align-items-center py-5">
							<div class="col-6 col-md-3 m-auto py-3"><img src="{{ asset('img/brands/koyo.png') }}" alt="Representaciones">
							</div>
							<div class="col-6 col-md-3 m-auto py-3"><img src="{{ asset('img/brands/lehner.png') }}" alt="Representaciones">
							</div>
							<div class="col-6 col-md-3 m-auto py-3"><img src="{{ asset('img/brands/alimak.png') }}" alt="Representaciones">
							</div>
							<div class="col-6 col-md-3 m-auto py-3"><img src="{{ asset('img/brands/hidral.png') }}" alt="Representaciones">
							</div>
						</div>
					</div>
				</div>
				<div id="projects" class="section-index">
				</div>
				<div id="contact" class="section-index">
				</div>
				<footer class="py-3 bg-dark">
					<div class="container">
						<p class="m-0 text-center text-white">Copyright 2018 &copy;Elevadores Sudamericanos S.A.C &#124; Designed by Quickly LA</p>
					</div>
				</footer>
			</div>
	</section>
	@endsection