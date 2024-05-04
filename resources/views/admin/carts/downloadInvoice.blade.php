<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÓA ĐƠN {{ $customer->id }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: DejaVu Sans !important;
            /* Font này để không bị lỗi hiển thị tiếng việt pdf */
        }

        body {
            font-family: Arial, sans-serif;
        }

        .padding {
            padding: 2rem !important;
        }

        .card {
            margin-bottom: 30px;
            border: none;
            -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e6e6f2;
            text-align: center;
            margin-bottom: 30px;
        }

        .card-header a {
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }

        h3 {
            font-size: 20px;
        }

        h5 {
            font-size: 15px;
            line-height: 26px;
            color: #3d405c;
            margin: 0px 0px 15px 0px;
            font-family: 'Circular Std Medium';
        }

        .text-dark {
            color: #3d405c !important;
        }

        .table-responsive {
            margin-bottom: 20px;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: right;
        }

        .fw-bold {
            font-weight: bold;
        }

        .card-footer {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="offset-xl-1 col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <div class="card-header p-4">
                <div class="card-header-p">
                    <a class="pt-2 d-inline-block" data-abc="true">HÓA ĐƠN FPT SHOP</a>
                </div>
                <div>
                    <h3 class="mb-0">Mã vận đơn: {{ now()->format('Ymd') }}{{ Str::random(5) }}</h3>
                    <p class="mb-0">Thời gian: {{ $customer->created_at->format('Y-m-d') }}</p>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">Người gửi:</h5>
                        <h3 class="text-dark mb-1">FPT SHOP</h3>
                        <div>261 - 263 Khánh Hội, P2, Q4, TP. Hồ Chí Minh</div>
                        <div>Email: fptshop@fpt.com</div>
                        <div>Số điện thoại: 1800 6601</div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="mb-3">Người nhận:</h5>
                        <h3 class="text-dark mb-1">{{ $customer->name }}</h3>
                        <div>Địa chỉ: {{ $customer->address }}</div>
                        <div>Email: {{ $customer->email }}</div>
                        <div>Số điện thoại: +84 {{ $customer->phone }}</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên sản phẩm</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-end">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $stt = 1;
                                $subtotal = 0;
                                $total = 0;
                            @endphp
                            @foreach ($carts as $key => $cart)
                                @php
                                    $price = $cart->price * $cart->pty; // Tính giá tiền của sản phẩm hiện tại trong giỏ hàng
                                    $total += $price; // Cập nhật tổng giá trị
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $stt++ }}</td>
                                    <td class="fw-bold">{{ $cart->product->name }}</td>
                                    <td class="text-end">{{ number_format($cart->price, 0, '', '.') }}</td>
                                    <td class="text-center">{{ $cart->pty }}</td>
                                    <td class="text-end">{{ number_format($price, 0, '', '.') }}</td>
                                    <!-- Hiển thị giá tiền của sản phẩm -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p class="mb-0">Thành tiền: {{ number_format($total, 0, '', '.') }} đ</p>
            </div>
        </div>
    </div>
</body>

</html>
