@extends('main')
@section('content')
<main class="main-wrapper center-wrapper">
    <div class="link-wrapper">
        <p>Trang chủ / {{ $product->menu->name }}</p>
    </div>
    <div class="iPhone-title">
        <h1 class="iPhone-name">
            {{$product->name}}
        </h1>
        <div class="iPhone-rating">
            <ul class="iPhone-rating__star">
                <li><span class="icon-star"><i class="fa-solid fa-star"></i></span></li>
                <li><span class="icon-star"><i class="fa-solid fa-star"></i></span></li>
                <li><span class="icon-star"><i class="fa-solid fa-star"></i></span></li>
                <li><span class="icon-star"><i class="fa-solid fa-star"></i></span></li>
                <li><span class="icon-star"><i class="fa-solid fa-star"></i></span></li>

            </ul>
            <div class="iPhone-rating__link">
                <a id="re-rate" class="re-link">102 đánh giá</a>
                <span>|</span>
                <a class="re-link">181 Hỏi &amp; đáp</a>
                <a href="">So sánh</a>
            </div>
        </div>
    </div>
    <!-- end iPhone-title -->

    <div class="iphone-info__wrapper">
        <div class="iphone-info__left">
            <div class="iphone-info__slider">
                <img id="image" src="{{$product->thumb}}" alt="">
                <div class="control">
                    <button class="btn-prev btn" onclick="previousImage()"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button>
                    <button class="btn-next btn" onclick="nextImage()"><i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="iphone-info__slider__feature">
                <a href="" class="iphone-info__slider__feature__item">
                    <span><i class="fa-sharp fa-solid fa-image"></i></span>
                    <p>Xem thêm 17 ảnh</p>
                </a>

                <a href="" class="iphone-info__slider__feature__item">
                    <span><i class="fa-brands fa-youtube"></i></span>
                    <p>Video trên tay</p>
                </a>

                <a href="" class="iphone-info__slider__feature__item">
                    <span><i class="fa-solid fa-box"></i></span>
                    <p>Trong hộp có gì</p>
                </a>
            </div>
            <!-- end iphone-info__slider__feature -->

            <div class="iphone-param">
                <ul>
                    <li data-info="Màn hình"><span class="icon-mobile"><i class="fa-solid fa-mobile"></i></span>
                        <p>6.1 inch, Super Retina XDR, 2556 x 1179 Pixels</p>
                    </li>
                    <li data-info="Camera sau"><span class="icon-cam"><i
                                class="fa-solid fa-camera-retro"></i></span>
                        <p>48.0 MP + 12.0 MP </p>
                    </li>
                    <li data-info="Camera Selfie"><span class="icon-front-camera"><i
                                class="fa-sharp fa-solid fa-camera-rotate"></i></span>
                        <p>12.0 MP </p>
                    </li>
                    <li data-info="CPU"><span class="icon-cpu"><i class="fa-solid fa-microchip"></i></span>
                        <p>Apple A16 Bionic</p>
                    </li>
                    <li data-info="Bộ nhớ trong"><span class="icon-hdd-black"><i
                                class="fa-regular fa-hard-drive"></i></span>
                        <p>128 GB</p>
                    </li>
                </ul>
                <a class="re-link">Xem chi tiết thông số kỹ thuật</a>
            </div>
            <div class="l-pd-policy">
                <div class="l-pd-policy__item"><span class="icon-Combined-Shape"><i class="fa-solid fa-certificate"></i></span>
                    <p>Hàng chính hãng - Bảo hành 12 Tháng</p>
                </div>
                <div class="l-pd-policy__item"><span class="icon-fast-shipping"><i class="fa-sharp fa-solid fa-truck"></i></span>
                    <p>Giao hàng toàn quốc</p>
                </div>
            </div>
        </div>
        <!-- end iphone-info__left -->
        <div class="iphone-info__right">
            <div class="iphone-price">
                <div class="iphone-price-left">
                    <div class="iphone-price-main">
                        {{ number_format($product->price_sale, 0, ',', '.') }}đ
                    </div>
                    <div class="iphone-price-sub">
                        <strike>
                            {{ number_format($product->price, 0, ',', '.') }}đ
                        </strike>
                    </div>
                </div>
                <div class="iphone-price-right">
                    <span>Trả góp chỉ từ&nbsp;</span>
                    <span><strong>1.895.500₫</strong>/tháng</span>
                </div>
            </div>

            <div class="rewardPoint">
                <div class="rewardPoint-btn">
                    <span>F</span>
                    <strong>+6.297 điểm thưởng dự kiến</strong>
                </div>
            </div>

            <div class="iphone-select">
                <a href="#" class="iphone-select__item">
                    <div class="radio">
                        <input type="radio" value="radio" name="radio" checked>128GB
                    </div>
                    <p>25.290.000<span>đ</span></p>
                </a>

                <a href="#" class="iphone-select__item">
                    <div class="radio">
                        <input type="radio" value="radio" name="radio">256GB
                    </div>
                    <p>27.990.000<span>đ</span></p>
                </a>

                <a href="#" class="iphone-select__item">
                    <div class="radio">
                        <input type="radio" value="radio" name="radio">512GB
                    </div>
                    <p>33.490.000<span>đ</span></p>
                </a>

                <a href="#" class="iphone-select__item">
                    <div class="radio">
                        <input type="radio" value="radio" name="radio">1TB
                    </div>
                    <p>34.990.000<span>đ</span></p>
                </a>
            </div>
            <!-- end iphone-select -->
            <div class="iphone-select-color">
                <div class="iphone-select-color__item">
                    <div class="iphone-select-color__item-img  iphone-select-color__item-img__active">
                        <img src="/assets/userspage/img/iPhone14Pro/tim.webp" width="38" height="38" alt="Tím">
                    </div>
                    <p title="Tím">Tím</p>
                </div>

                <div class="iphone-select-color__item">
                    <div class="iphone-select-color__item-img">
                        <img src="/assets/userspage/img/iPhone14Pro/vang.webp" width="38" height="38" alt="Vàng">
                    </div>
                    <p title="Vàng">Vàng</p>
                </div>

                <div class="iphone-select-color__item">
                    <div class="iphone-select-color__item-img">
                        <img src="/assets/userspage/img/iPhone14Pro/den.webp" width="38" height="38" alt="Đen">
                    </div>
                    <p title="Đen">Đen</p>
                </div>

                <div class="iphone-select-color__item">
                    <div class="iphone-select-color__item-img">
                        <img src="/assets/userspage/img/iPhone14Pro/bac.webp" width="38" height="38" alt="Bạc">
                    </div>
                    <p title="Bạc">Bạc</p>
                </div>
            </div>
            <!-- end iphone-select-color -->
            <div class="iphone-BoxPromotion">
                <div class="title">Chọn 1 trong 2 khuyến mãi sau</div>
                <ul class="iphone-BoxPromotion__list">
                    <li>
                        <div class="radio">
                            <input type="radio" id="promotion1_1" name="promotion1" value="1" checked>
                            <label for="promotion1_1">Giảm ngay 7.000.000đ áp dụng đến 06/04&nbsp;</label>
                        </div>
                    </li>

                    <li>
                        <div class="radio">
                            <input type="radio" id="promotion1_1" name="promotion1" value="1">
                            <label for="promotion1_1">Giảm ngay 2.000.000đ áp dụng đến 06/04&nbsp;+&nbsp;Trả góp
                                0%</label>
                        </div>
                    </li>
                </ul>
                <div class="title-more">
                    <span>Ưu đãi thêm</span>
                </div>
                <div class="iphone-BoxPromotion__list--more">
                    <li>
                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                        <span>Giảm đến 30% hệ sinh thái Apple </span>
                        <a href="#" target="_blank" class="re-link">Xem chi tiết</a>
                    </li>

                    <li>
                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                        <span>Thu cũ đổi mới trợ giá ngay 15% đến 3 triệu (SmartExchange)</span>
                        <a href="#" target="_blank" class="re-link">Xem chi tiết</a>
                    </li>

                    <li>
                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                        <span>Sim MobiFone Super Data 1T giá chỉ 199.000đ khi mua kèm máy</span>

                    </li>

                    <li>
                        <a href="" class="re-link">Xem thêm 1 ưu đãi khác
                            <span class="ic-down"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                    </li>
                </div>
                <!-- end iphone-BoxPromotion__list--more -->
                <div class="iphone-boxFeature">
                    <ul>
                        <li>
                            <label for="" class="img">
                                <img src="/assets/userspage/img/iPhone14Pro/vnpay.webp" alt="" width="48" height="48">
                                <div class="img-tick">
                                    <div class="checkbox">
                                        <input name="promotion3" class="form-check-input" type="checkbox"
                                            id="check2" data-value="21" data2-value="Khuyến mại sinh nhật VNPAY-QR."
                                            value="81213">
                                    </div>
                                </div>
                            </label>
                            <div class="iphone-boxFeature__text mr15">
                                <p>Khuyến mại sinh nhật VNPAY-QR.</p>
                                <div>
                                    <span>Nhập mã VNPAY16 giảm 1% tối đa 160.000đ khi Thanh toán qua VNPAY-QR
                                    </span>
                                    <a href="" target="_blank" class="re-link">Xem chi tiết</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <label for="" class="img">
                                <img src="/assets/userspage/img/iPhone14Pro/tpbank.webp" alt="" width="48" height="48">
                                <div class="img-tick">
                                    <div class="checkbox">
                                        <input name="promotion3" class="form-check-input" type="checkbox"
                                            id="check2" data-value="21" data2-value="Khuyến mại sinh nhật VNPAY-QR."
                                            value="81213">
                                    </div>
                                </div>
                            </label>
                            <div class="iphone-boxFeature__text">
                                <p>EVO</p>
                                <div>
                                    <span>Giảm ngay 20% tối đa 1.000.000đ khi mở thẻ đồng thương hiệu TPBANK EVO
                                    </span>
                                    <a href="" target="_blank" class="re-link">Xem chi tiết</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="" class="re-link">Xem thêm 1 ưu đãi thanh toán khác
                                <span class="ic-down"><i class="fa-solid fa-chevron-down"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end iphone-boxFeature -->

                <div class="control-buy-btn">
                    <form action="/add-cart" method="post">
                        @csrf
                        <button type="submit" class="btn" id="btn-buy-now">
                            <strong>MUA NGAY</strong>
                            <p>Giao hàng miễn phí hoặc nhận tại shop</p>
                        </button>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                    </form>

                    <button class="btn btn-blue" id="btn-installment">
                        <strong>TRẢ GÓP 0%</strong>
                        <p>Duyệt nhanh qua điện thoại</p>
                    </button>

                    <button class="btn btn-blue" id="btn-installment-card">
                        <strong>TRẢ GÓP QUA THẺ</strong>
                        <p>Visa, Master Card, JCB, AMEX</p>
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection