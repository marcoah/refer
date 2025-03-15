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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image')->nullable();
            $table->text('profile_about')->nullable();
            $table->string('profile_company')->nullable();
            $table->string('profile_job')->nullable();
            $table->string('profile_country')->nullable();
            $table->string('profile_address')->nullable();
            $table->string('profile_city')->nullable();
            $table->string('profile_state')->nullable();
            $table->string('profile_zip')->nullable();
            $table->string('profile_phone')->nullable();
            $table->string('profile_email')->nullable();
            $table->string('profile_type')->nullable(); //admin, assistant
            $table->string('profile_twitter')->nullable();
            $table->string('profile_facebook')->nullable();
            $table->string('profile_instagram')->nullable();
            $table->string('profile_linkedin')->nullable();
            $table->date('profile_birthday')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
