<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lataria;

class LatariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $latarias = [
            [
                'carro_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da latarias',
            ],
            [
                'carro_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da latarias',
            ],
            [
                'carro_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da latarias',
            ],

        ];

        foreach ($latarias as $lataria) {
            Lataria::create($lataria);
        }
    }
}
