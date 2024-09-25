<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChecklistItem;

class ChecklistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $checklistItems = [
            [
                'checklist_id' => 1,
                'item_id' => 1,
            ],
        ];
        foreach ($checklistItems as $checklistItem) {
            ChecklistItem::create($checklistItem);
        }
    }
}
