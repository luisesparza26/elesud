@extends( 'pagelayout' )@section( 'content' )
	<section id="contenedor">
		<form>
			<input type="radio" id="Slide1" name="slider" numero="06" titulo="Inicio" autofocus="autofocus" checked="checked"/>
			<input type="radio" id="Slide2" name="slider" numero="05" titulo="Nosotros"/>
			<input type="radio" id="Slide3" name="slider" numero="04" titulo="Productos"/>
			<input type="radio" id="Slide4" name="slider" numero="03" titulo="Servicios"/>
			<input type="radio" id="Slide5" name="slider" numero="02" titulo="Marcas"/>
			<input type="radio" id="Slide6" name="slider" numero="01" titulo="Proyectos"/>
			<input type="radio" id="Slide7" name="slider" numero="S1" titulo="Contacto"/>
			<div class="labels">
				<label class="Slide" for="Slide1" id="Slide1">
					<div class="content">
						<h1></h1>
					</div>
				</label>
				<label class="Slide" for="Slide2" id="Slide2">
					<div class="content">
						<h1></h1>
						<div class="block"></div>
					</div>
				</label>
				<label class="Slide" for="Slide3" id="Slide3">
					<div class="content">
						<div class="block">
							<div id="container-products" class="row">
								<div class="products-card">
									<img src="{{ asset('img/products/accesibiliy.jpg') }}" alt="accesibilidad" class="products-img">
									<div class="card-description">
										<h2 class="title">Accesibilidad</h2>
										<div class="container-description">
											<p class="products-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>
											<a href="#" class="products-more">Todos los productos</a>
										</div>
									</div>
								</div>
								<div class="products-card">
									<img src="{{ asset('img/products/passenger.jpg') }}" alt="accesibilidad" class="products-img">
									<div class="card-description">
										<h2 class="title">Ascensores y Escaleras</h2>
										<div class="container-description">
											<p class="products-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
											<a href="#" class="products-more">Todos los productos</a>
										</div>
									</div>
								</div>
								<div class="products-card">
									<img src="{{ asset('img/products/industrial.jpg') }}" alt="accesibilidad" class="products-img">
									<div class="card-description">
										<h2 class="title">Ascensores Industriales</h2>
										<div class="container-description">
											<p class="products-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae&hellip;</p>
											<a href="#" class="products-more">Todos los productos</a>
										</div>
									</div>
								</div>
								<div class="products-card">
									<img src="{{ asset('img/products/construction.jpg') }}" alt="accesibilidad" class="products-img">
									<div class="card-description">
										<h2 class="title">Elevadores para Construcción</h2>
										<div class="container-description">
											<p class="products-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
											<a href="#" class="products-more">Todos los productos</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</label>
				<label class="Slide" for="Slide4" id="Slide4">
					<div class="content">
						<h1></h1>
						<div class="block"></div>
					</div>
				</label>
				<label class="Slide" for="Slide5" id="Slide5">
					<div class="content">
						<h1></h1>
						<div class="block"></div>
					</div>
				</label>
				<label for="Slide6" id="Slide6">
					<div class="content">
						<h1></h1>
						<div class="block"></div>
					</div>
				</label>
				<label for="Slide7" id="Slide7">
					<div class="content">
						<h1></h1>
						<div class="block"></div>
					</div>
				</label>
			</div>
		</form>
	</section>
@endsection