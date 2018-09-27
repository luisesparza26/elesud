@extends( 'page' )
@section( 'title' )Ascensores@endsection
@section( 'content' )
	<div id="products-all" class="container">
		<div class="title-products">
			<h1>Ascensores<img class="mx-2" src="{{ asset('img/products/elevator-black.svg') }}" alt="icon" width="35"></h1>
			<hr role="sub">
		</div>
		<p class="py-4 text-center">Calidad Extraordinaria, Cómoda Y Segura.</p>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/pasajeros')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/pasajeros.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Ascensor De Pasajeros<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">Los elevadores de pasajeros KOYO integran el concepto de desplazamiento de cabina bajo un control absoluto, el sistema de transmisión digital VVVF de frecuencia variable combina perfectamente con los motores síncronos de imanes permanentes (PM), tecnología de tracción sin engranajes.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/panoramico')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/panoramico.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Ascensor Panorámico<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">El ascensor panorámico KOYO, adopta el pensamiento espacial multidimensional en la innovación, por lo que se puede diseñar y producirse una variedad de estilos; más de cuatro cabinas con un mecanismo firme, novedoso y hermoso.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/medico')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/medico.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Elevador Médico<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">Elevador médico KOYO, considera plenamente su entorno y su uso especial, integrando inteligente y eficientemente alta eficiencia, y diseño de control de alta precisión especializado y acorde con las necesidades de hospitales, centros médicos, asilos, y otras instituciones médicas.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/hogar')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/hogar.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Ascensor Del Hogar<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">El ascensor para el hogar de KOYO cuenta con diferentes estilos de diseño, convirtiéndose en un símbolo de distinción para proporcionar la comodidad que el cliente necesita, innovación que resalta el arte y sutileza en una residencia.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/carga')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/carga.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Elevador De Carga<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">El elevador de carga KOYO, cuenta con una construcción robusta, y con operación estable y confiable, hacen que el montacargas KOYO se catalogue como uno de los equipos verticales de transporte pesado, el cual proporcionala seguridad del transporte de su valiosa carga.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection