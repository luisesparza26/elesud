<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('imagen_1');
            $table->string('imagen_2');
            $table->string('imagen_3');
            $table->integer('categoria_id')->unsigned();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('descripcion');
            $table->text('especificaciones');

            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
