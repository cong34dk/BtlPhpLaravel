<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function orderItems()
    {
        return $this->hasMany(Order_Items::class);
    }

    public function orderInfo()
    {
        return $this->hasOne(Order_Infos::class);
    }
}