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
        ];
        foreach ($item as $itens) {
            Item::create($itens);
        }

    }
}
