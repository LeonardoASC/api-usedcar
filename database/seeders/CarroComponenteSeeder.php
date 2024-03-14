<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarroComponente;

class CarroComponenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carroComponentes = [
            [
                'carro_id' => 1,
                // 'componente_id' => 1,
                'descricao' => 'oi'
            ],
            [
                'carro_id' => 2,
                // 'componente_id' => 1,
                'descricao' => 'oi'
            ],

        ];
        foreach ($carroComponentes as $carroComponente) {
            CarroComponente::create($carroComponente);
        }
    }
}
