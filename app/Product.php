<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;

    protected $fillable = ['ruta','imagen_1','imagen_2','imagen_3','categoria_id','titulo','subtitulo','descripcion','especificaciones'];


    public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}
