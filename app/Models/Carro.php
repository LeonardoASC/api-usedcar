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
        return $this->hasMany(Freio::class);
    }
    public function suspensao()
    {
        return $this->hasMany(Suspensao::class);
    }
    public function embreagem()
    {
        return $this->hasMany(Embreagem::class);
    }
    public function sistema_eletrico()
    {
        return $this->hasMany(SistemaEletrico::class);
    }
    public function pedal()
    {
        return $this->hasMany(Pedal::class);
    }
    public function cambio()
    {
        return $this->hasMany(Cambio::class);
    }
    public function vidro()
    {
        return $this->hasMany(Vidro::class);
    }
    public function acessorio()
    {
        return $this->hasMany(Vidro::class);
    }
    public function ar_condicionado()
    {
        return $this->hasMany(Vidro::class);
    }
    public function assento()
    {
        return $this->hasMany(Vidro::class);
    }
    public function radio()
    {
        return $this->hasMany(Vidro::class);
    }
    public function farol()
    {
        return $this->hasMany(Vidro::class);
    }
    public function espelho()
    {
        return $this->hasMany(Vidro::class);
    }
}
