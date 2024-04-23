<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $table = 'carros';
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
    
    // Partes do carro
    public function acessorio()
    {
        return $this->hasMany(Acessorio::class);
    }
    public function arcondicionado()
    {
        return $this->hasMany(ArCondicionado::class);
    }
    public function assento()
    {
        return $this->hasMany(Assento::class);
    }
    public function cambio()
    {
        return $this->hasMany(Cambio::class);
    }
    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
    public function embreagem()
    {
        return $this->hasMany(Embreagem::class);
    }
    public function espelho()
    {
        return $this->hasMany(Espelho::class);
    }
    public function farol()
    {
        return $this->hasMany(Farol::class);
    }
    public function freio()
    {
        return $this->hasMany(Freio::class);
    }
    public function lataria()
    {
        return $this->hasMany(Lataria::class);
    }
    public function motor()
    {
        return $this->hasMany(Motor::class);
    }
    public function pedal()
    {
        return $this->hasMany(Pedal::class);
    }
    public function pneu()
    {
        return $this->hasMany(Pneu::class);
    }
    public function radio()
    {
        return $this->hasMany(Radio::class);
    }
    public function sistema_eletrico()
    {
        return $this->hasMany(SistemaEletrico::class);
    }
    public function suspensao()
    {
        return $this->hasMany(Suspensao::class);
    }
    public function vidro()
    {
        return $this->hasMany(Vidro::class);
    }
}
