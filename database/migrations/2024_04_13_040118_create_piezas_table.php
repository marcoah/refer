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
            $table->string('TVEH');
            $table->string('ZDOC');
            $table->string('CPRO');
            $table->string('CORT');
            $table->string('REEM');
            $table->string('UBIC');
            $table->integer('STOC');
            $table->string('PCUR');
            $table->string('PEND');
            $table->string('DIFE');
            $table->date('FUEN');
            $table->date('FUSA');
            $table->double('BPCL',18,2);
            $table->double('PDUM',18,2);
            $table->double('PDUA',18,2);
            $table->double('BPNC',18,2);
            $table->string('FAM1');
            $table->string('FAMI');
            $table->string('NPRV');
            $table->string('CADU');
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
