<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_apellido');
             $table->text('direccion');
             $table->integer('telefono');
             $table->integer('cantidad');
             $table->unsignedBigInteger('id_producto');
             
             $table->foreign('id_producto')->references('id')->on('productoos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidoos');
    }
}
