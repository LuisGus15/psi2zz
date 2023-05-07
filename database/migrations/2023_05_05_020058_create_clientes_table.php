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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('Apellido');
            $table->string('CorreoElectronico');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->unsignedBigInteger('login_ID');
            $table->timestamps();
            $table->foreign('login_ID')->on ('logins')-> references('ID')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
