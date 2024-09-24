<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarroItem;

class CarroItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carroItem = [
            [
                'carro_id' => 1,
                'item_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 4,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 5,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 6,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 7,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 8,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 9,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'carro_id' => 1,
                'item_id' => 10,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
        ];

        foreach ($carroItem as $carroItens) {
            CarroItem::create($carroItens);
        }
    }
}
