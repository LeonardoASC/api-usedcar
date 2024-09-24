<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroItem extends Model
{
    use HasFactory;
    protected $table = 'carro_itens';
    protected $fillable = ['carro_id', 'item_id', 'foto', 'descricao'];

}
