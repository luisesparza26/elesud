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
							<p class="card-text">El elevador KOYO combina tecnología alemana, alta integración e integración de todo el sistema de control inteligente de la computadora, control de microcomputadora de baja potencia y siempre funciona a través de un concepto de diseño eficiente, eficiente en ahorro de energía, configuración de alto nivel, alto rendimiento y potencia.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="{{url('/ascensores/panoramico')}}">
					<div class="card my-2">
						<img class="card-img-top" src="{{ asset('img/products-all/ascensores/panoramico.jpg') }}" alt="koyo">
						<div class="card-body">
							<h3>Ascensor Turístico<img src="{{ asset('img/brands/koyo.png') }}" alt="lehner" width="100" height="30"></h3>
							<p class="card-text">El elevador de turismo de KOYO, que utiliza una tecnología innovadora de pensamiento espacial multidimensional, puede diseñar y producir hasta cuatro tipos de turismo: una variedad de estilos de automóviles, un cuerpo sólido y una nueva luz.</p>
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
							<p class="card-text">Elevador médico KOYO, el uso de sistema de control de alta precisión y bajo consumo amigable con el medio ambiente genera automáticamente la mejor curva de velocidad, da rienda suelta a las ventajas de la tecnología de control de accionamiento VVVF, la elección de componentes de alta calidad para hacer el ascensor silencioso y estable. 3 mm) para reducir la presión de dolor del paciente.</p>
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
							<p class="card-text">El ascensor para el hogar de KOYO es el uso de los estándares de seguridad europeos para los pequeños elevadores que ahorran energía. En un gran número de concepto de diseño fácil de usar, diseñado específicamente para la construcción de baja altura diseñado host pequeño sin engranaje sincrónico de imanes permanentes, al tiempo que ahorra espacio, pero también reduce en gran medida el costo de la electricidad para los clientes.</p>
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
							<p class="card-text">El elevador KOYO, la innovadora tecnología de control de transmisión VVVF y la tecnología de control de posición de puerta aplicada a la fabricación de elevadores de carga, con una precisión de control sin igual de productos similares, mejoran en gran medida la estabilidad y fiabilidad de los elevadores de camiones.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection