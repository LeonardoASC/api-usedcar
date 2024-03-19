<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedal;

class PedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedais = [
            [
                'carro_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do pedais',
            ],
            [
                'carro_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do pedais',
            ],
            [
                'carro_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do pedais',
            ],

        ];

        foreach ($pedais as $pedal) {
            Pedal::create($pedal);
        }
    }
}
