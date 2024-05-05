<?php

namespace App\Http\Services;

use App\Jobs\SendMail;
use App\Models\Carts;
use App\Models\Customers;
use App\Models\Products;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartService
{
    // Phương thức này thêm sản phẩm vào giỏ hàng
    public function create($request)
    {
        // Lấy số lượng và ID sản phẩm từ request
        $product_id = (int)$request->input('product_id');

        // Kiểm tra nếu ID sản phẩm không hợp lệ, hiển thị thông báo lỗi
        if ($product_id <= 0) {
            Session::flash('error', 'Sản phẩm không chính xác');
            return false;
        }

        // Lấy giỏ hàng từ session
        $carts = Session::get('carts');

        // Nếu chưa có giỏ hàng, tạo mới và thêm sản phẩm vào
        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => 1
            ]);
            return true;
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $carts[$product_id] = $carts[$product_id] + 1;
            Session::put('carts', $carts);
            return true;
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
        $carts[$product_id] = 1;
        Session::put('carts', $carts);

        return true;
    }

    // Phương thức này lấy thông tin sản phẩm trong giỏ hàng từ session
    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return Products::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();
    }

    // Phương thức này cập nhật giỏ hàng từ request
    public function update($request)
    {
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    // Phương thức này xóa sản phẩm khỏi giỏ hàng
    public function remove($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;
    }

    // Phương thức này thêm thông tin đơn hàng vào CSDL và gửi email thông báo
    public function addCart($request)
    {
        try {
            DB::beginTransaction();

            $carts = Session::get('carts');

            if (is_null($carts))
                return false;

            $customer = Customers::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'content' => $request->input('content')
            ]);

            $this->infoProductCart($carts, $customer->id);

            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');

            #Queue
            SendMail::dispatch($request->input('email'), $customer, $carts)->delay(now()->addSeconds(2));

            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }

    // Phương thức này lấy danh sách khách hàng phân trang
    public function getCustomer()
    {
        return Customers::orderByDesc('id')->paginate(15);
    }

    // Phương thức này lấy thông tin sản phẩm trong giỏ hàng của một khách hàng
    public function getProductForCart($customer)
    {
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'name', 'thumb');
        }])->get();
    }

    // Phương thức này thêm thông tin sản phẩm vào bảng Carts trong CSDL
    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Products::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
            ];
        }

        return Carts::insert($data);
    }

    public function delete($request){
        $customer = Customers::where('id', $request->input('id'))->first();
        if($customer){
            $customer->delete();
            return true;
        }

        return false;
    }
}
