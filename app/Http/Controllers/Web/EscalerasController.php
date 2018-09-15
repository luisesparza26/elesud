<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EscalerasController extends Controller
{
    public function escaleras_electricas(){
    	$meta = [
			"url" => "www.elesud.com/escaleras-electricas",
			"type" => "website",
			"title" => "Elesud - Escaleras",
			"description" => "#",
			"image" => "#",
		];

		return view( 'escaleras-electricas', [ 'meta' => $meta ] );
	}

	public function escaleras_mecanicas(){
    	$meta = [
			"url" => "www.elesud.com/escaleras-mecanicas",
			"type" => "website",
			"title" => "Elesud - Escaleras",
			"description" => "#",
			"image" => "#",
		];

		return view( 'escaleras-mecanicas', [ 'meta' => $meta ] );
	}

	public function escaleras_publicas(){
    	$meta = [
			"url" => "www.elesud.com/escaleras-publicas",
			"type" => "website",
			"title" => "Elesud - Escaleras",
			"description" => "#",
			"image" => "#",
		];

		return view( 'escaleras-publicas', [ 'meta' => $meta ] );
	}

}
