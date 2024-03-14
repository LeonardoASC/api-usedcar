<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'tipo_carroceria',
        'numero_portas'
    ];

    public function componentes()
    {
        return $this->belongsToMany(Componente::class, 'carro_componente');
    }
}
