<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $carroItens = [
            [
                'carro_id' => 1,
                'item_id' => 1,
                'foto' => 'lataria.jpg',
                'descricao' => 'Amassado na porta do motorista'
            ],
            [
                'carro_id' => 1,
                'item_id' => 2,
                'foto' => 'pneus.jpg',
                'descricao' => 'Pneu dianteiro direito careca'
            ],
            [
                'carro_id' => 1,
                'item_id' => 3,
                'foto' => 'motor.jpg',
                'descricao' => 'Motor com vazamento de óleo'
            ],
            [
                'carro_id' => 1,
                'item_id' => 4,
                'foto' => 'suspensao.jpg',
                'descricao' => 'Barulho na suspensão dianteira'
            ],
            [
                'carro_id' => 1,
                'item_id' => 5,
                'foto' => 'freios.jpg',
                'descricao' => 'Pastilhas de freio gastas'
            ],
            [
                'carro_id' => 1,
                'item_id' => 6,
                'foto' => 'farois.jpg',
                'descricao' => 'Farol direito queimado'
            ],
            [
                'carro_id' => 1,
                'item_id' => 7,
                'foto' => 'lanternas.jpg',
                'descricao' => 'Lanterna traseira direita quebrada'
            ],
            [
                'carro_id' => 1,
                'item_id' => 8,
                'foto' => 'vidros.jpg',
                'descricao' => 'Vidro traseiro trincado'
            ],
            [
                'carro_id' => 1,
                'item_id' => 9,
                'foto' => 'estofamento.jpg',
                'descricao' => 'Banco do motorista rasgado'
            ],
            [
                'carro_id' => 1,
                'item_id' => 10,
                'foto' => 'painel.jpg',
                'descricao' => 'Painel com rachadura'
            ],
        ];

        foreach ($carroItens as $carroItens) {
            CarroItens::create($carroItens);
        }

    }
}
