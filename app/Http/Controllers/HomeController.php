<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Fptshop.com.vn | , Laptop, Tablet, Phụ kiện chính hãng giá tốt nhất',
            'products' => Products::paginate(4)
        ]);
    }
}
