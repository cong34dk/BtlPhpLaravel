@php
    $cartsInCart = app(\App\Http\Services\CartService::class)->getProductForCart($customer);
@endphp

<h1>FPT SHOP</h1>
<p>
    <b>Bạn đã đặt hàng thành công tại cửa hàng của chúng tôi</b>
</p>
<h4>Thông tin đơn hàng của bạn</h4>
<h4>Mã vận đơn: {{ now()->format('Ymd') }}{{ Str::random(5) }}</h4>
<h4>Thời gian: {{ $customer->created_at->format('Y-m-d') }}</h4>

<h4>Chi tiết sản phẩm</h4>

<table border="1" cellspacing="0" cellpadding="10" width="400">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        @php
            $stt = 1;
            $subtotal = 0;
            $total = 0;
        @endphp

        @foreach ($cartsInCart as $cart)
            @php
                $price = $cart->price * $cart->pty; // Tính giá tiền của sản phẩm hiện tại trong giỏ hàng
                $total += $price; // Cập nhật tổng giá trị
            @endphp
            <tr>
                <td>{{ $stt++ }}</td>
                <td>{{ $cart->product->name }}</td>
                <td>{{ number_format($cart->price, 0, '', '.') }}</td>
                <td>{{ $cart->pty }}</td>
                <td>{{ number_format($price, 0, '', '.') }}</td>
                <!-- Hiển thị giá tiền của sản phẩm -->
            </tr>
        @endforeach
    </tbody>
</table>

<h4>Tổng tiền cần thanh toán là: {{ number_format($total, 0, '', '.') }} đ</h4>
