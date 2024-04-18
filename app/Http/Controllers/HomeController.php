<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    // Phương thức index được gọi khi truy cập vào route tương ứng
    public function index(){
    // Lấy tất cả các sản phẩm từ model Products
    $products = Products::all();
    
    // Trả về view có tên là 'index' và truyền biến 'products' chứa danh sách sản phẩm
    return view('index', ['products' => $products]);
}
}
