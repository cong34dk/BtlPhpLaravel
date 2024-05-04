<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'menu_id', 'id');
    }
}
