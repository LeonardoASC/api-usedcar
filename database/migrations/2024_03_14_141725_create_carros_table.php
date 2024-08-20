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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('ano');
            $table->string('cilindrada');
            $table->string('tipo_carroceria');
            $table->string('numero_portas');
            $table->string('cor');
            $table->float('km_litro', 4, 2)->default(0);
            $table->float('tabela_fipe', 8, 2)->default(0);
            $table->float('media_avaliacao', 3, 2)->default(0);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
