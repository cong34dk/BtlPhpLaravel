@extends('main')

@section('content')
<main class="main-wrapper">
    <section class="section-banner color-main">
        <div class="banner-left">
            {{-- Để xem sau --}}
                {{-- <div class="banner-left-slide">
                    <img class="slide-image" src="{{ $slides}}" alt="">
                    <div class="control">
                        <button class="btn-prev btn" onclick="previousImage()"><i
                                class="fa-sharp fa-solid fa-arrow-left"></i></button>
                        <button class="btn-next btn" onclick="nextImage()"><i
                                class="fa-sharp fa-solid fa-arrow-right"></i></button>
                    </div>
                </div> --}}


            <div class="banner-left-description">
                <div class="banner-left-description-items">
                    iPhone 14 Pro Max giảm đến 8,5 triệu
                </div>
                <div class="banner-left-description-items">
                    Sắm sạc dự phòng giảm ngay đến 50%
                </div>
                <div class="banner-left-description-items">
                    Đặt trước Find N2 Flip ưu đãi 5 triệu
                </div>
                <div class="banner-left-description-items">
                    Sắm Robot Ecovacs N10 ngay
                </div>
                <div class="banner-left-description-items">
                    Realme C55 MỚI giảm đến 300.000đ
                </div>
            </div>
        </div>
        <!-- end banner-left -->
        <div class="banner-right">
            <div class="banner-right-ads">
                <div class="banner-right-ads-1">
                    <img src="/assets/userspage/img/banner-right/1.webp" alt="">
                </div>
                <div class="banner-right-ads-2">
                    <img src="/assets/userspage/img/banner-right/2.webp" alt="">
                </div>
            </div>
            <div class="banner-right-news">
                <div class="banner-right-news-caption">
                    <h3>Tin khuyến mãi</h3>
                    <a href="https://fptshop.com.vn/tin-tuc/tin-khuyen-mai" target="_blank"
                        title="Xem tất cả">Xem
                        tất cả</a>
                </div>
                <article class="news-item">
                    <span class="picture">
                        <img src="/assets/userspage/img/banner-right/news1.webp" alt="">
                    </span>
                    <div class="news-item-description">
                        Thanh toán qua ví Moca giảm ngay 3%
                    </div>
                </article>
                <article class="news-item">
                    <span class="picture">
                        <img src="/assets/userspage/img/banner-right/news2.webp" alt="">
                    </span>
                    <div class="news-item-description">
                        Mua laptop Gigabyte giảm đến 2.3 triệu
                    </div>
                </article>
            </div>
        </div>

    </section>
    <!-- end section-banner -->
    <div class="category-container center-wrapper">
        <table class="category-table">
            <tr>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/phone.png" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Điện thoại
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/laptop.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Laptop
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/pc.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            PC - Lắp ráp
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/mtb.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Máy tính bảng
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/smart.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Thiết bị thông minh
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/houseware.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Gia dụng
                        </div>
                    </a>

                </td>

            </tr>
            <tr>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/apple.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Apple
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/samsung.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Samsung
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/smartwatch.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Đồng hồ thông minh
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/accessories.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Phụ kiện
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/screen.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Màn hình
                        </div>
                    </a>

                </td>
                <td>
                    <a href="" class="cate-item">
                        <picture class="picture">
                            <img src="/assets/userspage/img/category-container/tcdm.webp" alt="">
                        </picture>
                        <div class="cate-item-name f15-bold">
                            Máy cũ
                        </div>
                    </a>

                </td>

            </tr>

        </table>
    </div>
    <!-- end category-container -->
    <div class="banner-sale-1 center-wrapper mt-24 mb-24">
        <a href=""><img src="/assets/userspage/img/banner-sale/laptop.webp" alt=""
                title="Laptop gaming  H7"></a>
    </div>

    <!-- begin hot-promotion__container -->
    <div class="hot-promotion__container center-wrapper mb-24">
        <div class="title">
            <i class="fa-solid fa-fire"></i>
            <h2>Khuyến mãi hot</h2>
        </div>
        <div class="list-products">
            @foreach ($products as $product)
                <div class="list-item">
                    <div class="list-item-img">
                        <a href="/products/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"><img src="{{ $product->thumb }}"
                                alt=""></a>
                        <div class="list-item-label">
                            <span class="badge badge-pay">Trả góp 0%</span>
                            <span class="badge badge-sale">Giảm
                                {{ number_format($product->price - $product->price_sale, 0, ',', '.') }}đ</span>
                        </div>
                    </div>
                    <div class="list-item-info">
                        <h3><a href="/products/{{ $product->id }}" title="{{ $product->name }}"
                                class="list-item-info__name">{{ $product->name }}</a></h3>
                        <div class="list-item-info__price">
                            <div class="list-item-info__price__current-price">
                                {{ number_format(intval($product->price_sale), 0, ',', '.') }}
                                <span>đ</span>
                                <div class="current-price__bar"></div>
                            </div>
                            <div class="list-item-info__price__initial-price">
                                <strike>{{ number_format(intval($product->price), 0, ',', '.') }}
                                    <span>đ</span></strike>
                                <div class="time-remaining">1 ngày 05:00:07</div>
                            </div>
                        </div>
                        <div class="list-item-info__voucher">
                            <!-- Your voucher info here -->
                            <div class="list-item-info__voucher__img">
                                <div class="icon-wrapper">
                                    <img src="./assets/userspage/img/voucher-icon/PMH.webp" alt="">
                                </div>
                                <div class="icon-wrapper">
                                    <img src="./assets/userspage/img/voucher-icon/moca.webp" alt="">
                                </div>
                                <div class="icon-wrapper">
                                    <img src="./assets/userspage/img/voucher-icon/tpbank.webp" alt="">
                                </div>
                                <div class="icon-wrapper">
                                    <img src="./assets/userspage/img/voucher-icon/kredivo.webp" alt="">
                                </div>
                            </div>
                            <div class="list-item-info__voucher__text">{{ $product->description }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
    <!-- end hot-promotion__container -->
    <div class="banner-sale">

    </div>
    <!-- end banner-sale -->
    <div class="product-container">
        <div class="promotion__wrapper">

        </div>
        <div class="featured-phone__wrapper">

        </div>
        <div class="best-selling-laptop__wrapper">

        </div>
        <div class="featured-tablet__wrapper">

        </div>
        <div class="today-suggestion__wrapper">

        </div>
        <div class="discounts__wrapper">

        </div>
        <div class="convenient-service__wrapper center-wrapper">
            <div class="convenient-service__wrapper__title">
                <h3>DỊCH VỤ TIỆN ÍCH</h3>
                <a href="#">Xem tất cả</a>

            </div>
            <div class="service-list">
                <a href="#" class="service-item">
                    <div class="service-item__img">
                        <img src="/assets/userspage/img/convenient-service/ic-water.png" alt="">
                    </div>
                    <div class="service-item__wrap-text">
                        <span class="item-title">
                            <b>Thanh toán tiền nước</b>
                        </span>
                        <p class="item-text">Thanh toán nhanh chóng, tiện lợi</p>
                    </div>
                </a>
                <a href="#" class="service-item">
                    <div class="service-item__img">
                        <img src="/assets/userspage/img/convenient-service/service-item2.png" alt="">
                    </div>
                    <div class="service-item__wrap-text">
                        <span class="item-title">
                            <b>Thanh toán tiền điện</b>
                        </span>
                        <p class="item-text">Thanh toán nhanh chóng, tiện lợi</p>
                    </div>
                </a>
                <a href="#" class="service-item">
                    <div class="service-item__img">
                        <img src="/assets/userspage/img/convenient-service/service-item3.png" alt="">
                    </div>
                    <div class="service-item__wrap-text">
                        <span class="item-title">
                            <b>Thẻ cào điện thoại</b>
                        </span>
                        <p class="item-text">
                            <span>Giảm 2%</span>
                            cho thẻ mệnh giá từ 100.000đ
                        </p>
                    </div>
                </a>
                <a href="#" class="service-item">
                    <div class="service-item__img">
                        <img src="/assets/userspage/img/convenient-service/ic-credit-card.png" alt="">
                    </div>
                    <div class="service-item__wrap-text">
                        <span class="item-title">
                            <b>Thẻ game</b>
                        </span>
                        <p class="item-text">
                            <span>Giảm 2%</span>
                            cho thẻ mệnh giá từ 100.000đ
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- end convenient-service__wrapper -->
        <div class="hot-accessories__wrapper center-wrapper">
            <div class="title">
                PHỤ KIỆN HOT
            </div>
            <div class="hot-accessories__img">
                <table class="category-table__accessories">
                    <tr>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/1.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Phụ kiện nổi bật
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/2.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Bao da ốp lưng
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/3.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Sạc dự phòng
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/4.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Thẻ nhớ
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/5.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Phụ kiện Apple
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/6.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Miếng dán màn hình
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/7.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Tai nghe
                                </div>
                            </a>

                        </td>

                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/8.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Mực in
                                </div>
                            </a>

                        </td>

                    </tr>
                    <tr>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/9.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Loa
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/10.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    USB - Ổ cứng
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/11.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Sạc cáp
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/12.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Chuột
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/13.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Bàn phím
                                </div>
                            </a>

                        </td>
                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/14.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Balo - Túi xách
                                </div>
                            </a>

                        </td>

                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/15.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    TV BOX
                                </div>
                            </a>

                        </td>

                        <td>
                            <a href="" class="cate-item">
                                <picture class="picture">
                                    <img src="/assets/userspage/img/hot-accessories/16.png" alt="">
                                </picture>
                                <div class="cate-item-name f15-bold">
                                    Phụ kiện khác
                                </div>
                            </a>

                        </td>



                    </tr>

                </table>
            </div>
        </div>
    </div>
    <!-- end product-container -->
</main>
<!-- end main-wrapper -->
@endsection