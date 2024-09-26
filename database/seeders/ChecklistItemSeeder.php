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
                'check_list_id' => 1,
                'item_id' => 1,
            ],
            [
                'check_list_id' => 1,
                'item_id' => 2,
            ],
            [
                'check_list_id' => 1,
                'item_id' => 3,
            ],
            [
                'check_list_id' => 1,
                'item_id' => 4,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 5,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 6,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 7,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 8,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 9,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 10,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 11,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 12,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 13,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 14,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 15,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 16,                
            ],
            [
                'check_list_id' => 1,
                'item_id' => 17,                
            ],        
        ];
        foreach ($checklistItems as $checklistItem) {
            ChecklistItem::create($checklistItem);
        }
    }
}
