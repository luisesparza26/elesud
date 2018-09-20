<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrugasController extends Controller
{
    public function orugas(){
    	$meta = [
			"url" => "www.elesud.com/orugas",
			"type" => "website",
			"title" => "Elesud - Orugas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'orugas', [ 'meta' => $meta ] );
	}

	public function s3sa(){
    	$meta = [
			"url" => "www.elesud.com/sa3-sa-s",
			"type" => "website",
			"title" => "Elesud - Marcas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'sa-3-y-sa-s', [ 'meta' => $meta ] );
	}

	public function stairmax(){
    	$meta = [
			"url" => "www.elesud.com/stairmax",
			"type" => "website",
			"title" => "Elesud - Marcas",
			"description" => "#",
			"image" => "#",
		];

		return view( 'stairmax', [ 'meta' => $meta ] );
	}

}
