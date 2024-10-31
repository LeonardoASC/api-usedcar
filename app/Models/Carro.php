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
        'numero_portas',
        'km_litro',
        'tabela_fipe',
        'media_avaliacao',
    ];

    public function checklists()
    {
        return $this->hasMany(CheckList::class, 'carro_id');
    }

    public function itens()
    {
        return $this->belongsToMany(Item::class, 'carro_items')
                    ->withPivot('foto', 'descricao')
                    ->withTimestamps();
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'carro_id');
    }


}
