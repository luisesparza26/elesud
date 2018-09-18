<?php

namespace App\ Http\ Controllers\ Web;

use Illuminate\ Http\ Request;
use App\ Http\ Controllers\ Controller;

class ElevadoresController extends Controller {
	public
	function elevador_autos() {
		$meta = [
			"url" => "www.elesud.com/elevador-autos",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-de-autos', [ 'meta' => $meta ] );
	}

	public
	function elevador_carga() {
		$meta = [
			"url" => "www.elesud.com/elevador-carga",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-de-carga', [ 'meta' => $meta ] );
	}

	public
	function elevador_pasajeros() {
		$meta = [
			"url" => "www.elesud.com/elevador-pasajeros",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-de-pasajeros', [ 'meta' => $meta ] );
	}

	public
	function elevador_hidraulico() {
		$meta = [
			"url" => "www.elesud.com/elevador-hidraulico",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-hidraulico', [ 'meta' => $meta ] );
	}

	public
	function elevador_hospitales() {
		$meta = [
			"url" => "www.elesud.com/elevador-hospitales",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-para-hospitales', [ 'meta' => $meta ] );
	}

	public
	function elevador_piscina() {
		$meta = [
			"url" => "www.elesud.com/elevador-piscina",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-piscina', [ 'meta' => $meta ] );
	}

	public
	function elevador_cremallera() {
		$meta = [
			"url" => "www.elesud.com/elevador-cremallera",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevadores-cremallera-pinon', [ 'meta' => $meta ] );
	}

	public
	function elevadores_para_construccion() {
		$meta = [
			"url" => "www.elesud.com/elevador-para-construccion",
			"type" => "website",
			"title" => "Elesud - Elevadores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevador-para-construccion', [ 'meta' => $meta ] );
	}

}