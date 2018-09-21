<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ConstruccionController extends Controller {
   public function construccion() {
    	$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'elevadores-para-construccion.construccion', [ 'meta' => $meta ] );
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

		return view( 'elevadores-para-construccion.construccion-products', compact('meta','product'));
	}
}
