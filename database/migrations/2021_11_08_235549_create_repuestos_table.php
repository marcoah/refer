<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repuestos', function (Blueprint $table) {
            $table->id();
            $table->string('npro');
            $table->string('dpro');
            $table->string('tveh')->nullable();
            $table->string('cort')->nullable();
            $table->string('reem')->nullable();
            $table->string('ubic')->nullable();
            $table->bigInteger('stoc');
            $table->bigInteger('pcur');
            $table->bigInteger('pend');
            $table->bigInteger('dife');
            $table->date('fuen');
            $table->date('fusa');
            $table->string('zdoc')->nullable();
            $table->double('bpcl', 8, 2);
            $table->double('pdum', 8, 2);
            $table->double('pdua', 8, 2);
            $table->double('bpnc', 8, 2);
            $table->string('cpro')->nullable();
            $table->string('fam1')->nullable();
            $table->string('fami')->nullable();
            $table->string('nprv')->nullable();
            $table->string('cadu')->nullable();
            $table->double('vtpr', 8, 2);
            $table->bigInteger('vt00');
            $table->bigInteger('vt01');
            $table->bigInteger('vt02');
            $table->bigInteger('vt03');
            $table->bigInteger('vt04');
            $table->bigInteger('vt05');
            $table->bigInteger('vt06');
            $table->bigInteger('vt07');
            $table->bigInteger('vt08');
            $table->bigInteger('vt09');
            $table->bigInteger('vt10');
            $table->bigInteger('vt11');
            $table->bigInteger('vt12');
            $table->bigInteger('vt13');
            $table->bigInteger('vt14');
            $table->bigInteger('vt15');
            $table->bigInteger('vt16');
            $table->bigInteger('vt17');
            $table->bigInteger('vt18');
            $table->bigInteger('vt19');
            $table->bigInteger('vt20');
            $table->bigInteger('vt21');
            $table->bigInteger('vt22');
            $table->bigInteger('vt23');
            $table->bigInteger('vt24');
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
        Schema::dropIfExists('repuestos');
    }
}
