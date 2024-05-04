<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Barryvdh\DomPDF\Facade\Pdf;

class CartController extends Controller
{
    protected $cart;
    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        return view('admin.carts.customer', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'customers' => $this->cart->getCustomer()
        ]);
    }

    public function show(Customers $customer)
    {
        $carts = $this->cart->getProductForCart($customer);

        return view('admin.carts.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
        ]);
    }

    public function downloadInvoice(Customers $customer){
        $carts = $this->cart->getProductForCart($customer);

        $pdf = Pdf::loadView('admin.carts.downloadInvoice', compact('customer', 'carts'));

        return $pdf->stream($customer->id .' Hóa Đơn.pdf');
    }

    public function destroy(Request $request){
        $result = $this->cart->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
               'message' => 'Xóa thành công đơn hàng'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }

}
