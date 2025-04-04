<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Giỏ hàng của bạn - Antony Petshop</title>
        <link rel="stylesheet" href="./assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/empty-cart.css" />
        <!-- Embed Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Sen:wght@700&display=swap"
            rel="stylesheet"
        />
        <!-- Embed CDN -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="57x57"
            href="./assets/favicon/apple-icon-57x57.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="./assets/favicon/apple-icon-60x60.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="72x72"
            href="./assets/favicon/apple-icon-72x72.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="./assets/favicon/apple-icon-76x76.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="./assets/favicon/apple-icon-114x114.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="./assets/favicon/apple-icon-120x120.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="./assets/favicon/apple-icon-144x144.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="./assets/favicon/apple-icon-152x152.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="./assets/favicon/apple-icon-180x180.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="./assets/favicon/android-icon-192x192.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="./assets/favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="./assets/favicon/favicon-96x96.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="./assets/favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="./assets/favicon/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta
            name="msapplication-TileImage"
            content="assets/favicon/ms-icon-144x144.png"
        />
        <meta name="theme-color" content="#ffffff" />
        <!-- AOS animation -->
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="header-topbar">
                <p class="topbar__tittle">Flash Sales Hôm Nay!</p>
                <a href="#!" class="topbar__btn"> Đặt hàng ngay! </a>
            </div>
            <div class="container">
                <div class="header__body">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="/index.html">
                            <img
                                src="./assets/img/mainlogo.png"
                                alt=""
                                class="logo"
                            />
                        </a>
                    </div>
                    <!-- Search -->
                    <div class="header__search">
                        <div class="search-form">
                            <form action="">
                                <input
                                    type="text"
                                    class="search-form__input"
                                    placeholder="Bạn cần tìm..."
                                />
                            </form>
                            <div class="search-form__btn">
                                <i
                                    class="fa-solid fa-magnifying-glass search-form__icon"
                                ></i>
                            </div>

                            <!-- Search Result -->
                            <div class="search-recommend">
                                <div class="search-recommend__heading">
                                    <div class="search-recommend__top-row">
                                        Kết quả tìm kiếm cho
                                        <strong
                                            style="color: red; margin-left: 4px"
                                            >thức ăn</strong
                                        >
                                        <div class="search-recommend__icon">
                                            <i class="fa-solid fa-list"></i>
                                            <i
                                                class="fa-solid fa-table-cells"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="search-recommend__tittle">
                                        Hiển thị kết quả theo:
                                    </div>
                                </div>
                                <div class="search-list">
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/catfood-3.jpg"
                                            alt="
                                        Thức ăn sấy khô cho mèo thịt thật
                                        CATIDEA Fairy Chef Freeze Dried Raw 6in1
                                        Thương hiệu CATIDEA
                                    "
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Thức ăn sấy khô cho mèo thịt
                                                thật CATIDEA Fairy Chef Freeze
                                                Dried Raw 6in1 Thương hiệu
                                                CATIDEA
                                            </span>
                                            <span class="search-item__price"
                                                >155.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/dogfood-4.jpg"
                                            alt="
                                        Pate cho chó nước sốt vị thịt bò
                                        PEDIGREE Pouch Beef Thương hiệu PEDIGREE
                                    "
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Pate cho chó nước sốt vị thịt bò
                                                PEDIGREE Pouch Beef Thương hiệu
                                                PEDIGREE
                                            </span>
                                            <span class="search-item__price"
                                                >25.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/catfood-6.jpg"
                                            alt="
                                        Bánh thưởng cho mèo vị bạc hà MEOW FUN
                                        Peppermint Cod Thương hiệu BUDGE
                                    "
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Bánh thưởng cho mèo vị bạc hà
                                                MEOW FUN Peppermint Cod Thương
                                                hiệu BUDGE
                                            </span>
                                            <span class="search-item__price"
                                                >135.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/catfood-1.jpg"
                                            alt="
                                        Thức ăn cho mèo Anh lông ngắn CATIDEA
                                        Fairy Chef British Shorthair Thương hiệu
                                        CATIDEA
                                    "
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Thức ăn cho mèo Anh lông ngắn
                                                CATIDEA Fairy Chef British
                                                Shorthair Thương hiệu CATIDEA
                                            </span>
                                            <span class="search-item__price"
                                                >315.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/dogfood-1.jpg"
                                            alt="
                                        Thức ăn cho chó con PURINA PRO PLAN
                                        Small &amp; Mini Puppy Thương hiệu PURINA
                                        PRO PLAN
                                    "
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Thức ăn cho chó con PURINA PRO
                                                PLAN Small &amp; Mini Puppy
                                                Thương hiệu PURINA PRO PLAN
                                            </span>
                                            <span class="search-item__price"
                                                >135.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/dogfood-10.jpg"
                                            alt="Thức ăn cho chó MKB Breed & Train Nutrition Mass Gainer"
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Thức ăn cho chó MKB Breed &
                                                Train Nutrition Mass Gainer
                                            </span>
                                            <span class="search-item__price"
                                                >240.000đ</span
                                            >
                                        </div>
                                    </a>
                                    <a
                                        href="./assets/link/detail.html"
                                        class="search-item"
                                    >
                                        <img
                                            src="./assets/img/dogfood-8.jpg"
                                            alt="Thức ăn cho chó MKB Breed & Train Nutrition Mass Gainer"
                                            class="search-item__img"
                                        />
                                        <div class="search-item__info">
                                            <span
                                                class="search-item__name line-clamp"
                                            >
                                                Thức ăn cho chó MKB Breed &
                                                Train Nutrition Mass Gainer
                                            </span>
                                            <span class="search-item__price"
                                                >190.000đ</span
                                            >
                                        </div>
                                    </a>
                                </div>
                                <div class="search-recommend__bottom">
                                    <a href="./assets/link/pageProduct.html">
                                        Xem thêm kết quả có chứa
                                        <strong
                                            style="color: red; margin-left: 3px"
                                            >thức ăn</strong
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header CTA -->
                    <div class="heahder-right">
                        <!-- Hotline -->
                        <div class="header__call">
                            <div class="header-call__icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="header-call__box">
                                <p class="header-call__tittle">Gọi ngay</p>
                                <strong class="header-call__phonenum"
                                    >091 256 8989</strong
                                >
                            </div>
                        </div>
                        <!-- Sign Up & Cart  -->
                        <div class="header__cta">
                            <div class="header__account">
                                <i class="fa-solid fa-user header-user"></i>
                                <p class="user-title">Account</p>
                                <div class="account-btn">
                                    <a
                                        href="./assets/link/login.html"
                                        class="signin-btn btn"
                                    >
                                        <span>Đăng nhập</span>
                                    </a>
                                    <a
                                        href="./assets/link/create_account.html"
                                        class="create-btn btn"
                                    >
                                        <span>Đăng ký</span>
                                    </a>
                                </div>
                            </div>
                            <div class="header__cart">
                                <i
                                    class="fa-solid fa-cart-shopping header-cart"
                                ></i>
                                <div class="cart-box">
                                    <div class="cart-box__tittle">
                                        <h4>giỏ hàng</h4>
                                    </div>
                                    <div class="cart-box__empty">
                                        <i
                                            class="fa-solid fa-cart-shopping header-cart"
                                        ></i>
                                        <p>Hiện chưa có sản phẩm</p>
                                    </div>
                                    <div
                                        class="cart-box__total"
                                        style="padding: 0 16px"
                                    >
                                        <p class="cart-box__total--text">
                                            tổng tiền:
                                        </p>
                                        <p class="cart-box__total--price">0đ</p>
                                    </div>
                                    <button class="cart-box__btn">
                                        XEM GIỎ HÀNG
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu Dropdown -->
        <div class="menu-catagory">
            <ul class="menu__list">
                <!-- For Dog -->
                <li class="menu-item dog-cata">
                    <h3>SẢN PHẨM CHO CHÓ</h3>
                    <i class="fa-solid fa-chevron-down item-down"></i>
                    <ul class="dog-cata__dropdown">
                        <!-- Food -->
                        <li class="dropdown__item food-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Thức ăn hạt
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="food-type__list detail-list">
                                    <li class="food-type__item detail-item">
                                        <a href="#!">Chó dưới 1 tuổi</a>
                                    </li>
                                    <li class="food-type__item detail-item">
                                        <a href="#!">Chó trên 1 tuổi </a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Pate | Snack | Súp thưởng -->
                        <li class="dropdown__item supplies-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Pate | Snack | Súp thưởng
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="supplies-type__list detail-list">
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Pate</a>
                                    </li>
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Snack</a>
                                    </li>
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Súp thưởng</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Chăm sóc sức khỏe -->
                        <li class="dropdown__item treats-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Chăm sóc sức khỏe
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="treats-type__list detail-list">
                                    <li class="treats-type__item detail-item">
                                        <a href="#!"> Sữa bột | Sữa tươi </a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Bổ sung dinh dưỡng</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Tai | Mắt | Răng miệng</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Ve rận | Giun sán</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Nấm | Viêm da</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Tiêu hóa | Tiết niệu</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Sữa tắm | Dầu gội -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Vệ sinh
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="health-type__list detail-list">
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Tã lót | Tã quần</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Khay vệ sinh</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Phụ kiện vệ sinh</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!"
                                            >Xịt hướng dẫn | Chống cắn phá</a
                                        >
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!">
                                            Khử mùi | Sát khuẩn | Nước hoa</a
                                        >
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- For Cat -->
                <li class="menu-item cat-cata">
                    <h3>SẢN PHẨM CHO MÈO</h3>
                    <i class="fa-solid fa-chevron-down item-down"></i>
                    <ul class="cat-cata__dropdown">
                        <!-- Food -->
                        <li class="dropdown__item food-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Thức ăn hạt
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="food-type__list detail-list">
                                    <li class="food-type__item detail-item">
                                        <a href="#!">Mèo dưới 1 tuổi</a>
                                    </li>
                                    <li class="food-type__item detail-item">
                                        <a href="#!">Mèo trên 1 tuổi</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Pate | Snack | Súp thưởng -->
                        <li class="dropdown__item supplies-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Pate | Snack | Súp thưởng
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="supplies-type__list detail-list">
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Pate</a>
                                    </li>
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Snack</a>
                                    </li>
                                    <li class="supplies-type__item detail-item">
                                        <a href="#!">Súp thưởng</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Chăm sóc sức khỏe -->
                        <li class="dropdown__item treats-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Chăm sóc sức khỏe
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="treats-type__list detail-list">
                                    <li class="treats-type__item detail-item">
                                        <a href="#!"> Sữa bột | Sữa tươi</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Bổ sung dinh dưỡng</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Tai | Mắt | Răng miệng</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Ve rận | Giun sán</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Nấm | Viêm da</a>
                                    </li>
                                    <li class="treats-type__item detail-item">
                                        <a href="#!">Tiêu hóa | Tiết niệu</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Sữa tắm | Dầu gội -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Vệ sinh
                                <i
                                    class="fa-solid fa-chevron-right item-right"
                                ></i>
                                <ul class="health-type__list detail-list">
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Tã lót | Tã quần</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Khay vệ sinh</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!">Phụ kiện vệ sinh</a>
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!"
                                            >Xịt hướng dẫn | Chống cắn phá</a
                                        >
                                    </li>
                                    <li class="health-type__item detail-item">
                                        <a href="#!"
                                            >Khử mùi | Sát khuẩn | Nước hoa</a
                                        >
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Promotion -->
                <li class="menu-item">
                    <h3>KHUYẾN MÃI</h3>
                </li>

                <!-- Service -->
                <li class="menu-item service-cata">
                    <h3>DỊCH VỤ</h3>
                    <i class="fa-solid fa-chevron-down item-down"></i>
                    <ul class="service-cata__dropdown">
                        <!-- Services -->
                        <li class="dropdown__item services-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Dịch Vụ
                                <ul class="services-type__list detail-list">
                                    <li class="services-type__item detail-item">
                                        <a href="#!">Khách sạn mèo</a>
                                    </li>
                                    <li class="services-type__item detail-item">
                                        <a href="#!">Spa - Grooming</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Delivery -->
                        <li class="dropdown__item delivery-dropdown__item">
                            <a href="./assets/link/resultCata.html">
                                Phương Thức Giao Hàng
                                <ul class="delivery-type__list detail-list">
                                    <li class="delivery-type__item detail-item">
                                        <a href="#!">Giao hàng lặp lại</a>
                                    </li>
                                    <li class="delivery-type__item detail-item">
                                        <a href="#!">Nhận hàng tại lề đường</a>
                                    </li>
                                    <li class="delivery-type__item detail-item">
                                        <a href="#!">Giao hàng trong ngày</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Support -->
                <li class="menu-item">
                    <h3>HỖ TRỢ</h3>
                </li>
            </ul>
        </div>

        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="/index.html">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="">/ Giỏ hàng (0)</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Cart Empty -->
        <section class="cart-empty">
            <div class="container">
                <img
                    src="./assets/img/empty-cart.webp"
                    alt="Empty cart"
                    class="cart-empty__img"
                />
                <h3 class="cart-empty__tittle">"Hổng" có gì trong giỏ hết</h3>
                <p class="cart-empty__desc">
                    Về trang cửa hàng để chọn mua sản phẩm bạn nhé!!
                </p>
                <a href="./assets/link/pageProduct.html" class="cart-empty__btn"
                    >Mua sắm ngay</a
                >
            </div>
        </section>

        <!-- You'll like -->
        <section class="you-like">
            <div class="container">
                <h3
                    class="you-like__tittle"
                    data-aos="fade-left"
                    data-aos-duration="1500"
                >
                    Có thể bạn sẽ thích
                </h3>
                <div class="like-content">
                    <div class="like-list">
                        <div
                            class="like-item"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="200"
                        >
                            <a href="./assets/link/detail.html">
                                <div class="like-item__thumbnail">
                                    <img
                                        src="./assets/img/like-1.webp"
                                        alt="Bánh Thưởng Cho Chó Xương Orgo Bổ Sung Canxi & Sạch Răng"
                                        class="like-item__img"
                                    />
                                    <div class="like-item__cta">
                                        <a href="#!" class="like-item__icon">
                                            <i
                                                class="fa-solid fa-cart-shopping like-item__cart"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Tùy chọn</span
                                            >
                                        </a>
                                        <a
                                            href="#view-modal"
                                            class="like-item__icon"
                                        >
                                            <i
                                                class="fa-solid fa-eye like-item__view"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Xem nhanh</span
                                            >
                                        </a>
                                    </div>
                                </div>
                                <div class="like-item__info">
                                    <div class="line-clamp like-item__name">
                                        Bánh Thưởng Cho Chó Xương Orgo Bổ Sung
                                        Canxi & Sạch Răng
                                    </div>
                                    <span class="like-item__price"
                                        >23.000đ</span
                                    >
                                    <button class="like-item__btn">
                                        <img
                                            src="./assets/img/shopping-bag.png"
                                            alt="Shopping bag"
                                            class="like-item__bag"
                                        />
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div
                            class="like-item"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="400"
                        >
                            <a href="./assets/link/detail.html">
                                <div class="like-item__thumbnail">
                                    <img
                                        src="./assets/img/like-2.webp"
                                        alt="Súp Thưởng SmartHeart Creamy Cho Chó Mọi Lứa Tuổi"
                                        class="like-item__img"
                                    />
                                    <div class="like-item__cta">
                                        <a href="#!" class="like-item__icon">
                                            <i
                                                class="fa-solid fa-cart-shopping like-item__cart"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Tùy chọn</span
                                            >
                                        </a>
                                        <a
                                            href="#view-modal"
                                            class="like-item__icon"
                                        >
                                            <i
                                                class="fa-solid fa-eye like-item__view"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Xem nhanh</span
                                            >
                                        </a>
                                    </div>
                                </div>
                                <div class="like-item__info">
                                    <div class="line-clamp like-item__name">
                                        Thức ăn cho chó Phốc Sóc MKB All Life
                                        Stages Formula Nutrition Thương hiệu MKB
                                    </div>
                                    <span class="like-item__price"
                                        >315.000đ</span
                                    >
                                    <button class="like-item__btn">
                                        <img
                                            src="./assets/img/shopping-bag.png"
                                            alt="Shopping bag"
                                            class="like-item__bag"
                                        />
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div
                            class="like-item"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="600"
                        >
                            <a href="./assets/link/detail.html">
                                <div class="like-item__thumbnail">
                                    <img
                                        src="./assets/img/like-3.webp"
                                        alt="Pate Cho Chó Trưởng Thành Smartheart Adult Lon 400g"
                                        class="like-item__img"
                                    />
                                    <div class="like-item__cta">
                                        <a href="#!" class="like-item__icon">
                                            <i
                                                class="fa-solid fa-cart-shopping like-item__cart"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Tùy chọn</span
                                            >
                                        </a>
                                        <a
                                            href="#view-modal"
                                            class="like-item__icon"
                                        >
                                            <i
                                                class="fa-solid fa-eye like-item__view"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Xem nhanh</span
                                            >
                                        </a>
                                    </div>
                                </div>
                                <div class="like-item__info">
                                    <div class="line-clamp like-item__name">
                                        Pate Cho Chó Trưởng Thành Smartheart
                                        Adult Lon 400g
                                    </div>
                                    <span class="like-item__price"
                                        >35.000đ</span
                                    >
                                    <button class="like-item__btn">
                                        <img
                                            src="./assets/img/shopping-bag.png"
                                            alt="Shopping bag"
                                            class="like-item__bag"
                                        />
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div
                            class="like-item"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="800"
                        >
                            <a href="./assets/link/detail.html">
                                <div class="like-item__thumbnail">
                                    <img
                                        src="./assets/img/like-4.webp"
                                        alt="Hạt Cho Chó Trưởng Thành SmartHeart Power Pack Adult 3kg"
                                        class="like-item__img"
                                    />
                                    <div class="like-item__cta">
                                        <a href="#!" class="like-item__icon">
                                            <i
                                                class="fa-solid fa-cart-shopping like-item__cart"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Tùy chọn</span
                                            >
                                        </a>
                                        <a
                                            href="#view-modal"
                                            class="like-item__icon"
                                        >
                                            <i
                                                class="fa-solid fa-eye like-item__view"
                                            ></i>
                                            <span class="like-item__action-name"
                                                >Xem nhanh</span
                                            >
                                        </a>
                                    </div>
                                </div>
                                <div class="like-item__info">
                                    <div class="line-clamp like-item__name">
                                        Hạt Cho Chó Trưởng Thành SmartHeart
                                        Power Pack Adult 3kg
                                    </div>
                                    <span class="like-item__price"
                                        >90.000đ</span
                                    >
                                    <button class="like-item__btn">
                                        <img
                                            src="./assets/img/shopping-bag.png"
                                            alt="Shopping bag"
                                            class="like-item__bag"
                                        />
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- View -->
        <div class="view-product-modal overlay" id="view-modal">
            <a href="#!" class="view-product__close"></a>
            <section class="view-modal">
                <a href="#!" class="view-modal__close-btn">&times;</a>
                <div class="view-modal__image">
                    <img
                        src="./assets/img/newproduct9.jpg"
                        alt=""
                        class="view-product__img"
                    />
                    <div class="view-product__list-img">
                        <i
                            class="fa-solid fa-chevron-left"
                            style="cursor: pointer"
                        ></i>

                        <img
                            src="./assets/img/newproduct9.jpg"
                            alt=""
                            class="view-product__img--small"
                            style="cursor: pointer"
                        />

                        <img
                            src="./assets/img/small-img1.webp"
                            alt=""
                            class="view-product__img--small"
                            style="cursor: pointer"
                        />

                        <img
                            src="./assets/img/small-img4.jpg"
                            alt=""
                            class="view-product__img--small"
                            style="cursor: pointer"
                        />
                        <i
                            class="fa-solid fa-chevron-left"
                            style="cursor: pointer"
                        ></i>
                    </div>
                </div>
                <div class="view-modal__content">
                    <h2 class="view-product__tittle" style="font-weight: 600">
                        Túi đựng chó mèo ANIME hình họa tiết White Cats Thương
                        hiệu ANIME
                    </h2>
                    <div class="view-product__info">
                        Thương hiệu: Channel <br />
                        Kho hàng: Còn hàng <br />
                        Loại sản phẩm: Để trưng
                    </div>
                    <strong
                        class="view-product__price"
                        style="font-weight: 600"
                    >
                        300.000đ
                    </strong>
                    <div class="view-product__box-size">
                        <span>Size: S <2kg </span>
                        <div class="box-size__row">
                            <span
                                class="box-size__item"
                                style="cursor: pointer"
                            >
                                S < 2kg
                            </span>
                            <span class="box-size__item" style="cursor: pointer"
                                >M < 5kg
                            </span>
                            <span
                                class="box-size__item sellout"
                                style="cursor: pointer"
                            >
                                L < 8kg
                            </span>
                        </div>
                    </div>
                    <div class="view-product__quantity">
                        <span class="product-quantity__tittle">
                            Số lượng:
                        </span>
                        <div class="quantity-cta">
                            <button class="quantity-btn minus">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input
                                type="text"
                                id="number-input"
                                oninput="validateNumber(this)"
                                placeholder="1"
                            />
                            <button class="quantity-btn plus">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <span class="view-product__totalprice">
                        Tổng số tiền:
                        <strong style="font-weight: 600">300.000đ</strong>
                    </span>
                    <div class="view-product__cta">
                        <button class="view-product__addcart">
                            THÊM VÀO GIỎ
                        </button>
                        <button class="view-product__love">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <fotter class="footer">
            <div class="container">
                <div class="grid">
                    <div class="grid-row">
                        <div class="grid__column">
                            <h4 class="footer-heading footer-heading__strong">
                                Thông Tin Cửa Hàng
                            </h4>
                            <div class="footer-content">
                                <p class="footer-introduce">
                                    Antony là cửa hàng chuyên cung cấp thức ăn
                                    và phụ kiện cho thú cưng tọa lạc tại Quận 5.
                                    Đến với Antony, khách yêu shopping tận lực,
                                    Antony tư vấn tận tâm.
                                </p>
                                <div class="footer-logo">
                                    <img
                                        style="margin-top: 16px"
                                        src="https://file.hstatic.net/1000300454/file/logo_bct_019590229b4c4dfda690236b67f7aff4.png"
                                        alt="Bộ Công Thương"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="grid__column" style="padding-left: 100px">
                            <h4 class="footer-heading footer-heading__strong">
                                Hỗ Trợ Khách Hàng
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a class="footer-item__link">Tìm Kiếm</a>
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link">Giới Thiệu</a>
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Chính Sách Bảo Mật</a
                                    >
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Chính Sách Thanh Toán</a
                                    >
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Chính Sách Giao Hàng</a
                                    >
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Chính Sách Đổi Trả</a
                                    >
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Hướng Dẫn Mua Hàng</a
                                    >
                                </li>
                                <li class="footer-item">
                                    <a class="footer-item__link"
                                        >Điều Khoản Dịch Vụ</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column" style="padding-left: 50px">
                            <h4 class="footer-heading footer-heading__strong">
                                Thông Tin Liên Hệ
                            </h4>
                            <ul class="footer-nolist">
                                <li class="footer-item">
                                    <i
                                        class="footer-item__icon fa-solid fa-location-dot"
                                        style="margin-left: 1px"
                                    ></i>
                                    <span
                                        style="
                                            max-width: 200px;
                                            margin-left: 2px;
                                        "
                                        >19 Hồ Biểu Chánh, Q.Phú Nhuận, P.12,
                                        TP-HCM</span
                                    >
                                </li>
                                <li class="footer-item">
                                    <i
                                        class="footer-item__icon fa-solid fa-square-phone"
                                    ></i>
                                    <span>0867585946</span>
                                </li>
                                <li class="footer-item">
                                    <i
                                        class="footer-item__icon fa-solid fa-paper-plane"
                                        style="font-size: 1.8rem"
                                    ></i>
                                    <span>antonyshop@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column grid__coluim-link">
                            <h4 class="footer-heading footer-heading__strong">
                                Theo Dõi Chúng Tôi
                            </h4>
                            <div class="footer-logo__link">
                                <a class="footer-item__link">
                                    <i
                                        class="footer-item__link-icon fa-brands fa-facebook"
                                    ></i>
                                </a>
                                <a class="footer-item__link">
                                    <i
                                        class="footer-item__link-icon fa-brands fa-instagram"
                                    ></i>
                                </a>
                                <a class="footer-item__link">
                                    <i
                                        class="footer-item__link-icon fa-brands fa-youtube"
                                    ></i>
                                </a>
                                <a class="footer-item__link">
                                    <i
                                        class="footer-item__link-icon fa-brands fa-twitter"
                                    ></i>
                                </a>
                            </div>
                            <div class="footer-pay">
                                <div
                                    class="footer-heading"
                                    style="margin-bottom: 0; margin-top: 20px"
                                >
                                    <h4 class="footer-heading__pay">
                                        Phương Thức Thanh Toán
                                    </h4>
                                </div>
                                <img
                                    class="footer-icon__pay"
                                    src="//bizweb.dktcdn.net/100/501/740/themes/929449./assets/payment.png?1726189697911"
                                    alt="Phương thức thanh toán"
                                    width="276"
                                    height="45"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fotter>
        <div class="footer-last footer-container text-algin">
            <p class="footer-last-heading">
                Copyright © 2024 .
                <a class="footer-last-heading footer-nolist">
                    Antony PetShop
                </a>
                <a class="footer-last-heading footer-nolist" target="_blank">
                    Powered by 3Tl
                </a>
            </p>
        </div>

        <!-- JS Animation -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                once: "true",
            });
        </script>
        <script>
            document
                .querySelector(".search-form__input")
                .addEventListener("input", function () {
                    var inputValue = this.value.toLowerCase();
                    var searchRecommend =
                        document.querySelector(".search-recommend");

                    if (inputValue === "thức ăn") {
                        searchRecommend.style.display = "block"; // Hiển thị thẻ search-recommend
                    } else {
                        searchRecommend.style.display = "none"; // Ẩn thẻ nếu từ khóa không khớp
                    }
                });
            document.addEventListener("click", function (event) {
                var searchInput = document.querySelector(".search-form__input");
                var searchRecommend =
                    document.querySelector(".search-recommend");

                // Kiểm tra nếu click không phải vào input hoặc search-recommend
                if (
                    !searchInput.contains(event.target) &&
                    !searchRecommend.contains(event.target)
                ) {
                    searchRecommend.style.display = "none"; // Ẩn search-recommend khi bấm ra ngoài
                }
            });
        </script>
    </body>
</html>
