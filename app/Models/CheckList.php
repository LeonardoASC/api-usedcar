<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class CheckList extends Model
{
    use HasFactory;
    protected $table = 'check_lists';
    protected $fillable = [
        'carro_id',
        'acessorio', 'arcondicionado', 'assento', 'cambio', 'documento',
        'embreagem', 'espelho', 'farol', 'freio', 'lataria', 'motor',
        'pedal', 'pneu', 'radio', 'sistema_eletrico', 'suspensao', 'vidro'
    ];

    // protected $casts = [
    //     'acessorio' => 'boolean',
    //     'arcondicionado' => 'boolean',
    //     'assento' => 'boolean',
    //     'cambio' => 'boolean',
    //     'documento' => 'boolean',
    //     'embreagem' => 'boolean',
    //     'espelho' => 'boolean',
    //     'farol' => 'boolean',
    //     'freio' => 'boolean',
    //     'lataria' => 'boolean',
    //     'motor' => 'boolean',
    //     'pedal' => 'boolean',
    //     'pneu' => 'boolean',
    //     'radio' => 'boolean',
    //     'sistema_eletrico' => 'boolean',
    //     'suspensao' => 'boolean',
    //     'vidro' => 'boolean'
    // ];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }
}
