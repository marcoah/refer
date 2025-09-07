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
        Schema::create('documento_headers', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('numero');
            $table->dateTime('fecha_emision', 0);
            $table->dateTime('fecha_vencimiento', 0)->nullable();
            $table->string('moneda_base');
            $table->string('moneda');
            $table->double('moneda_tasa', 18, 4)->default(0);
            $table->double('subtotal', 18, 2)->default(0);
            $table->double('impuesto_tasa', 18, 2)->default(0);
            $table->double('impuesto', 18, 2)->default(0);
            $table->double('descuento', 18, 2)->default(0);
            $table->double('comision_total', 18, 2)->default(0);
            $table->double('total', 18, 2)->default(0);
            $table->double('envio', 18, 2)->default(0);
            $table->string('status')->nullable();
            $table->text('observaciones')->nullable();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_headers');
    }
};
