<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger('reportes_ID');
            $table->unsignedBigInteger('pedido_ID');
            $table->timestamps();
            $table->foreign('reportes_ID')->on ('reportes')-> references('ID')->onDelete('cascade');
            $table->foreign('pedido_ID')->on ('pedidos')-> references('ID')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodo_de_pagos');
    }
};
