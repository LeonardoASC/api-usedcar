<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = ['user_id', 'carro_id', 'comentario'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }
}
