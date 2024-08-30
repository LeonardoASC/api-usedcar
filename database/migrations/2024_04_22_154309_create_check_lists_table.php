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
        Schema::create('check_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('carro_id');
            $table->string('acessorio');
            $table->string('arcondicionado');
            $table->string('assento');
            $table->string('cambio');
            $table->string('documento');
            $table->string('embreagem');
            $table->string('espelho');
            $table->string('farol');
            $table->string('freio');
            $table->string('lataria');
            $table->string('motor');
            $table->string('pedal');
            $table->string('pneu');
            $table->string('radio');
            $table->string('sistema_eletrico');
            $table->string('suspensao');
            $table->string('vidro');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_lists');
    }
};
