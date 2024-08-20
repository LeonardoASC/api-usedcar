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
                'cor' => 'Branco',
                'numero_portas' => '4',
                'km_litro' => 11.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlT-H12X-ylSxM5hBUxR7mXLTgSsRoYreA9g&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Toro',
                'ano' => '2020',
                'cilindrada' => '1.8',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 13.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI-i1gVhSnp9kReRgLE_km2vEi40s0af9uMQ&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Strada',
                'ano' => '2020',
                'cilindrada' => '1.4',
                'tipo_carroceria' => 'Picape',
                'numero_portas' => '2',
                'cor' => 'Preto',
                'km_litro' => 14.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQzVguPnzph12qMH9vtPu5NqcsLE3UQ_aBaw&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Mobi',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoIYbPPJ7VD113SRYSMI_wEyeMP5gx-D-RNBGbqQ9z49lccai7IGr3xhyQoMkThmr1MfY&usqp=CAU',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Argo',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi_cOct920Sv1JCcbbHuT_5Te54XY5R7MPUQ&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Cronos',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 11.14,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5p1xfsYShgYpLSVjOZ5nJASnRdBiGOWT_yQ&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Doblò',
                'ano' => '2020',
                'cilindrada' => '1.8',
                'tipo_carroceria' => 'Minivan',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 10.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR58AWvh2rn2ftmRYmlasfBQDYVA1qcqTrOZg&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Grand Siena',
                'ano' => '2020',
                'cilindrada' => '1.0',
                'tipo_carroceria' => 'Sedan',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 12.34,
                'tabela_fipe' => 45000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdWvVuPU8I4DrfDIzPnSjKynn9p6YJ8bEeuA&s',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Uno',
                'ano' => '2020',
                'cilindrada' => '2.0',
                'tipo_carroceria' => 'Hatch',
                'numero_portas' => '4',
                'cor' => 'Preto',
                'km_litro' => 12.34,
                'tabela_fipe' => 35000.00,
                'media_avaliacao' => 4.5,
                'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6i2QErgZ4YCd67gmXXoFkc8PV0YJvZiIqaA&s',
            ],

        ];
        foreach ($carros as $carro) {
            Carro::create($carro);
        };
    }
}
