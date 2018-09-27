@extends( 'pageproduct' )
@section( 'title' )Accesibilidad @endsection
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
							<img class="w-100" src="{{ asset('img/products-all/accesibilidad/'.$product->imagen_1 )}}" alt="product">
						</div>
						<div class="carousel-item">
							<img class="w-100" src="{{ asset('img/products-all/accesibilidad/'.$product->imagen_2 )}}" alt="product">
						</div>
						<div class="carousel-item">
							<img class="w-100" src="{{ asset('img/products-all/accesibilidad/'.$product->imagen_3 )}}" alt="product">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-products" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
					<a class="carousel-control-next" href="#carousel-products" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
				</div>
				@include('contacto-products',['categoria' => $product->categoria->nombre,'producto' => $product->titulo])
			</div>
			<div class="col-lg-6 py-3">
				<h1>{{  $product->titulo }}</h1>
				<span>{{  $product->subtitulo }}</span>
				<ul class="nav nav-tabs" id="tabpage" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="home" aria-selected="true"><h5>Descripción</h5></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#specifications" role="tab" aria-controls="profile" aria-selected="false"><h5>Especificaciones</h5></a>
					</li>
				</ul>
				<div class="tab-content" id="tabpage-content">
					<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
						{!! $product->descripcion !!}
					</div>
					<div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="profile-tab">
						{!! $product->especificaciones !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection