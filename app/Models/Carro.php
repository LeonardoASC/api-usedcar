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

    public function motor()
    {
        return $this->hasMany(Motor::class);
    }
    public function lataria()
    {
        return $this->hasMany(Lataria::class);
    }
    public function pneu()
    {
        return $this->hasMany(Pneu::class);
    }
    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
    public function freio()
    {
        return $this->hasMany(Documento::class);
    }
    public function suspensao()
    {
        return $this->hasMany(Documento::class);
    }
}
