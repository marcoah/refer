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
        Schema::create('piezas', function (Blueprint $table) {
            $table->id();
            $table->string('NPRO');
            $table->string('DPRO');
            $table->string('TVEH')->nullable();
            $table->string('ZDOC')->nullable();
            $table->string('CPRO')->nullable();
            $table->string('CORT')->nullable();
            $table->string('REEM')->nullable();
            $table->string('UBIC')->nullable();
            $table->integer('STOC')->default(0);
            $table->string('PCUR')->nullable();
            $table->string('PEND')->nullable();
            $table->string('DIFE')->nullable();
            $table->date('FUEN')->nullable();
            $table->date('FUSA')->nullable();
            $table->double('BPCL',18,2)->default(0);
            $table->double('PDUM',18,2)->default(0);
            $table->double('PDUA',18,2)->default(0);
            $table->double('BPNC',18,2)->default(0);
            $table->string('FAM1')->nullable();
            $table->string('FAMI')->nullable();
            $table->string('NPRV')->nullable();
            $table->string('CADU')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piezas');
    }
};
