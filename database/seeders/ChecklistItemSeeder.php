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
            [
                'checklist_id' => 1,
                'item_id' => 2,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 3,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 4,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 5,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 6,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 7,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 8,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 9,
            ],
            [
                'checklist_id' => 1,
                'item_id' => 10,
            ],
           
        ];
        foreach ($checklistItems as $checklistItem) {
            ChecklistItem::create($checklistItem);
        }
    }
}
