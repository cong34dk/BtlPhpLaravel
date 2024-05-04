<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fptshop.com.vn | , Laptop, Tablet, Phụ kiện chính hãng giá tốt nhất</title>
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/userspage/css/main.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header-top">
            <img src="/assets/userspage/img/header/clipse.svg" alt="Thông tin">
            <p>
                <strong>Tablet Samsung giá chỉ từ 3.690.000Đ</strong>
            </p>
            <a href="https://fptshop.com.vn/samsung/may-tinh-bang" class="header-top__btn" title="Mua ngay">Mua ngay</a>
        </div>
        <!-- end header-top -->
        <!-- menu -->
        <div class="menu">
            <div class="center-wrapper">
                <a href="index.html" class="menu-logo">
                    <img src="/assets/userspage/img/header/logo.png" alt="">
                </a>
                <form action="" class="form-search">
                    <input class="search-input" type="text" id="key" name=""
                        placeholder="Nhập tên , máy tính, phụ kiện... cần tìm" autocomplete="off" maxlength="50">
                    <button type="submit" aria-label="Tìm kiếm" class="search-btn" title="Tìm kiếm"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul class="menu-right">
                    <li>
                        <a href="#">
                            <div class="icon-wrapper"><i class="fa-solid fa-file"></i></div>
                            <span>Thông tin hay</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="icon-wrapper"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                            <span>Thanh toán &amp; tiện ích</span>
                        </a>
                    </li>
                    <li>
                        <a href="./dangnhap.html" target="_parent">
                            <div class="icon-wrapper"><i class="fa-solid fa-user"></i></div>
                            <span>Tài khoản của tôi</span>
                        </a>
                    </li>
                    <li>
                        <a href="./giohang.html">
                            <div class="icon-wrapper"><i class="fa-solid fa-cart-shopping"></i></div>
                            <span>Giỏ hàng</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- end menu -->
        <!-- navbar -->
        <div class="navbar">
            <div class="center-wrapper">
                <ul>
                    <li><a href="./iPhone14Pro.html">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <span> ĐIỆN THOẠI </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <span> LAPTOP </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-tablet"></i>
                            </div>
                            <span> MÁY TÍNH BẢNG </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-brands fa-apple"></i>
                            </div>
                            <span>APPLE </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-desktop"></i>
                            </div>
                            <span> PC- LINH KIỆN </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                            <span> PHỤ KIỆN </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-rotate-right"></i>
                            </div>
                            <span> MÁY CŨ GIÁ RẺ </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <span>HÀNG GIA DỤNG </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-sim-card"></i>
                            </div>
                            <span> SIM & THẺ </span>
                        </a></li>
                    <li><a href="">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-tag"></i>
                                <span> KHUYẾN MÃI </span>
                        </a></li>
                </ul>
            </div>

        </div>
        <!-- end navbar -->
    </header>
    <!-- end header -->
    <main class="main-wrapper">
        <section class="section-banner color-main">
            <div class="banner-left">
                    <div class="banner-left-slide">
                        <img class="slide-image" src="{{ $slides}}" alt="">
                        <div class="control">
                            <button class="btn-prev btn" onclick="previousImage()"><i
                                    class="fa-sharp fa-solid fa-arrow-left"></i></button>
                            <button class="btn-next btn" onclick="nextImage()"><i
                                    class="fa-sharp fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>


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

        <div class="hot-promotion__container center-wrapper mb-24">
            <div class="title">
                <i class="fa-solid fa-fire"></i>
                <h2>Khuyến mãi hot</h2>
            </div>
            <div class="list-products">
                @foreach ($products as $product)
                    <div class="list-item">
                        <div class="list-item-img">
                            <a href="/products/{{ $product->id }}"><img src="{{ $product->image }}"
                                    alt=""></a>
                            <div class="list-item-label">
                                <span class="badge badge-pay">Trả góp 0%</span>
                                <span class="badge badge-sale">Giảm
                                    {{ number_format($product->discount, 0, ',', '.') }}đ</span>
                            </div>
                        </div>
                        <div class="list-item-info">
                            <h3><a href="/products/{{ $product->id }}" title="{{ $product->name }}"
                                    class="list-item-info__name">{{ $product->name }}</a></h3>
                            <div class="list-item-info__price">
                                <div class="list-item-info__price__current-price">
                                    {{ number_format(intval($product->price - $product->discount), 0, ',', '.') }}
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
    <!-- footer -->
    <footer class="footer">
        <div class="footer-top center-wrapper">
            <div class="footer-top__wrapper">
                <div class="footer-top__col footer-top__col1">
                    <ul class="footer-top__col1__info">
                        <li><a target="_blank" href="#">Giới thiệu về công ty</a></li>
                        <li><a target="_blank" href="#">Chính sách bảo mật</a></li>
                        <li><a target="_blank" href="#">Quy chế hoạt động</a></li>
                        <li><a target="_blank" href="#">Kiểm tra hóa đơn điện tử</a></li>
                        <li><a target="_blank" href="#">Tra cứu thông tin bảo hành</a></li>
                        <li><a target="_blank" href="#">Câu hỏi thường gặp mua hàng</a></li>
                    </ul>
                    <div class="footer-top__col1__wrap-img">
                        <div class="footer-top__col1__item1">
                            <img src="/assets/userspage/img/footer/ft-img1.png" alt="">
                        </div>
                        <div class="footer-top__col1__item2">
                            <img src="/assets/userspage/img/footer/ft-img2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer-top__col footer-top__col2">
                    <ul class="footer-top__col2__info">
                        <li><a target="_blank" href="#">Tin tuyển dụng</a></li>
                        <li><a target="_blank" href="#">Tin khuyến mãi</a></li>
                        <li><a target="_blank" href="#">Hướng dẫn mua online</a></li>
                        <li><a target="_blank" href="#">Hướng dẫn mua trả góp</a></li>
                        <li><a target="_blank" href="#">Chính sách trả góp</a></li>
                    </ul>
                    <div class="footer-top__col2__wrap-img">
                        <p>Chứng nhận:</p>
                        <div class="footer-top__col2__item">
                            <img src="/assets/userspage/img/footer/ft-img3.png" alt="">
                        </div>
                        <div class="footer-top__col2__item">
                            <img src="/assets/userspage/img/footer/ft-img4.png" alt="">
                        </div>
                        <div class="footer-top__col2__item">
                            <img src="/assets/userspage/img/footer/ft-img5.png" alt="">
                        </div>
                    </div>
                </div>
                <ul class="footer-top__col1__info">
                    <li><a target="_blank" href="#">Hệ thống cửa hàng</a></li>
                    <li><a target="_blank" href="#">Chính sách đổi trả</a></li>
                    <li><a target="_blank" href="#">Hệ thống bảo hành</a></li>
                    <li><a target="_blank" href="#">Kiểm tra hóa đơn điện tử</a></li>
                    <li><a target="_blank" href="#">Kiểm tra hàng Apple chính hãng</a></li>
                </ul>

                <div class="footer-top__col footer-top__col3">
                    <ul class="footer-top__col3__info">
                        <li>
                            <p class="fs-ftrtit">Tư vấn mua hàng (Miễn phí)</p>
                            <a href="tel:18006601" title="">1800 6601<span>(Nhánh 1)</span></a>
                        </li>
                        <li class="desktop-only">
                            <p class="fs-ftrtit">Hỗ trợ kỹ thuật</p>
                            <a href="tel:18006601" title=""> 1800 6601 <span>(Nhánh 2)</span> </a>
                        </li>
                        <li>
                            <p class="fs-ftrtit">Góp ý, khiếu nại (8h00 - 22h00)</p>
                            <a href="tel:18006616" title="">1800 6616</a>
                        </li>
                    </ul>
                    <div class="fs-ftr1">
                        <p class="fs-ftrtit">Hỗ trợ thanh toán:</p>
                    </div>
                    <div class="ft-wrap">
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img6.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img7.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img8.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img9.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img10.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img11.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img12.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img13.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img14.png">
                        </div>
                        <div class="ft-item">
                            <img class="ft-pay" src="/assets/userspage/img/footer/ft-img15.png">
                        </div>
                    </div>
                </div>
                <div class="fs-ftcol fs-ftcol1">
                    <div class="fs-ftr3">
                        <p class="ft-tit">Website cùng tập đoàn:</p>
                        <p class="fs-ftrtitlg">Cửa hàng uỷ quyền bởi Apple:</p>
                        <ul class="fs-frgbhg">
                            <li>
                                <a rel="nofollow noopener" class="fs-ftr-fstudio fs-ftr-fstudio__img__wrapper"
                                    href="https://fstudiobyfpt.com.vn">
                                    <div class="ft-item">
                                        <img class="fstudio" src="/assets/userspage/img/footer/ft-img16.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="fs-ftrtitlg">Trung tâm bảo hành uỷ quyền Apple:</p>
                        <ul class="fs-frgbhg">
                            <li>
                                <a rel="nofollow noopener" class="fs-ftr-fcare fs-ftr-fstudio__img__wrapper"
                                    href="https://fstudiobyfpt.com.vn/fcare">
                                    <div class="ft-item">
                                        <img class="fcare" src="/assets/userspage/img/footer/ft-img17.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="fs-ftrtitlg">Chuỗi nhà thuốc:</p>
                        <ul class="fs-frgbhg">
                            <li>
                                <a rel="nofollow noopener" class="fs-ftr-ilc fs-ftr-fstudio__img__wrapper"
                                    href="https://nhathuoclongchau.com.vn">
                                    <div class="ft-item">
                                        <img class="lc" src="/assets/userspage/img/footer/ft-img18.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-bottom">
            <p>
                © 2007 - 2023 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT / Địa chỉ: 261 - 263 Khánh Hội, P2, Q4, TP. Hồ Chí
                Minh / GPĐKKD số 0311609355 do Sở KHĐT TP.HCM cấp ngày 08/03/2012.
                GP số 47/GP-TTĐT do sở TTTT TP HCM cấp ngày 02/07/2018. Điện thoại: <a>(028) 7302 3456</a>. Email:
                <a>fptshop@fpt.com.vn</a>. Chịu trách nhiệm nội dung: Nguyễn Trịnh Nhật Linh.
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Integration BotChat DialogFlow -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="BotChat-FPTSHOP" agent-id="acfaf76d-c766-4daf-831f-9bb3ab08d046"
        language-code="vi"></df-messenger>

    <!-- link Javascript -->
    <script src="{{ asset('assets/userspage/JS/main.js') }}"></script>

    <script>
        var slides = <?php echo json_encode($slides); ?>;
        var currentSlideIndex = 0;
        var imageElements = document.querySelectorAll('.slide-image');
    
        function showSlide(index) {
            if (index < 0) {
                index = slides.length - 1;
            } else if (index >= slides.length) {
                index = 0;
            }
            for (var i = 0; i < imageElements.length; i++) {
                imageElements[i].src = slides[index].image;
            }
            currentSlideIndex = index;
        }
    
        function nextImage() {
            currentSlideIndex++;
            showSlide(currentSlideIndex);
        }
    
        function previousImage() {
            currentSlideIndex--;
            showSlide(currentSlideIndex);
        }
    
        // Tự động chuyển slide sau mỗi 3 giây
        setInterval(function() {
            nextImage();
        }, 3000);
    </script>
    
</body>

</html>
