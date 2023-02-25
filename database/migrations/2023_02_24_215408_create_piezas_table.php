<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
            $table->decimal('BPCL');
            $table->decimal('PDUM');
            $table->decimal('PDUA');
            $table->decimal('BPNC');
            $table->string('FAM1');
            $table->string('FAMI');
            $table->string('NPRV');
            $table->string('CADU');
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
        Schema::dropIfExists('piezas');
    }
}
