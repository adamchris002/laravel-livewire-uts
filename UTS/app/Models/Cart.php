<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function cartHistorys()
    {
        return $this->hasMany(cartHistory::class, 'order_id','id')
    }

    protected $fillable = [
        'name',
        'thumbnail',
        'price',

    ];
}
