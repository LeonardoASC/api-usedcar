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
        Schema::create('vidros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->string('foto');
            $table->string('descricao');
            $table->foreign('carro_id')->references('id')->on('carros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vidros');
    }
};
