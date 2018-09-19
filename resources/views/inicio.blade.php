@extends( 'pagelayout' )@section( 'content' )
	<div id="index">
		<div class="btn-elesud">
			<div class="nav  flex-column align-items-start">
				<input class="mb-3" type="text" id="panel" readonly disabled>
				<a id="homebtn" class="js-scroll-trigger" href="#home" value="I" numero="6">Inicio</a>
				<a id="aboutbtn" class="js-scroll-trigger" href="#about" value="N" numero="5">Nosotros</a>
				<a id="productsbtn" class="js-scroll-trigger" href="#products" value="P" numero="4">Productos</a>
				<a id="servicesbtn" class="js-scroll-trigger" href="#services" value="S" numero="3">Servicios</a>
				<a id="brandsbtn" class="js-scroll-trigger" href="#brands" value="M" numero="2">Marcas</a>
				<a id="projectsbtn" class="js-scroll-trigger" href="#projects" value="P" numero="1">Proyectos</a>
				<a id="contactbtn" class="js-scroll-trigger" href="#contact" value="C" numero="S1">Contacto</a>
			</div>
		</div>
		<section id="home" class="section-index">
			<div class="video-bg">
				<video autoplay loop muted>
					<source src="{{ asset('img/index/home.mp4') }}">
				</video>
				<div class="home-content text-center">

				</div>
			</div>
		</section>
		<section id="about" class="section-index">
			<div class="container">
				<div class="p-4 text-about">
					<h2 class="wow fadeInRight">Nosotros</h2>
					<hr role="sub">
					<div class="row align-items-center">
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
				<div class="products-container row">
					<div class=".col-lg-12 news-card wow slideInDown">
						<img src="{{ asset('img/products/accessibility.jpg') }}" alt="accessibility" class="products-img">
						<div class="card-text">
							<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/accessibility.svg') }}" alt="icon" width="30">Accesibilidad</h2>
							<div class="card-more">
								<button class="btn btn-secondary"><a href="{{ url('accesibilidad') }}">Ver más</a></button>
							</div>
						</div>
					</div>
					<div class="row mx-0">
						<div class="col-md-6 p-0 wow fadeInLeft">
							<div class="news-card">
								<img src="{{ asset('img/products/escalator.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/escalator.svg') }}" alt="icon" width="30">Escaleras y rampas</h2>
									<div class="card-more">
										<button class="btn btn-secondary"><a href="{{ url('escaleras-y-rampas') }}">Ver más</a></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-0 wow slideInRight">
							<div class="news-card">
								<img src="{{ asset('img/products/passenger.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/elevator.svg') }}" alt="icon" width="30">Ascensores</h2>
									<div class="card-more">
										<button class="btn btn-secondary"><a href="{{ url('ascensores') }}">Ver más</a></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-0 wow slideInUp">
							<div class="news-card">
								<img src="{{ asset('img/products/construction.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/construction.svg') }}" alt="icon" width="30">Elevadores para construcción</h2>
									<div class="card-more">
										<button class="btn btn-secondary"><a href="{{ url('elevadores-para-construccion') }}">Ver más</a></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-0 wow slideInUp">
							<div class="news-card">
								<img src="{{ asset('img/products/industrial.jpg') }}" alt="" class="products-img">
								<div class="card-text">
									<h2 class="card-title"><img class="mx-2" src="{{ asset('img/products/industrial.svg') }}" alt="icon" width="30">Ascensores Industriales</h2>
									<div class="card-more">
										<button class="btn btn-secondary"><a href="{{ url('ascensores-industriales') }}">Ver más</a></button>
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
				<p>Ofrecemos a nuestros clientes la más amplia gama de servicios de mantenimiento de elevadores de acuerdo a la normativa vigente y enfocados a la seguridad y la eficiencia energética: mantenimiento preventivo, correctivo, instalación y montaje, revisión de los componentes de seguridad y sistemas de alarma.</p>
				<p>Para garantizar la calidad de nuestro servicio contamos con un equipo de profesionales altamente cualificados, amplia infraestructura y una atención 24 horas durante todo el año.</p>
				<div class="row py-5">
					<div class="col-xl-7 col-md-6">
						<div class="card pb-2 my-3 wow slideInLeft">
							<img class="card-img-top" src="{{ asset('img/services/preventivo.jpg') }}" alt="preventivo">
							<div class="card-block">
								<div class="card-trans">
									<h4 class="card-title">Mantenimiento Preventivo</h4>
									<hr role="back">
									<p class="card-text py-3">El mantenimiento preventivo de los elevadores se realizará en las visitas periódicas y consistirá en la verificación metódica de la instalación eléctrica y órganos mecánicos con el fin de ajustar, reparar o sustituir piezas antes de que su estado pueda ocasionar averías o anormalidades en el funcionamiento.</p>
									<div class="text-right content-btn">
										<a href="#" class="btn btn-secondary">Solicitar cotización</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card pb-2 my-3 wow slideInLeft">
							<img class="card-img-top" src="{{ asset('img/services/correctivo.jpg') }}" alt="correctivo">
							<div class="card-block">
								<div class="card-trans">
									<h4 class="card-title">Mantenimiento Correctivo</h4>
									<hr role="back">
									<p class="card-text py-3">Confía tu equipo en manos de expertos; contamos con técnicos especializados y atención de emergencias los 365 días del año, 24 horas al día. Ofrecemos contratos de mantenimiento a tu necesidad, estos están diseñados para satisfacer las diversas necesidades de nuestros clientes.</p>
									<div class="text-right content-btn">
										<a href="#" class="btn btn-secondary">Contácta un especialista</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-md-6">
						<div class="card pb-2 my-3 wow slideInRight">
							<img class="card-img-top" src="{{ asset('img/services/instalacion.jpg') }}" alt="instalacion">
							<div class="card-block">
								<h4 class="card-title">Intalación</h4>
								<hr role="back">
								<p class="card-text py-3">Contamos con personal técnico altamente capacitado para estos trabajos, respetando las Normas de Seguridad y Salud en el trabajo nacionales <b>Norma-G-050 e Internacionales (OSHAS 18001)</b>.</p>
								<div class="text-right content-btn">
									<a href="#" class="btn btn-secondary">Solicitar cotización</a>
								</div>
							</div>
						</div>
						<div class="card pb-2 my-3 wow slideInRight">
							<img class="card-img-top" src="{{ asset('img/services/modernizacion.jpg') }}" alt="modernizacion">
							<h4 class="card-title">Modernización</h4>
							<hr role="back">
							<div class="card-block">
								<p class="card-text py-3">Modernización es sinónimo de vanguardia, seguridad y comodidad, cuando usted decide hacer una modernización está protegiendo su inversión a largo plazo y garantiza un buen funcionamiento de su equipo para los usuarios, modernizar parcialmente o realizar una sustitución completa es posible con Elevadores Sudamericanos.</p>
								<div class="text-right content-btn">
									<a href="#" class="btn btn-secondary">Solicitar cotización</a>
								</div>
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
		</section>
		<section id="projects" class="section-index">
			<div class="container">
				<h2 class="wow fadeInLeft">Conóce nuestros proyectos</h2>
				<hr role="sub">
				<p>Contamos con una larga trayectoria de trabajos tanto para particulares como empresas, así como una amplia variedad de proyectos industriales.</p>
				<p>Cada uno de ellos ha sido pensado, diseñado y fabricado de forma personalizada y a medida, siguiendo y cumpliendo las necesidades del cliente.</p>
				<p>En este apartado mostramos una pequeña selección de los mismos</p>
			</div>
		</section>
		<section id="contact" class="section-index">
			<div class="container">
				<h2>Contáctanos</h2>
				<hr role="sub">
				<div class="row">
					<div class="col-lg-6 py-3">
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
										<div class="col-lg-12 px-5 mx-1">
											<button type="submit" class="btn btn-secondary">Enviar</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-lg-6 py-3">
						<div>
							<div class="card ">
								<div class="text-xs-center header">Nuestra ubicación.</div>
								<div class="card-block text-xs-center">
									<h4>Dirección:</h4>
									<div>
										2217 Washington Blvd<br/> Washington DC<br/> #(703) 1234 1234<br/> service@company.com
										<br/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection