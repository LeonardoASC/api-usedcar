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
            $table->boolean('acessorio')->default(false);
            $table->boolean('arcondicionado')->default(false);
            $table->boolean('assento')->default(false);
            $table->boolean('cambio')->default(false);
            $table->boolean('documento')->default(false);
            $table->boolean('embreagem')->default(false);
            $table->boolean('espelho')->default(false);
            $table->boolean('farol')->default(false);
            $table->boolean('freio')->default(false);
            $table->boolean('lataria')->default(false);
            $table->boolean('motor')->default(false);
            $table->boolean('pedal')->default(false);
            $table->boolean('pneu')->default(false);
            $table->boolean('radio')->default(false);
            $table->boolean('sistema_eletrico')->default(false);
            $table->boolean('suspensao')->default(false);
            $table->boolean('vidro')->default(false);
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
