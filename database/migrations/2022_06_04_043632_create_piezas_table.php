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
            $table->string('DPRO')->nullable();
            $table->string('TVEH')->nullable();
            $table->string('ZDOC')->nullable();
            $table->string('CPRO')->nullable();
            $table->string('CORT')->nullable();
            $table->string('REEM')->nullable();
            $table->string('UBIC')->nullable();
            $table->string('STOC')->nullable();
            $table->string('PCUR')->nullable();
            $table->string('PEND')->nullable();
            $table->string('DIFE')->nullable();
            $table->date('FUEN')->nullable();
            $table->date('FUSA')->nullable();
            $table->string('BPCL')->nullable();
            $table->string('PDUM')->nullable();
            $table->string('PDUA')->nullable();
            $table->string('BPNC')->nullable();
            $table->string('FAM1')->nullable();
            $table->string('FAMI')->nullable();
            $table->string('NPRV')->nullable();
            $table->string('CADU')->nullable();
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
