<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'content',
        'menu_id',
        'price',
        'price_sale',
        'thumb',
        'active'
  
    ];

    public function menu()
    {
        return $this->hasOne(Menus::class, 'id', 'menu_id')
            ->withDefault(['name' => '']);
    }
}
