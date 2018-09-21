<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class AscensoresController extends Controller {
    
    public function ascensores() {
    	$meta = [
			"url" => "www.elesud.com",
			"type" => "website",
			"title" => "Elesud - Elevadores Sudamericanos",
			"description" => "#",
			"image" => "#",
		];

		return view( 'accesibilidad.ascensores', [ 'meta' => $meta ] );
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

		return view( 'accesibilidad.ascensores-products', compact('meta','product'));
	}

}
