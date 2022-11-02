<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    public function history_details()
    {
        return $this->hasMany(History::class, 'history_id' ,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    protected $fillable = [
        'title',
        'price',
        'thumbnail',
        'subtotal',
        'userid',
        'quantity',
    ];
}
