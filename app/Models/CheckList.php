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
        'user_id',
        'carro_id',
        'acessorio', 'arcondicionado', 'assento', 'cambio', 'documento',
        'embreagem', 'espelho', 'farol', 'freio', 'lataria', 'motor',
        'pedal', 'pneu', 'radio', 'sistema_eletrico', 'suspensao', 'vidro'
    ];


    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
