<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'itens';
    protected $fillable = ['name'];

    public function Carro()
    {
        return $this->belongsToMany(Carro::class, 'carro_itens', 'item_id', 'carro_id');
    }
}
