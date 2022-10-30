<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
    public function order()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
}
