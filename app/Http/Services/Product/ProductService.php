<?php


namespace App\Http\Services\Product;


use App\Models\Products;

class ProductService
{

    public function show($id)
    {
        return Products::where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->firstOrFail();
    }

}
