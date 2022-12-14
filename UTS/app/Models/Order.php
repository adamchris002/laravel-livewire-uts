<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function order_details()
    {
        return $this->hasMany(OrderDetailr::class, 'order_id' ,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    protected $fillable = [
        'title',
        'price',
        'thumbnail',
        'userid',
        'quantity',
    ];
}
