<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            [
                'carro_id' => 1,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da documentos',
            ],
            [
                'carro_id' => 2,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da documentos',
            ],
            [
                'carro_id' => 3,
                'foto' => 'https://via.placeholder.com/150',
                'descricao' => 'Descrição da documentos',
            ],

        ];

        foreach ($documentos as $documento) {
            Documento::create($documento);
        }
    }
}
