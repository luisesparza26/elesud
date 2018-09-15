<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class PlataformasController extends Controller
{
    public function plataforma_delta(){
    	$meta = [
			"url" => "www.elesud.com/plataforma-delta",
			"type" => "website",
			"title" => "Elesud - Plataformas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'plataforma-delta', [ 'meta' => $meta ] );
	}

	public function plataforma_omega(){
    	$meta = [
			"url" => "www.elesud.com/plataforma-omega",
			"type" => "website",
			"title" => "Elesud - Plataformas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'plataforma-omega', [ 'meta' => $meta ] );
	}

	public function plataforma_salvaescaleras(){
    	$meta = [
			"url" => "www.elesud.com/plataforma-salvaescaleras",
			"type" => "website",
			"title" => "Elesud - Plataformas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'plataforma-salvaescaleras-para-aviones', [ 'meta' => $meta ] );
	}

	public function plataforma_stratos(){
    	$meta = [
			"url" => "www.elesud.com/plataforma-stratos",
			"type" => "website",
			"title" => "Elesud - Plataformas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'plataforma-stratos', [ 'meta' => $meta ] );
	}

	public function plataformas_verticales(){
    	$meta = [
			"url" => "www.elesud.com/plataformas-verticales",
			"type" => "website",
			"title" => "Elesud - Plataformas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'plataformas-verticales', [ 'meta' => $meta ] );
	}

}
