<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ElevadoresController extends Controller {
	public function elevadores() {
    	$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevadores.elevadores', [ 'meta' => $meta ] );
	}

	public function show($nombre){
		$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];
		
		$product = Product::where('titulo',$nombre)->first();

		return view( 'elevadores.elevadores-products', compact('meta','product'));
	}
}