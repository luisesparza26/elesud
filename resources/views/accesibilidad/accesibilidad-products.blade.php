@extends( 'page' )
@section( 'title' )Accesibilidad @endsection
@section( 'content' )
<div class="container mt-5 mx-auto">
	{{ 'img/products/'.$product->imagen_1 }} <br>
	{{ 'img/products/'.$product->imagen_2 }} <br>
	{{ 'img/products/'.$product->imagen_3 }} <br>
	{{  $product->titulo }} <br>
	{{  $product->subtitulo }} <br>
	{!!  $product->descripcion !!} <br> 
	{!!  $product->especificaciones !!}
</div>
	

@endsection