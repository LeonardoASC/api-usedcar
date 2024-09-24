<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroItem extends Model
{
    protected $fillable = ['carro_id', 'item_id', 'foto', 'descricao'];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}