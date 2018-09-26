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
							<p class="card-text">Escalera mecánica KOYO con una fuerte fuerza de seguridad, que lleva la responsabilidad del usuario, el propósito de los pasajeros en el camino en la carretera para proporcionar una estancia corta y acogedora.</p>
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
							<p class="card-text">KOYO garaje de estacionamiento tridimensional es un equipo de estacionamiento de cambio de elevación. El sistema de elevación y conducción es un sistema de suspensión de cable de cuatro puntos, que es estable y confiable en su funcionamiento. </p>
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
							<p class="card-text">La serie KOYO pasarelas móviles, de 0 grados a 12 grados y otras especificaciones y estilos para que los usuarios elijan, se usan ampliamente en los principales centros comerciales, estaciones de ferrocarril, terminales, terminales, centros comerciales, centros de entretenimiento, salas de exposiciones y otros lugares públicos.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection