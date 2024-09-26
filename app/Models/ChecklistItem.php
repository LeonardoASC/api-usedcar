<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
    use HasFactory;
    protected $table = 'check_list_item';
    protected $fillable = ['check_list_id', 'item_id', 'status'];
}
