<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Product;

class ProductController extends Controller
{

	public function create(){
		$categories = Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
    	return view('admin.create',compact('categories'));
    }

    public function store(Request $request){
    	Product::create($request->all());
    	
    	return redirect()->route('crear')->with('info','Guardado correctamente');
    }
}
