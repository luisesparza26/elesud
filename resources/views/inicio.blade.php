@extends( 'pagelayout' )@section( 'content' )
	<div id="index">
		<div class="btn-elesud">
			<div class="nav  flex-column align-items-start">
				<input class="mb-3" type="text" id="panel" readonly disabled>
				<a id="homebtn" class="js-scroll-trigger" href="#home" value="INICIO" numero="6">Inicio</a>
				<a id="aboutbtn" class="js-scroll-trigger" href="#about" value="NOSOTROS" numero="5">Nosotros</a>
				<a id="productsbtn" class="js-scroll-trigger" href="#products" value="PRODUCTOS" numero="4">Productos</a>
				<a id="servicesbtn" class="js-scroll-trigger" href="#services" value="SERVICIOS" numero="3">Servicios</a>
				<a id="brandsbtn" class="js-scroll-trigger" href="#brands" value="MARCAS" numero="2">Marcas</a>
				<a id="projectsbtn" class="js-scroll-trigger" href="#projects" value="PROYECTOS" numero="1">Proyectos</a>
				<a id="contactbtn" class="js-scroll-trigger" href="#contact" value="CONTACTO" numero="S1">Contacto</a>
			</div>
		</div>
		<section id="home" class="section-index">
			<div class="video-bg">
				<video autoplay loop muted>
					<source src="{{ asset('img/index/home.mp4') }}">
				</video>
					<div class="home-content text-center" >
						<div class="container align-self-center">
							<img src="{{ asset('img/logo/logo2.png') }}" alt="logo" class="responsive-image" width="50%">
						<h1 class="text-white mb-5 mt-5">Elevadores Sudamericanos</h1>
						<div class="container text-center text-white">
							<p style="font-size: 1.3rem;" class="text-center">Somos una empresa peruana con amplia experiencia en brindar soluciones de transporte vertical de todo tipo, a un precio económico, con calidad y cumpliendo su exigente cronograma.</p>
						</div>
						</div>
						
					</div>
			</div>
		</section>
		<section id="about" class="section-index">
			<div class="container">
				<div class="p-4 text-about">
					<h2>Nosotros</h2>
					<div class="row align-items-center">
						<div class="col-lg-9">
							<p>Somos una empresa formada por capitales peruanos, responsable del cumplimiento de las leyes nacionales en transporte vertical, ofreciendo equipos que cumplen con las normativas nacionales e internacionales de equipos de elevación, con el objetivo de garantizar la seguridad de los usuarios. <br><br>Cumplimos con Norma A120 para personas discapacitadas y Reglamento Nacional de Edificaciones - Sección Transporte Mecánico. Contamos con Certificaciones <b>ISO 9001- Calidad</b>.</p>
						</div>
						<div class="col-lg-3 py-2">
							<img src="{{ asset('img/index/sgs.png') }}" alt="SGS">
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
		</section>
		<section id="products" class="section-index"></section>
		<section id="services" class="section-index"></section>
		<section id="brands" class="section-index"></section>
		<section id="projects" class="section-index"></section>
		<section id="contact" class="section-index">
			<div class="container">
				<div class="bg-black">
					
				
				<h2 class="text-white py-5 text-center" style="margin:0px;">Contáctanos</h2>
    <div class="row">

        <div class="col-md-6 mt-5">
            <div class="well well-sm">
                <form class="" method="post">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="email" name="email" type="text" placeholder="Correo" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-xs-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div>
                <div class="card ">
                    <div class="text-xs-center header">Nuestra ubicación.</div>
                    <div class="card-block text-xs-center">
                        <h4>Dirección:</h4>
                        <div>
                        2217 Washington Blvd<br />
                        Washington DC<br />
                        #(703) 1234 1234<br />
                        service@company.com<br />
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    $.('document').ready(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>

		</section>
	</div>
<!--	<section id="index" class="row">

<div class="col-lg-10 p-0 index-content">
	<div id="home" class="section-index">
		<div id="products" class="section-index">
		</div>
		<div id="services" class="section-index">
			<!--				<div class="services-content p-5">
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
				</div>-->
			<!--</div>
			<div id="brands" class="section-index">
				<div class="p-4 text-brands">
					<h2>Representamos a las mejores marcas del mundo</h2>
					<p>Somos una empresa 100% peruana especialista en trasporte vertical y con más de 15 años de experiencia en el rubro, lo cual nos ha permitido seleccionar a las mejores marcas para cada aplicación a nivel mundial.</p>
					<div class="py-5">
						<div class="row text-center">
							<div class="col-6 col-md-6 m-auto py-3"><img src="{{ asset('img/brands/koyo.png') }}" alt="Representaciones">
							</div>
							<div class="col-6 col-md-6 m-auto py-3"><img src="{{ asset('img/brands/lehner.png') }}" alt="Representaciones">
							</div>
						</div>
						<div class="row text-center">
							<div class="col-6 col-md-6 m-auto py-3"><img src="{{ asset('img/brands/alimak.png') }}" alt="Representaciones">
							</div>
							<div class="col-6 col-md-6 m-auto py-3"><img src="{{ asset('img/brands/hidral.png') }}" alt="Representaciones">
							</div>
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
	</section>-->
			@endsection