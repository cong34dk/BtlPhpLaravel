@extends('main')

@section('content')

    <form class="bg0 p-t-130 p-b-85 center-wrapper" method="post">
        @include('admin.alert')

        @if (count($products) != 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                @php $total = 0; @endphp
                                <table class="table-shopping-cart">
                                    <tbody>
                                        <tr class="table_head">
                                            <th class="column-1">STT</th>
                                            <th class="column-1">Tên sản phẩm</th>
                                            <th class="column-2">Ảnh</th>
                                            <th class="column-3">Giá</th>
                                            <th class="column-4">Số lượng</th>
                                            <th class="column-5">Tổng tiền</th>
                                            <th class="column-6">Xóa</th>
                                        </tr>

                                        @php $stt = 1 @endphp
                                        @foreach ($products as $key => $product)
                                            @php
                                                // Tính giá của sản phẩm, nếu có giá sale thì sử dụng giá sale, ngược lại sử dụng giá gốc
                                                $price =
                                                    $product->price_sale != 0 ? $product->price_sale : $product->price;

                                                // Tính tổng giá của sản phẩm (giá sản phẩm nhân số lượng)
                                                $priceEnd = $price * $carts[$product->id];

                                                // Tính tổng giá trị đơn hàng bằng cách cộng dồn tổng giá của từng sản phẩm
                                                $total += $priceEnd;
                                            @endphp
                                            <tr class="table_row">
                                                <td class="column-2">{{ $stt++ }}</td> <!-- Số thứ tự hàng -->
                                                <td class="column-2">{{ $product->name }}</td> <!-- Tên sản phẩm -->
                                                <td class="column-1">
                                                    <div class="how-itemcart1">
                                                        <img style="width: 80px" src="{{ $product->thumb }}" alt="IMG">
                                                        <!-- Hình ảnh sản phẩm -->
                                                    </div>
                                                </td>
                                                <td class="column-3">{{ number_format($price, 0, '', '.') }}</td>
                                                <!-- Giá của mỗi sản phẩm -->
                                                <td class="column-4">
                                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                        <!-- Input cho phép người dùng chỉnh sửa số lượng sản phẩm -->
                                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </div>
                                                        <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                            name="num_product[{{ $product->id }}]"
                                                            value="{{ $carts[$product->id] }}">
                                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="column-5">{{ number_format($priceEnd, 0, '', '.') }}</td>
                                                <!-- Tổng giá của mỗi sản phẩm -->
                                                <td class="p-r-15">
                                                    <a href="/carts/delete/{{ $product->id }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                    <!-- Link xóa sản phẩm khỏi giỏ hàng -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">

                                <input type="submit" value="Cập nhật giỏ hàng" formaction="/update-cart"
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                @csrf
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Tổng tiền cần thanh toán:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2" style="color: red">
                                        {{ number_format($total, 0, '', '.') }} đ
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">

                                <div class="size-100 p-r-18 p-r-0-sm w-full-ssm">

                                    <div class="p-t-15">
                                        <span class="stext-112 cl8">
                                            Thông Tin Khách Hàng
                                        </span>

                                        <div class="bor8 bg0 m-b-12">
                                            <input id="txtFullName"
                                                class="input-css stext-111 cl8 plh3 size-111 p-lr-15 input-width-60-percent"
                                                type="text" name="name" placeholder="Tên khách Hàng"
                                                oninput="checkFullName()">
                                            <span id="chkFullName" style="color: red; display: none;">*</span>

                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input id="txtPhoneNumber"
                                                class="input-css stext-111 cl8 plh3 size-111 p-lr-15 input-width-60-percent"
                                                type="tel" name="phone" placeholder="Số Điện Thoại"
                                                oninput="checkPhoneNumber()">
                                            <span id="chkPhoneNumber" style="color: red; display: none;">*</span>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input id="txtAddress" class="input-css stext-111 cl8 plh3 size-111 p-lr-15 input-width-60-percent"
                                                type="text" name="address" placeholder="Địa Chỉ Giao Hàng" oninput="checkAddress()">
                                            <span id="chkAddress" style="color: red; display: none;">*</span>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input id="txtEmail"
                                                class="input-css stext-111 cl8 plh3 size-111 p-lr-15 input-width-60-percent"
                                                type="text" name="email" placeholder="Email Liên Hệ"
                                                oninput="checkEmail()">
                                            <span id="chkEmail" style="color: red; display: none;">*</span>

                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <textarea class="cl8 plh3 size-111 p-lr-15 input-width-60-percent" name="content" placeholder="Nội dung"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="submit-btn flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@else
    <div class="text-center" style="margin-top: 10px">
        <h1>Giỏ hàng trống</h1>
    </div>
    @endif


    <script>
        //a)Họ và tên không quá 50 ký tự, không chứa ký tự số
        function checkFullName() {
            var fullNameInput = document.getElementById("txtFullName");
            var fullNameSpan = document.getElementById("chkFullName");

            //Không được để trống
            if (fullNameInput.value === "") {
                fullNameSpan.style.display = "inline";
                fullNameSpan.textContent = "* Không được để trống";
                return false;
            }
            // Họ và tên không quá 50 ký tự, không chứa ký tự số
            // Không có các chữ số từ 0 đến 9, và có độ dài từ 1 đến 50 ký tự.
            var regex = /^[^\d]{1,50}$/;
            if (!regex.test(fullNameInput.value)) {
                fullNameSpan.innerHTML =
                    "* Họ và tên không quá 50 ký tự và không chứa ký tự số";
                fullNameSpan.style.display = "inline";
                return false;
            }
            // Nếu hợp lệ thì ẩn cảnh báo
            fullNameSpan.style.display = "none";
            return true;
        }


        //b) Check Điện thoại 
        function checkPhoneNumber() {
            var phoneNumberInput = document.getElementById("txtPhoneNumber");
            var phoneNumberSpan = document.getElementById("chkPhoneNumber");
            if (phoneNumberInput.value === "") {
                phoneNumberSpan.style.display = "inline";
                phoneNumberSpan.textContent = "* Không được để trống";
                return false
            }

            //kiểm tra xem chuỗi đầu vào có bắt đầu bằng 0 hoặc +84,
            // tiếp theo là một trong các chữ số 3, 5, 7, 8 hoặc 9, 
            //và cuối cùng là 8 chữ số nữa hay không. 
            var regex = /^(0|\+84)[3|5|7|8|9]\d{8}$/;
            if (!regex.test(phoneNumberInput.value)) {
                phoneNumberSpan.style.display = "inline";
                phoneNumberSpan.textContent = "* Số điện thoại không đúng định dạng";
                return false;
            }
            phoneNumberSpan.style.display = "none";
            return true;
        }

        // c)	Email phải chứa @ và dấu chấm
        function checkEmail() {
            var emailInput = document.getElementById("txtEmail");
            var emailSpan = document.getElementById("chkEmail");
            if (emailInput.value === "") {
                emailSpan.style.display = "inline";
                emailSpan.textContent = "* Không được để trống";
                return false
            }

            //Địa chỉ email hợp lệ phải chứa ký tự @ và dấu chấm (.),
            // không có khoảng trắng ở bất kỳ vị trí nào,
            // và phải có ít nhất một ký tự trước và sau ký tự @ và dấu chấm
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regex.test(emailInput.value)) {
                emailSpan.style.display = "inline";
                emailSpan.textContent = "* Email không đúng định dạng";
                return false;
            }
            emailSpan.style.display = "none";
            return true;
        }

        function checkAddress() {
        var addressInput = document.getElementById("txtAddress");
        var addressSpan = document.getElementById("chkAddress");
        if (addressInput.value.trim() === "") {
            addressSpan.style.display = "inline";
            addressSpan.textContent = "* Không được để trống";
            return false;
        } else {
            // Ẩn cảnh báo khi đã nhập dữ liệu
            addressSpan.style.display = "none";
            return true;
        }
    }
    </script>

    <!-- Hàm JS Validate Form khi click submit-btn  -->
    <script>
        const btnSubmit = document.querySelector('.submit-btn')

        function validateForm(event) {
            //Đây là câu lệnh lấy tất cả các phần tử HTML có class là input-css và lưu chúng vào một mảng có tên là inputArray.
            const inputArray = document.querySelectorAll('.input-css')

            //Lấy tất cả phần tử html có id như trên và lưu chúng vào một mảng có tên là errorSpans
            const errorSpans = document.querySelectorAll("#chkFullName, #chkPhoneNumber, #chkEmail, #chkAddress");

            //Đây là câu lệnh khai báo một biến allFilled với giá trị ban đầu là true.
            let allFilled = true;

            //Đây là một vòng lặp forEach để lặp qua từng phần tử trong mảng inputArray
            // Với mỗi phần tử, hàm callback được thực thi với hai tham số là input (phần tử hiện tại)
            // và index (chỉ mục của phần tử hiện tại trong mảng).

            inputArray.forEach((input, index) => {

                //kiểm tra xem giá trị của phần tử đang xét có rỗng hay không
                // (bằng cách sử dụng phương thức trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi).
                if (input.value.trim() === "") {
                    errorSpans[index].style.display = "inline";
                    errorSpans[index].textContent = "* Không được để trống"

                    //Nếu giá trị của phần tử đang xét là rỗng, biến allFilled sẽ được đặt thành false.
                    allFilled = false;
                } else {
                    errorSpans[index].style.display = "none";
                }

            });

            if (allFilled) {
                alert("Đặt hàng thành công!");
            } else {
                event.preventDefault();
                return false;
            }

        }

        btnSubmit.addEventListener('click', (event) => {
            validateForm(event);
        })
    </script>


@endsection
