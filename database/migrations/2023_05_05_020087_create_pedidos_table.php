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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('cliente_ID');
            $table->unsignedBigInteger('envio_ID');
            $table->timestamps();
            $table->foreign('cliente_ID')->on ('clientes')-> references('ID')->onDelete('cascade');
            $table->foreign('envio_ID')->on ('envios')-> references('ID')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
