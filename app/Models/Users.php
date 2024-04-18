<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
    ];
    protected $hidden = ['password'];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
