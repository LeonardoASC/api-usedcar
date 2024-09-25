<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CheckList;

class CheckListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $checklists = [
            [
                'user_id' => 1,
                'carro_id' => 1,
                'status' => false
            ],
            [
                'user_id' => 2,
                'carro_id' => 2,
                'status' => true
            ], 
            ];
            foreach ($checklists as $checklist) {
                CheckList::create($checklist);
            }
    }
}
