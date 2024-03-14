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
        Schema::create('componentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->foreign('carro_id')->references('id')->on('carros');

            $table->string('documento');
            $table->string('placa');
            $table->string('quilometragem');
            $table->string('combustivel');
            $table->string('chassi');
            $table->string('motor');
            $table->string('freio');
            $table->string('suspensao');
            $table->string('transmissao');
            $table->string('direcao');
            $table->string('vidro');
            $table->string('Lataria');
            $table->string('farol');
            $table->string('lanterna');
            $table->string('pintura');
            $table->string('estofamento');
            $table->string('painel');
            $table->string('teto');
            $table->string('porta');
            $table->string('chave');
            $table->string('alarme');
            $table->string('trava');
            $table->string('pedais');
            $table->string('embreagem');
            $table->string('freio_mao');
            $table->string('cambio');
            $table->string('pneu');
            $table->string('rodas');
            $table->string('bateria');
            $table->string('alternador');
            $table->string('partida');
            $table->string('arrefecimento');
            $table->string('ignicao');
            $table->string('injecao');
            $table->string('filtro');
            $table->string('oleo');
            $table->string('correia');
            $table->string('velas');
            $table->string('cabos');
            $table->string('radiador');
            $table->string('compressor');
            $table->string('condensador');
            $table->string('evaporador');
            $table->string('ventoinha');
            $table->string('valvula');
            $table->string('mangueira');
            $table->string('filtro_ar');
            $table->string('filtro_combustivel');
            $table->string('filtro_oleo');
            $table->string('filtro_cabine');
            $table->string('filtro_transmissao');
            $table->string('filtro_arrefecimento');
            $table->string('filtro_direcao');
            $table->string('filtro_ar_condicionado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentes');
    }
};
