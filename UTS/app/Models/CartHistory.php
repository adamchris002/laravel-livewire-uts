<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartHistory extends Model
{
    use HasFactory;
    public function cart()
    {
        return $this->belongsTo(cart::class, 'order_id','id')
    }

    protected $fillable = [
        'name',
        'thumbnail',
        'order_id',
        'price',

    ];
}
