<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farol extends Model
{
    use HasFactory;
    protected $table = 'farois';
    protected $fillable = ['carro_id', 'foto', 'descricao'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}
