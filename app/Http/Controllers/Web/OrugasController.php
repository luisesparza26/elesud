<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

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

}
