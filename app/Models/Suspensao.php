<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspensao extends Model
{
    use HasFactory;
    protected $table = 'suspensoes';
    protected $fillable = ['carro_id', 'foto', 'descricao'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}
