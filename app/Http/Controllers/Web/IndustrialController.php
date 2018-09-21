<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class IndustrialController extends Controller {
    public function industriales() {
    	$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-industriales.industriales', [ 'meta' => $meta ] );
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

		return view( 'ascensores-industriales.industriales-products', compact('meta','product'));
	}
}
