<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder para estes dados
        // $table->id();
        // $table->string('marca');
        // $table->string('modelo');
        // $table->string('ano');
        // $table->string('tipo_carroceria');
        // $table->string('numero_portas');
        // $table->timestamps();
        $carros = [
            [
                'marca' => 'Fiat',
                'modelo' => 'Uno',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Palio',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Toro',
                'ano' => '2020',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Strada',
                'ano' => '2020',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '2'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Mobi',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Argo',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Cronos',
                'ano' => '2020',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Doblò',
                'ano' => '2020',
                'tipo_carroceria' => 'Minivan',
                'numero_portas' => '4'
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Grand Siena',
                'ano' => '2020',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4'
            ],

        ];
        foreach ($carros as $carro) {
            Carro::create($carro);
        };
    }
}
