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
        Schema::create('documento_details', function (Blueprint $table) {
            $table->id();
            $table->double('cantidad', 18, 4)->default(0);
            $table->string('medida')->nullable();
            $table->string('unidad')->nullable();
            $table->string('moneda_base');
            $table->string('moneda');
            $table->double('moneda_tasa', 18, 4)->default(0);
            $table->double('precio_unitario', 18, 2)->default(0);
            $table->double('subtotal', 18, 2)->default(0);
            $table->double('descuento', 18, 2)->default(0);
            $table->double('impuesto_tasa', 18, 2)->default(0);
            $table->double('impuesto', 18, 2)->default(0);
            $table->double('comision', 18, 2)->default(0);
            $table->double('total', 18, 2)->default(0);
            $table->string('status')->nullable();
            $table->foreignId('documento_id')->constrained('documento_headers')->onDelete('cascade');
            $table->foreignId('pieza_id')->constrained('piezas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_details');
    }
};
