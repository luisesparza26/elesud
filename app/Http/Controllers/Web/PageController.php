<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
    	$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'inicio', [ 'meta' => $meta ] );
	}

	public function nosotros(){
    	$meta = [
			"url" => "www.elesud.com/nosotros",
			"type" => "website",
			"title" => "Elesud - Nosotros",
			"description" => "#",
			"image" => "#",
		];

		return view( 'nosotros', [ 'meta' => $meta ] );
	}

	public function marcas(){
    	$meta = [
			"url" => "www.elesud.com/marcas",
			"type" => "website",
			"title" => "Elesud – Marcas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'marcas', [ 'meta' => $meta ] );
	}

	public function accesibilidad(){
    	$meta = [
			"url" => "www.elesud.com/accesibilidad",
			"type" => "website",
			"title" => "Elesud – Accesibilidad",
			"description" => "#",
			"image" => "#",
		];

		return view( 'accesibilidad', [ 'meta' => $meta ] );
	}
	public function productos(){
    	$meta = [
			"url" => "www.elesud.com/productos",
			"type" => "website",
			"title" => "Elesud – Productos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'productos', [ 'meta' => $meta ] );
	}

	public function proyectos(){
    	$meta = [
			"url" => "www.elesud.com/productos",
			"type" => "website",
			"title" => "Elesud – Proyectos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'proyectos', [ 'meta' => $meta ] );
	}

	public function servicios(){
    	$meta = [
			"url" => "www.elesud.com/servicios",
			"type" => "website",
			"title" => "Elesud – Servicios",
			"description" => "#",
			"image" => "#",
		];

		return view( 'servicios', [ 'meta' => $meta ] );
	}
}
