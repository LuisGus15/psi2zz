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
        Schema::create('detalle_carritos', function (Blueprint $table) {
            $table->id();
            $table->string('Cantidad');
            $table->decimal('precioUnitario');
            $table->unsignedBigInteger('producto_ID');
            $table->unsignedBigInteger('carrito_ID');
            $table->timestamps();
            $table->foreign('producto_ID')->on ('productos')-> references('ID')->onDelete('cascade');
            $table->foreign('carrito_ID')->on ('carritos')-> references('ID')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_carritos');
    }
};
