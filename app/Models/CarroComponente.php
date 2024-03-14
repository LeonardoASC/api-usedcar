<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroComponente extends Model
{
    use HasFactory;
    // protected $table = 'carro_componente';

   protected $fillable = [
       'carro_id',
    //    'componente_id',
       'descricao',
   ];
}
