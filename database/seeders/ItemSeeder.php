<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            ['nome' => 'Lataria'],
            ['nome' => 'Pneu'],
            ['nome' => 'Motor'],
            ['nome' => 'Suspensão'],
            ['nome' => 'Freios'],
            ['nome' => 'Faróis'],
            ['nome' => 'Lanternas'],
            ['nome' => 'Vidros'],
            ['nome' => 'Estofamento'],
            ['nome' => 'Painel'],
            ['nome' => 'Cinto de segurança'],
            ['nome' => 'Extintor'],
            ['nome' => 'Triângulo'],
            ['nome' => 'Macaco'],
            ['nome' => 'Chave de roda'],
            ['nome' => 'Estepe'],
            ['nome' => 'Documentação'],
            ['nome' => 'Chave reserva'],
            ['nome' => 'Alarme'],
            ['nome' => 'Travas elétricas'],
            ['nome' => 'Vidros elétricos'],
            ['nome' => 'Retrovisores elétricos'],
            ['nome' => 'Ar condicionado'],
            ['nome' => 'Direção hidráulica'],
            ['nome' => 'Direção elétrica'],
            ['nome' => 'Direção mecânica'],
            ['nome' => 'Câmbio automático'],
            ['nome' => 'Câmbio manual'],
            ['nome' => 'Câmbio automatizado'],
            ['nome' => 'Bancos de couro'],
            ['nome' => 'Bancos de tecido'],
            
            
            // 'Motor',
            // 'Suspensão',
            // 'Freios',
            // 'Faróis',
            // 'Lanternas',
            // 'Vidros',
            // 'Estofamento',
            // 'Painel',
            // 'Cinto de segurança',
            // 'Extintor',
            // 'Triângulo',
            // 'Macaco',
            // 'Chave de roda',
            // 'Estepe',
            // 'Documentação',
            // 'Chave reserva',
            // 'Alarme',
            // 'Travas elétricas',
            // 'Vidros elétricos',
            // 'Retrovisores elétricos',
            // 'Ar condicionado',
            // 'Direção hidráulica',
            // 'Direção elétrica',
            // 'Direção mecânica',
            // 'Câmbio automático',
            // 'Câmbio manual',
            // 'Câmbio automatizado',
            // 'Bancos de couro',
            // 'Bancos de tecido',
        ];
        foreach ($item as $itens) {
            Item::create($itens);
        }
        
    }
}
