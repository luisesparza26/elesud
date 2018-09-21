@extends( 'page' )
@section( 'title' )Elevadores para Construccion@endsection
@section( 'content' )
	<div id="products-detail" class="container mx-auto">
		<div class="row">
			<div class="col-lg-6 py-3">
				<div id="carousel-products" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-products" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-products" data-slide-to="1"></li>
						<li data-target="#carousel-products" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="w-100" src="{{ asset('img/products-all/construccion/'.$product->imagen_1 )}}" alt="product">
						</div>
						<!--<div class="carousel-item">
							<img class="w-100" src="{{ asset('img/products-all/construccion/'.$product->imagen_2 )}}" alt="product">
						</div>
						<div class="carousel-item">
							<img class="w-100" src="{{ asset('img/products-all/construccion/'.$product->imagen_3 )}}" alt="product">
						</div>-->
					</div>
					<a class="carousel-control-prev" href="#carousel-products" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
					<a class="carousel-control-next" href="#carousel-products" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
				</div>
				@include('contacto-products')
			</div>
			<div class="col-lg-6 py-3">
				<h1>{{  $product->titulo }}</h1>
				<span>{{  $product->subtitulo }}</span>
				<div class="py-4">
					<p>{!! $product->descripcion !!}</p>
					<h3>Especificaciones</h3>
					<div class="specification py-2">
					{!! $product->especificaciones !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection