<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroItens extends Model
{
    use HasFactory;
    protected $fillable = ['carro_id', 'item_id', 'foto', 'descricao'];
}
