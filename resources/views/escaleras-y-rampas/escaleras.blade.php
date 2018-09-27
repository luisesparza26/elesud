@extends( 'page' )
@section( 'title' )Escaleras y Rampas @endsection
@section( 'content' )
	<div id="products-all" class="container">
		<div class="title-products">
			<h1>Escaleras y Rampas<img class="mx-2" src="{{ asset('img/products/elevator-black.svg') }}" alt="icon" width="35"></h1>
			<hr role="sub">
		</div>
		<p class="py-4 text-center">Elegante Y Tranquilo, Cómodo Y Seguro</p>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/escaleras/escaleras-mecanica')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/escaleras/escalera-mecanica.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Escalera mecánica<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">La escalera eléctrica de KOYO, manteniendo su compromiso con el usuario, cuenta con una fuerte seguridad, diseñada únicamente para proporcionar una cómoda estancia a los pasajeros.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/escaleras/elevador-autos')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/escaleras/elevador-autos.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Elevador de autos<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">Una herramienta importante de transporte vertical de automóviles que puede ahorrar hasta un 80% de espacio de construcción y duplicar la eficiencia de regreso de los mismos.</p>
						</div>
					</div>
				</a>
			</div>
						<div class="col-lg-4 col-md-6">
				<a href="{{url('/escaleras/pasarela')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/escaleras/pasarela.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Pasarelas móviles<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">La serie KOYO ofrece diversas especificaciones y modelos para que el cliente elija, ampliamente recomendado para ser utilizado en los principales centros comerciales, centros recreativos, aeropuertos, salas de exposiciones y otros espacios públicos.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection