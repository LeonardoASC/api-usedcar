<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
 
    public function carros()
    {
        return $this->belongsToMany(Carro::class, 'carro_items')
            ->withPivot('foto', 'descricao')
            ->withTimestamps();
    }

    public function checklists()
    {
        return $this->belongsToMany(Checklist::class);
    }

}
