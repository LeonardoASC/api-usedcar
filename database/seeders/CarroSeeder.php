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

        $carros = [
            [
                'marca' => 'Todos',
                'modelo' => 'Todos',
                'ano' => '0',
                'tipo_carroceria' => 'Todos',
                'numero_portas' => '2 e 4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Palio',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 11.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Toro',
                'ano' => '2020',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '4',
                'km_litro' => 13.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Strada',
                'ano' => '2020',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '2',
                'km_litro' => 14.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Mobi',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Argo',
                'ano' => '2020',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Cronos',
                'ano' => '2020',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'km_litro' => 11.14,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Doblò',
                'ano' => '2020',
                'tipo_carroceria' => 'Minivan',
                'numero_portas' => '4',
                'km_litro' => 10.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Grand Siena',
                'ano' => '2020',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
            ],

        ];
        foreach ($carros as $carro) {
            Carro::create($carro);
        };
    }
}
