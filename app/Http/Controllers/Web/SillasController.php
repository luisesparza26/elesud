<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class SillasController extends Controller
{
    public function silla_curva(){
    	$meta = [
			"url" => "www.elesud.com/silla-curva",
			"type" => "website",
			"title" => "Elesud - Sillas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'silla-curva', [ 'meta' => $meta ] );
	}

	public function silla_recta(){
    	$meta = [
			"url" => "www.elesud.com/silla-recta",
			"type" => "website",
			"title" => "Elesud - Sillas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'silla-recta', [ 'meta' => $meta ] );
	}

	public function silla_salvaescaleras(){
    	$meta = [
			"url" => "www.elesud.com/silla-salvaescaleras",
			"type" => "website",
			"title" => "Elesud - Sillas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'silla-salvaescaleras', [ 'meta' => $meta ] );
	}

}
