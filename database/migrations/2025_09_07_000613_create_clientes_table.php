<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('codigo_tributario')->nullable();
            $table->string('tipo')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('contacto')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('direccion1')->nullable();
            $table->string('ciudad1')->nullable();
            $table->string('estado1')->nullable();
            $table->string('postalcode1')->nullable();
            $table->string('pais1')->nullable();
            $table->text('direccion2')->nullable();
            $table->string('ciudad2')->nullable();
            $table->string('estado2')->nullable();
            $table->string('postalcode2')->nullable();
            $table->string('pais2')->nullable();
            $table->text('actividad')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
