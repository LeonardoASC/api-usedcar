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
                'marca' => 'Fiat',
                'modelo' => 'Palio',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 11.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Toro',
                'ano' => '2020',
                'cilindrada' => '1.8',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '4',
                'km_litro' => 13.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Strada',
                'ano' => '2020',
                'cilindrada' => '1.4',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '2',
                'km_litro' => 14.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Mobi',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Argo',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Cronos',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'km_litro' => 11.14,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Doblò',
                'ano' => '2020',
                'cilindrada' => '1.8',
                'tipo_carroceria' => 'Minivan',
                'numero_portas' => '4',
                'km_litro' => 10.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Grand Siena',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Uno',
                'ano' => '2020',
                'cilindrada' => '2.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'km_litro' => 12.34,
                'tabela_fipe' => 35000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://w7.pngwing.com/pngs/584/988/png-transparent-fiat-palio-car-fiat-punto-fiat-strada-fiat-compact-car-car-subcompact-car.png',
            ],

        ];
        foreach ($carros as $carro) {
            Carro::create($carro);
        };
    }
}
