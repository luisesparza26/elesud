@extends( 'page' )
@section( 'title' )Accesibilidad @endsection
@section( 'content' )

	{{ 'img/accesibilidad/'.$product->imagen_1 }}
	{{ 'img/accesibilidad/'.$product->imagen_2 }}
	{{ 'img/accesibilidad/'.$product->imagen_3 }}
	{{ 'img/accesibilidad/'.$product->titulo }}
	{{ 'img/accesibilidad/'.$product->subtitulo }}
	{{ 'img/accesibilidad/'.$product->descripcion }}
	{{ 'img/accesibilidad/'.$product->especificaciones }}

@endsection