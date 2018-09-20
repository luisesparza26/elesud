@extends( 'pagelayout' )@section( 'title' )Accesibilidad @endsection @section( 'content' )
	<div id="accesibilidad">
		<h2>Accesibilidad</h2>
		<hr role="sub">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<a href="{{ url('/silla-curva') }}">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/alpha/alpha-02.jpg') }}" alt="alpha">
						<div class="card-body">
							<h3>Alpha</h3>
							<p class="card-text">La silla salvaescaleras ALPHA ofrece una solución idónea para el uso interior. Con su apariencia atractiva y diseño cómodo, esta silla salvaescalera le permite subir y bajar escaleras con curvas.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/delta/delta-02.jpg') }}" alt="delta">
						<div class="card-body">
							<h3>Delta</h3>
							<p class="card-text">La Delta es la solución perfecta para escaleras rectas, tanto en el interior como en el exterior. La delgadez de su estructura y su silencionsidad son dos rasgos distintivos de su diseño.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/ikaros/ikaros-02.jpg') }}" alt="ikaros">
						<div class="card-body">
							<h3>Ikaros</h3>
							<p class="card-text">La plataforma salvaescalera Ikarus es la unica plataforma en el mundo para escaleras que cambian la inclinación. Al cambiar la altura de las escaleras la plataforma se ajusta automáticamente su nivel.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/omega/omega-02.jpg') }}" alt="omega">
						<div class="card-body">
							<h3>omega</h3>
							<p class="card-text">Interiores o exteriores - la Omega se integra naturalmente en cualquier ubicación. Tanto para usos privados como públicos, escaleras rectas o curvadas, el modelo Omega es sinónimo de movilidad y calidad de vida.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/piscina/piscina-02.jpg') }}" alt="piscina">
						<div class="card-body">
							<h3>piscina</h3>
							<p class="card-text">El poollift Delphin es una valiosa ayuda para entrar o salir de una piscina sin la necesidad de una persona que ayuda. Palancas de mando en la parte superior, así como en el nivel inferior permiten una operación simple de la unidad. </p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
			<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/public/public-02.jpg') }}" alt="public">
						<div class="card-body">
							<h3>public</h3>
							<p class="card-text">La oruga Public puede transportar todos tipos de sillas de ruedas, tanto electricos como manuales. Se puede subir y bajar escaleras con inclinación hasta 35° de una manera segura y fácil.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
			<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/sa3/sa3-02.jpg') }}" alt="sa3">
						<div class="card-body">
							<h3>sa3</h3>
							<p class="card-text">Con la oruga Standard escaleras rectas con cambio de pendiente pueden ser subido de una manera segura y simple. La oruga se adapta a la mayoria de silla de ruedas. Se puede desmontar fácilmente sin no esta en uso o para transportarlo en un coche. </p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
			<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/stairmax/stairmax-02.jpg') }}" alt="stairmax">
						<div class="card-body">
							<h3>stairmax</h3>
							<p class="card-text">La oruga Stairmax es la única oruga en el mercado que permite al discapacitado subir y baja escaleras en su propio silla de ruedas. La silla de ruedas del usario requiere una pequeña adaptación a la estructura de la silla. </p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="">
					<div class="card py-2">
						<img class="card-img-top" src="{{ asset('img/products-all/accesibilidad/stratos/stratos-02.jpg') }}" alt="stratos">
						<div class="card-body">
							<h3>stratos</h3>
							<p class="card-text">Interiores o exteriores - la plataforma STRATOS se integra naturalmente en cualquier ubicación. Tanto para usos privados como públicos, escaleras rectas o curvadas, el modelo STRATOS es sinónimo de movilidad y calidad de vida.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
<style>
	#accesibilidad {
		margin: 4rem 0;
		padding: 2rem;
		max-width: 1500px;
	}
	
	#accesibilidad a {
		text-decoration: none;
	}
	
	#accesibilidad .card {
		border: none;
	}
	
	#accesibilidad .card-body {
		border: solid 1px #777 !important;
		height: 300px;
	}
	
	#accesibilidad .card-body h3 {
		color: #3d58a1;
		text-transform: uppercase;
	}
	
	#accesibilidad .card-body p {
		font-size: 1rem;
		text-align: left !important;
		max-height: 600px;
		color: #000;
	}
</style>
@endsection