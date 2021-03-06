@extends( 'pagelayout' )@section( 'content' )
	<div id="index">
		<section id="home" class="section-index">
			<div class="video-bg">
				<video autoplay loop muted>
					<source src="{{ asset('img/index/home.mp4') }}">
				</video>
				<div class="home-content text-center">
					<div class="container align-self-center">
						<img src="{{ asset('img/logo/logo-vertical.png') }}" alt="logo">
						<div class="branding">
							<h2>Líderes en Transporte Vertical</h2>
							<p class="text-center">Instalación y Mantenimiento de Ascensores</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about" class="section-index">
			<div class="container">
				<div class="p-4 text-about">
					<h2 class="wow fadeInRight">Nosotros</h2>
					<hr role="sub">
					<div class="row align-items-center pt-5">
						<div class="col-lg-9">
							<p>Somos una empresa formada por capitales peruanos, responsable del cumplimiento de las leyes nacionales en transporte vertical, ofreciendo equipos que cumplen con las normativas nacionales e internacionales de equipos de elevación, con el objetivo de garantizar la seguridad de los usuarios. <br><br>Cumplimos con Norma A120 para personas discapacitadas y Reglamento Nacional de Edificaciones - Sección Transporte Mecánico. Contamos con Certificaciones <b>ISO 9001 - Calidad</b>.</p>
						</div>
						<div class="col-lg-3 py-2">
							<img src="{{ asset('img/index/sgs.png') }}" alt="SGS" width="180">
						</div>
					</div>
				</div>
				<div class="row py-5 text-center">
					<div class="wow slideInLeft col-lg-4 py-2">
						<img src="{{ asset('img/index/mision.svg') }}" alt="mision" width="55">
						<h3>Misión</h3>
						<p class="text-center">Garantizar la mejor solución en transporte vertical brindando seguridad a nuestros usuarios con equipos de última generación.</p>
					</div>
					<div class="wow slideInUp col-lg-4 py-2">
						<img src="{{ asset('img/index/vision.svg') }}" alt="vision" width="55">
						<h3>Visión</h3>
						<p class="text-center">Ser una de las empresas más confiables brindando las mejores soluciones en los diferentes proyectos del país.</p>
					</div>
					<div class="wow slideInRight col-lg-4 py-2">
						<img src="{{ asset('img/index/valores.svg') }}" alt="valores" width="55">
						<h3>Valores</h3>
						<p class="text-center">Responsabilidad y compromiso en los servicios asumidos.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="products" class="section-index">
			<div class="container py-4">
				<h2 class="wow fadeInLeft">Productos</h2>
				<hr role="sub">
				<p class="py-4 text-center">Conozca nuestra amplia gama de productos</p>
				<div class="products-container row mx-0">
					<div class="col-md-6 p-0 wow slideInDown">
						<div class="news-card">
							<img src="{{ asset('img/products/accessibility.jpg') }}" alt="accessibility" class="products-img">
							<div class="card-text">
								<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/accessibility.svg') }}" alt="icon" width="30">Accesibilidad</h2>
								<div class="card-more">
									<a class="btn btn-secondary" href="{{ url('accesibilidad') }}">Ver más</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-0 wow fadeInLeft">
						<div class="news-card">
							<img src="{{ asset('img/products/escalator.jpg') }}" alt="" class="products-img">
							<div class="card-text">
								<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/escalator.svg') }}" alt="icon" width="30">Escaleras y rampas</h2>
								<div class="card-more">
									<a class="btn btn-secondary" href="{{ url('escaleras') }}">Ver más</a>
								</div>
							</div>
						</div>
					</div>
					<div class="products-container row mx-0">
						<div class="col-lg-4 col-md-6 p-0 wow slideInRight">
							<div class="news-card">
								<img src="{{ asset('img/products/passenger.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/elevator.svg') }}" alt="icon" width="30">Ascensores</h2>
									<div class="card-more">
										<a class="btn btn-secondary" href="{{ url('ascensores') }}">Ver más</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 p-0 wow slideInUp">
							<div class="news-card">
								<img src="{{ asset('img/products/construction.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/construction.svg') }}" alt="icon" width="30">Elevadores para construcción</h2>
									<div class="card-more">
										<a class="btn btn-secondary" href="{{ url('construccion') }}">Ver más</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 p-0 wow slideInUp">
							<div class="news-card">
								<img src="{{ asset('img/products/industrial.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/industrial.svg') }}" alt="icon" width="30">Ascensores Industriales</h2>
									<div class="card-more">
										<a class="btn btn-secondary" href="{{ url('industriales') }}">Ver más</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="services" class="section-index">
			<div class="container">
				<h2 class="wow fadeInRight">Servicios</h2>
				<hr role="sub">
				<div class="pt-5">
					<p>Ofrecemos a nuestros clientes la más amplia gama de servicios de mantenimiento de elevadores de acuerdo a la normativa vigente y enfocados a la seguridad y la eficiencia energética: mantenimiento preventivo, correctivo, instalación y montaje, revisión de los componentes de seguridad y sistemas de alarma.</p>
					<p>Para garantizar la calidad de nuestro servicio contamos con un equipo de profesionales altamente cualificados, amplia infraestructura y una atención 24 horas durante todo el año.</p>
				</div>
				<div class="row py-5">
					<div class="col-xl-7 col-md-6">
						<div class="card pb-2 my-3 wow slideInLeft">
							<img class="card-img-top" src="{{ asset('img/services/preventivo.jpg') }}" alt="preventivo">
							<div class="card-block">
								<div class="card-trans">
									<h4 class="card-title"><img class="mr-2" src="{{ asset('img/services/04.svg') }}" alt="icon" width="30">Mantenimiento Preventivo</h4>
									<hr role="back">
									<p class="card-text py-3">El mantenimiento preventivo de los elevadores se realizará en las visitas periódicas y consistirá en la verificación metódica de la instalación eléctrica y órganos mecánicos con el fin de ajustar, reparar o sustituir piezas antes de que su estado pueda ocasionar averías o anormalidades en el funcionamiento.</p>
									<div class="text-right content-btn">
										<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalservicespreventivo">Solicitar visita técnica</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card pb-2 my-3 wow slideInLeft">
							<img class="card-img-top" src="{{ asset('img/services/correctivo.jpg') }}" alt="correctivo">
							<div class="card-block">
								<div class="card-trans">
									<h4 class="card-title"><img class="mr-2" src="{{ asset('img/services/03.svg') }}" alt="icon" width="30">Mantenimiento Correctivo</h4>
									<hr role="back">
									<p class="card-text py-3">Confía tu equipo en manos de expertos; contamos con técnicos especializados y atención de emergencias los 365 días del año, 24 horas al día. Ofrecemos contratos de mantenimiento a tu necesidad, estos están diseñados para satisfacer las diversas necesidades de nuestros clientes.</p>
									<div class="text-right content-btn">
										<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalservicescorrectivo">Contácta un especialista</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-md-6">
						<div class="card pb-2 my-3 wow slideInRight">
							<img class="card-img-top" src="{{ asset('img/services/instalacion.jpg') }}" alt="instalacion">
							<div class="card-block">
								<h4 class="card-title"><img class="mr-2" src="{{ asset('img/services/01.svg') }}" alt="icon" width="30">Instalación</h4>
								<hr role="back">
								<p class="card-text py-3">Contamos con personal técnico altamente capacitado para estos trabajos, respetando las Normas de Seguridad y Salud en el trabajo nacionales <b>Norma-G-050 e Internacionales (OSHAS 18001)</b>.</p>
								<div class="text-right content-btn">
									<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalservices">Solicitar cotización</button>
								</div>
							</div>
						</div>
						<div class="card pb-2 my-3 wow slideInRight">
							<img class="card-img-top" src="{{ asset('img/services/modernizacion.jpg') }}" alt="modernizacion">
							<div class="card-block">
								<h4 class="card-title"><img class="mr-2" src="{{ asset('img/services/02.svg') }}" alt="icon" width="30">Modernización</h4>
								<hr role="back">
								<p class="card-text py-3">Modernización es sinónimo de vanguardia, seguridad y comodidad, cuando usted decide hacer una modernización está protegiendo su inversión a largo plazo y garantiza un buen funcionamiento de su equipo para los usuarios, modernizar parcialmente o realizar una sustitución completa es posible con Elevadores Sudamericanos.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="brands" class="section-index">
			<div class="container">
				<h2 class="wow fadeInLeft">Representamos a las mejores marcas del mundo</h2>
				<hr role="sub">
				<div class="py-5">
					<p>Ser especialistas en trasporte vertical y con más de 15 años de experiencia en el rubro, nos ha permitido seleccionar a las mejores marcas para cada aplicación a nivel mundial.</p>
					<div class="row align-items-center py-5">
						<div class="col-md-3 col-sm-6">
							<img class="w-100" src="{{ asset('img/brands/koyo.png') }}" alt="Representaciones">
						</div>
						<div class="col-md-3 col-sm-6">
							<img class="w-100" src="{{ asset('img/brands/lehner.png') }}" alt="Representaciones">
						</div>
						<div class="col-md-3 col-sm-6">
							<img class="w-100" src="{{ asset('img/brands/alimak.png') }}" alt="Representaciones">
						</div>
						<div class="col-md-3 col-sm-6">
							<img class="w-100" src="{{ asset('img/brands/hidral.png') }}" alt="Representaciones">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="projects" class="section-index">
			<div class="container">
				<h2 class="wow fadeInLeft">Conóce nuestros proyectos</h2>
				<hr role="sub">
				<p>Contamos con una trayectoria de trabajos realizados, cada uno de ellos ha sido pensado, diseñado y fabricado de forma personalizada y a medida, siguiendo y cumpliendo las necesidades del cliente.</p>
				<div class="row py-5 text-center">
					<div class="col-md-4 col-sm-6 wow fadeIn">
						<img class="w-100" src="{{ asset('img/projects/guipor.png') }}">
						<h4>Centro Comercial <b>Guipor</b><br>Lima</h4>
					</div>
					<div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".3s">
						<img class="w-100" src="{{ asset('img/projects/guizado.jpg') }}">
						<h4><b>Hotel Guizado Portillo</b><br>Lunahuaná</h4>
					</div>
					<div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay=".7s">
						<img class="w-100" src="{{ asset('img/projects/record.png') }}">
						<h4>Centro Comercial <b>Record</b><br>Lima</h4>
					</div>
				</div>
				<div class="projects-p py-3">
					<h3>Otros proyectos ejecutados</h3>
					<ul>
						<li>CLINICA PRIVADA “NOVA CLINIC”</li>
						<li>COLEGIO GALILEO </li>
						<li>MULTIFAMILIAR QUISPICANCHIS</li>
						<li>MULTIFAMILIAR SALAZAR BARRETO 291</li>
						<li>MULTIFAMILIAR GIORGIO BALLETA</li>
						<li>MULTIFAMILIAR TOMAS MARSANO II</li>
						<li>I.E. 558 VILLA EL SALVADOR</li>
						<li>I.E. 3056 INDEPENDENCIA</li>
						<li>OFICINAS RENIEC – LINCE</li>
					</ul>
				</div>
			</div>
		</section>
	</div>

<!-- Modal -->
<div class="modal fade" id="modalservicespreventivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalserviceslabel">Solicitar visita técnica</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body">
				<p>Solicita una visita técnica de nuestros especialistas y obtén el mejor precio del mercado.</p>
				<form action="{{ route('preventivo') }}" method="POST">
					{{ csrf_field() }}
					<div class="row form-group mb-2">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="nombre" required placeholder="Nombre">
						</div>
						<div class="col-sm-6">
							<input type="text" name="apellido" class="form-control" placeholder="Apellido">
						</div>
					</div>
					<div class="row form-group mb-2">
						<div class="col-sm-6">
							<input type="tel" class="form-control" name="phone" required placeholder="Teléfono" pattern="[0-9]{10}">
						</div>
						<div class="col-sm-6">
							<input type="text" name="email" class="form-control" required placeholder="Correo">
						</div>
					</div>
					<div class="row form-group mb-2">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="address" required placeholder="Dirección">
						</div>
						<div class="col-sm-6">
							<input type="text" name="ref" class="form-control" placeholder="Referencia">
						</div>
					</div>
					<div class="form-group my-1">
						<textarea class="form-control mb-1" id="message" required name="mensaje" rows="3"></textarea>
					</div>
					<button class="w-100 btn btn-secondary">Solicitar</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalservicescorrectivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body row justify-content-around mt-3">
				<p><a href="https://api.whatsapp.com/send?phone=975148573&text=Hola, estoy interesado en sus servicios y productos" target="_blank"><img class="mr-2" src="{{ asset('img/social/whatsapp.svg') }}" alt="wp" width="25"></a>(+51) 975 148 573</p>
				<p>aescalante@elesud.com</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalservices" tabindex="-1" role="dialog" aria-labelledby="modalserviceslabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalserviceslabel">Solicitar Cotización</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			


			</div>
			<div class="modal-body">
				<div id="contact-products">
					<form action="{{route('instalacion')}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<p>Realiza tu cotización, envíanos los planos de tu proyecto y un asesor se pondrá en contácto en breve.</p>
						<div class="row form-group mb-2">
							<div class="col-sm-6">
								<input type="text" class="form-control" required name="nombre" placeholder="Nombre">
							</div>
							<div class="col-sm-6">
								<input type="text" name="apellido" class="form-control" placeholder="Apellido">
							</div>
						</div>
						<div class="row form-group mb-2">
							<div class="col-sm-6">
								<input type="tel" class="form-control" required name="phone" placeholder="Teléfono" pattern="[0-9]{10}">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" required class="form-control" placeholder="Correo">
							</div>
						</div>
						<div class="row form-group my-3">
							<div class="col-sm-12">
								<input type="file" name="file" id="file">
								<p class="mt-2">*Adjuntar planos de la edificación</p>
							</div>
						</div>

						<div class="form-group mb-1">
							<textarea class="form-control mb-1" id="message" required name="mensaje" rows="3"></textarea>
						</div>
						<button type="submit" class="w-100 btn btn-secondary">Solicitar</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
@endsection