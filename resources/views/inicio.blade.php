@extends( 'pagelayout' )@section( 'content' )
	<section id="contenedor" class="hybrid">
		<form>
			<input type="radio" id="Slide1" name="slider" numero="06" titulo="Inicio" autofocus="autofocus" checked="checked"/>
			<input type="radio" id="Slide2" name="slider" numero="05" titulo="Nosotros"/>
			<input type="radio" id="Slide3" name="slider" numero="04" titulo="Productos"/>
			<input type="radio" id="Slide4" name="slider" numero="03" titulo="Servicios"/>
			<input type="radio" id="Slide5" name="slider" numero="02" titulo="Representaciones"/>
			<input type="radio" id="Slide6" name="slider" numero="01" titulo="Proyectos"/>
			<input type="radio" id="Slide7" name="slider" numero="S1" titulo="Contacto"/>
			<div class="labels">
				<label class="Slide m-0" for="Slide1" id="Slide1">
					<video autoplay="autoplay" loop="loop" id="video-background" preload="auto" volume="50"/><source src="{{ asset('img/index/home-vd.mp4') }}" type="video/mp4" /></video/>
					<div class="bg-overlay">
						<div class="content mx-auto text-center text-white" style="margin-top:15%;">
						<div class="container align-middle">
							<h1>Bienvenido</h1>
						<h3 style="font-size: 3rem;" class="mt-3">Elevadores Sudamericanos</h3>
						<p >Somos una empresa peruana con amplia experiencia en brindar soluciones de transporte vertical de todo tipo, a un precio económico, con calidad y cumpliendo su exigente cronograma.</p>
						</div>
						
						
					</div>
					</div>
					
				</label>
				<label class="Slide m-0" for="Slide2" id="Slide2">
					<div class="container p-5">
						<div class="nosotros py-4">
							<h2>Nosotros</h2>
							<p>Somos una empresa peruana con amplia experiencia en brindar soluciones de transporte vertical de todo tipo, a un precio económico, con calidad y cumpliendo su exigente cronograma.<br><br>Cumplimos con Norma A120 para personas discapacitadas y Reglamento Nacional de Edificaciones- Sección Transporte Mecánico.<br><br>Contamos con Certificaciones ISO 9001- Calidad.</p>
						</div>
						<div class="mision-vision row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Misión</h2>
									</div>
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus officia commodi dolores nesciunt omnis, error a quo, neque hic totam cupiditate reiciendis ratione nisi maxime, esse distinctio veritatis consectetur officiis.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Visión</h2>
									</div>

									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore aperiam, numquam commodi quibusdam. In quos illo obcaecati veniam qui veritatis, corporis facilis dolore eos. Temporibus, dignissimos unde quo tenetur consectetur.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</label>
				<label class="Slide m-0" for="Slide3" id="Slide3">
				</label>
			



				<label class="Slide m-0" for="Slide4" id="Slide4">
					<div class="container p-5">
						<div class="py-3">
							<h2>Servicios</h2>
							<p>Contamos con personal técnico altamente capacitado para estos trabajos, respetando las Normas de Seguridad y Salud en el trabajo nacionales Norma-G-050 e Internacionales (OSHAS 18001).</p>
						</div>
						<div class="mantenimientos">
							<!--<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Instalaciones</h2>
									</div>
									<div class="card-body">
										<p>Contamos con personal técnico altamente capacitado para estos trabajos, respetando las Normas de Seguridad y Salud en el trabajo nacionales Norma-G-050 e Internacionales (OSHAS 18001).</p>
										<div class="card-btn">
											<button type="button" class="btn btn-secondary">Contactar</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Modernización</h2>
									</div>
									<div class="card-body">
										<p>Modernización es sinónimo de vanguardia, seguridad y comodidad, cuando usted decide hacer una modernización está protegiendo su inversión a largo plazo y garantiza un buen funcionamiento de su equipo para los usuarios, modernizar parcialmente o realizar una sustitución completa es posible con Elevadores Sudamericanos.</p>
										<div class="card-btn">
											<button type="button" class="btn btn-secondary">Contactar</button>
										</div>
									</div>
								</div>
							</div>
							</div>-->
							<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Mantenimiento Preventivo</h2>
									</div>
									<div class="card-body">
										<p>El servicio de mantenimiento de ELESUD consta de lo siguiente:<br><br> INSPECCION, LIMPIEZA Y LUBRICACION por especialista. Solicita tu cotizacion y mejoramos las demas propuesta. Contamos con emergencistas 24/7</p>
										<div class="card-btn">
											<button type="button" class="btn btn-secondary">Solicitar una cotización</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h2>Mantenimiento Correctivo</h2>
									</div>
									<div class="card-body">
										<p>El servicio de reparacion de ascensores de ELESUD es rapido y económico, solicita tu cotizacion y seras atendido por un especialista.<br>Contrata tu reparación y mejoramos las demas propuestas, además obten 1 mes de mantenimiento gratuito. Financiamos en cuotas sin intereses.</p>
										<div class="card-btn">
											<button type="button" class="btn btn-secondary">Solicitar una cotización</button>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</label>
				<label class="Slide m-0" for="Slide5" id="Slide5">
					<div class="container p-5">
						<div class="brands p-5">
							<h2>Representamos a las mejores marcas del mundo.</h2>
							<p>Somos una empresa 100% peruana especialista en trasporte vertical y con más de 15 años de experiencia en el rubro, lo cual nos ha permitido seleccionar a las mejores marcas para cada aplicación a nivel mundial.</p>
							<div class="row align-items-center py-5">
								<div class="col-lg-4">
									<img class="w-100" src="{{ asset('img/brands/koyo.png') }}" alt="brand">
								</div>
								<div class="col-lg-4">
									<img class="w-100" src="{{ asset('img/brands/lehner.png') }}" alt="brand">
								</div>
								<div class="col-lg-4">
									<img class="w-100" src="{{ asset('img/brands/alimak.png') }}" alt="brand">
								</div>
							</div>
						</div>
					</div>
				</label>
				<label class="Slide m-0" for="Slide6" id="Slide6">
					<div class="content">
						<div class="container p-4 text-center mt-5">
							<img class="w-75" src="{{ asset('img/index/brochure.jpg') }}" alt="brand">
						</div>
					</div>
				</label>
				<label class="Slide m-0" for="Slide7" id="Slide7">
					<div class="content">

					</div>
				</label>
			</div>
		</form>
	</section>
@endsection