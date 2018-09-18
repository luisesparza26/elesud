<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AscensoresController extends Controller
{
	    public function ascensores(){
    	$meta = [
			"url" => "www.elesud.com/ascensores",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores', [ 'meta' => $meta ] );
	}
	
    public function ascensores_alta_proteccion(){
    	$meta = [
			"url" => "www.elesud.com/ascensores-alta-proteccion",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-con-alta-proteccion-ip', [ 'meta' => $meta ] );
	}

	public function ascensores_especiales(){
    	$meta = [
			"url" => "www.elesud.com/ascensores-especiales",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-especiales', [ 'meta' => $meta ] );
	}

	public function ascensores_industriales(){
    	$meta = [
			"url" => "www.elesud.com/ascensores-industriales",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-industriales', [ 'meta' => $meta ] );
	}

	public function ascensores_para_explosivos(){
    	$meta = [
			"url" => "www.elesud.com/ascensores-para-explosivos",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-para-explosivos', [ 'meta' => $meta ] );
	}

	public function ascensores_escaleras(){
    	$meta = [
			"url" => "www.elesud.com/ascensores-y-escaleras",
			"type" => "website",
			"title" => "Elesud - Ascensores",
			"description" => "#",
			"image" => "#",
		];

		return view( 'ascensores-y-escaleras', [ 'meta' => $meta ] );
	}

}
