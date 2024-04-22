<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class CheckList extends Model
{
    use HasFactory;
    protected $fillable = [
        'carro_id',
        'motor', 'lataria', 'pneu', 'documento', 'freio',
        'suspensao', 'embreagem', 'pedal', 'cambio', 'vidro', 'sistema_eletrico'
    ];

    protected $casts = [
        'motor' => 'boolean',
        'lataria' => 'boolean',
        'pneu' => 'boolean',
        'documento' => 'boolean',
        'freio' => 'boolean',
        'suspensao' => 'boolean',
        'embreagem' => 'boolean',
        'pedal' => 'boolean',
        'cambio' => 'boolean',
        'vidro' => 'boolean',
        'sistema_eletrico' => 'boolean',
    ];

    public function carro()
    {
        return $this->belongsTo('App\Models\Carro', 'carro_id');
    }
}
