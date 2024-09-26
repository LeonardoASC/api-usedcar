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
        Schema::create('check_list_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('check_list_id');
            $table->unsignedBigInteger('item_id');
            $table->enum('status',['Bom', 'Regular', 'Ruim', 'A verificar'])->default('A verificar');
            $table->timestamps();

            $table->foreign('check_list_id')->references('id')->on('check_lists')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_list_item');
    }
};
