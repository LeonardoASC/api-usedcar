<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedal extends Model
{
    use HasFactory;
    protected $table = 'pedais';
    protected $fillable = ['carro_id', 'foto', 'descricao'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}
