<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assento;

class AssentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assentos = [
            [
                'carro_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do assentos',
            ],
            [
                'carro_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do assentos',
            ],
            [
                'carro_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição do assentos',
            ],

        ];

        foreach ($assentos as $assento) {
            Assento::create($assento);
        }
    }
}
