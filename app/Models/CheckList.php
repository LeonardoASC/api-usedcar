<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class CheckList extends Model
{
    use HasFactory;
    protected $table = 'check_lists';
    protected $fillable = ['user_id','carro_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'check_list_item', 'check_list_id', 'item_id')
                    ->withPivot('status')
                    ->withTimestamps();
    }

}
