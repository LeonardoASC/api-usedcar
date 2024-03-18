<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Freio;

class FreioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freios = [
            [
                'carro_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da freios',
            ],
            [
                'carro_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da freios',
            ],
            [
                'carro_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da freios',
            ],

        ];

        foreach ($freios as $freio) {
            Freio::create($freio);
        }
    }
}
