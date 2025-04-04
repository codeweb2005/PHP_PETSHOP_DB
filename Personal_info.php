<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thông tin cá nhân</title>
        <link rel="stylesheet" href="./assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/Personal_info.css" />
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
    </head>
    <script>
        function validateNumber(input) {
            input.value = input.value.replace(/[^0-9]/g, ""); // Loại bỏ tất cả các ký tự không phải số
        }
    </script>
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
                        <a href="./assets/link/afterLogin.html">
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                        href="./assets/link/afterDetail.html"
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
                                <p
                                    class="user-title"
                                    style="white-space: nowrap"
                                >
                                    Đặng Sơn
                                </p>
                                <div class="user-box">
                                    <div class="user-box__body">
                                        <h3 class="user-box__heading">
                                            Tài khoản
                                        </h3>
                                        <ul class="user-box__content">
                                            <li class="user-box__item">
                                                <a
                                                    href="./assets/link/Personal_info.html"
                                                    style="
                                                        display: flex;
                                                        align-items: center;
                                                        gap: 10px;
                                                    "
                                                >
                                                    <img
                                                        src="./assets/img/user.svg"
                                                        alt=""
                                                        class="avatar-icon user-box__icon"
                                                    />
                                                    <p class="user-box__name">
                                                        Thông Tin Tài Khoản
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="user-box__item">
                                                <a
                                                    href="./assets/link/yourOrder.html"
                                                    style="
                                                        display: flex;
                                                        align-items: center;
                                                        gap: 10px;
                                                    "
                                                >
                                                    <img
                                                        src="./assets/img/truck.svg"
                                                        alt=""
                                                        class="your-order user-box__icon"
                                                    />
                                                    <p class="user-box__name">
                                                        Đơn Hàng
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="user-box__item">
                                                <a
                                                    href="./assets/link/address.html"
                                                    style="
                                                        display: flex;
                                                        align-items: center;
                                                        gap: 10px;
                                                    "
                                                >
                                                    <img
                                                        src="./assets/img/yourAddress.svg"
                                                        alt=""
                                                        class="your-address user-box__icon"
                                                    />
                                                    <p class="user-box__name">
                                                        Địa Chỉ
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="user-box__item">
                                                <a
                                                    href="./assets/link/checkOrder.html"
                                                    style="
                                                        display: flex;
                                                        align-items: center;
                                                        gap: 10px;
                                                    "
                                                >
                                                    <img
                                                        src="./assets/img/infoOrder.svg"
                                                        alt=""
                                                        class="info-order user-box__icon"
                                                    />
                                                    <p class="user-box__name">
                                                        Kiểm Tra Đơn Hàng
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="user-box__item">
                                                <a
                                                    href="/index.html"
                                                    style="
                                                        display: flex;
                                                        align-items: center;
                                                        gap: 10px;
                                                    "
                                                >
                                                    <img
                                                        src="./assets/img/logout.svg"
                                                        alt=""
                                                        class="logout user-box__icon"
                                                    />
                                                    <p class="user-box__name">
                                                        Đăng xuất
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header__cart">
                                <i
                                    class="fa-solid fa-cart-shopping header-cart"
                                ></i>
                                <div class="cart-box">
                                    <div class="cart-box__tittle">
                                        <h2>giỏ hàng</h2>
                                    </div>
                                    <div class="cart-box__items">
                                        <div class="cart-box__item">
                                            <a
                                                href="./assets/link/afterDetail.html"
                                                style="display: flex"
                                            >
                                                <img
                                                    src="./assets/img/cart-1.webp"
                                                    alt=""
                                                    class="cart-box-item__img"
                                                />
                                                <div class="cart-box__body">
                                                    <p
                                                        class="cart-box__name line-clamp"
                                                    >
                                                        Pate Mèo Mẹ & Mèo Con
                                                        Royal Canin Mother &
                                                        Babycat
                                                    </p>
                                                    <span
                                                        class="cart-box__variant"
                                                        >Lon 195gram</span
                                                    >
                                                    <div
                                                        class="cart-box__bottom-row"
                                                    >
                                                        <div
                                                            class="cart-box-item__qty"
                                                        >
                                                            <button
                                                                class="cart-box__qty decrease"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-minus"
                                                                ></i>
                                                            </button>
                                                            <span
                                                                class="num-qty"
                                                                >1</span
                                                            >
                                                            <button
                                                                class="cart-box__qty increase"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-plus"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                        <span
                                                            class="cart-box__price"
                                                        >
                                                            54.600đ
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="cart-box__close">
                                                    <i
                                                        class="fa-solid fa-xmark"
                                                    ></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="cart-box__item">
                                            <a
                                                href="./assets/link/afterDetail.html"
                                                style="display: flex"
                                            >
                                                <img
                                                    src="./assets/img/cart-2.webp"
                                                    alt=""
                                                    class="cart-box-item__img"
                                                />
                                                <div class="cart-box__body">
                                                    <p
                                                        class="cart-box__name line-clamp"
                                                    >
                                                        Thức Ăn Hạt Cho Chó Con
                                                        Giống Vừa Royal Canin
                                                        Medium Puppy
                                                    </p>
                                                    <span
                                                        class="cart-box__variant"
                                                        >Bịch 4kg</span
                                                    >
                                                    <div
                                                        class="cart-box__bottom-row"
                                                    >
                                                        <div
                                                            class="cart-box-item__qty"
                                                        >
                                                            <button
                                                                class="cart-box__qty decrease"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-minus"
                                                                ></i>
                                                            </button>
                                                            <span
                                                                class="num-qty"
                                                                >1</span
                                                            >
                                                            <button
                                                                class="cart-box__qty increase"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-plus"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                        <span
                                                            class="cart-box__price"
                                                        >
                                                            215.000đ
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="cart-box__close">
                                                    <i
                                                        class="fa-solid fa-xmark"
                                                    ></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="cart-box__item">
                                            <a
                                                href="./assets/link/afterDetail.html"
                                                style="display: flex"
                                            >
                                                <img
                                                    src="./assets/img/cart-3.webp"
                                                    alt=""
                                                    class="cart-box-item__img"
                                                />
                                                <div class="cart-box__body">
                                                    <p
                                                        class="cart-box__name line-clamp"
                                                    >
                                                        Sữa Tắm Davis
                                                        Ketohexidine Trị Viêm Da
                                                        Lông Chó Mèo
                                                    </p>
                                                    <span
                                                        class="cart-box__variant"
                                                        >Thương hiệu:
                                                        Davis</span
                                                    >
                                                    <div
                                                        class="cart-box__bottom-row"
                                                    >
                                                        <div
                                                            class="cart-box-item__qty"
                                                        >
                                                            <button
                                                                class="cart-box__qty decrease"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-minus"
                                                                ></i>
                                                            </button>
                                                            <span
                                                                class="num-qty"
                                                                >1</span
                                                            >
                                                            <button
                                                                class="cart-box__qty increase"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-plus"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                        <span
                                                            class="cart-box__price"
                                                        >
                                                            390.000đ
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="cart-box__close">
                                                    <i
                                                        class="fa-solid fa-xmark"
                                                    ></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="cart-box__item">
                                            <a
                                                href="./assets/link/afterDetail.html"
                                                style="display: flex"
                                            >
                                                <img
                                                    src="./assets/img/catfood-1.jpg"
                                                    alt=""
                                                    class="cart-box-item__img"
                                                />
                                                <div class="cart-box__body">
                                                    <p
                                                        class="cart-box__name line-clamp"
                                                    >
                                                        Catnip cho mèo dạng que
                                                        BIOLINE Catnip Dental
                                                        Stick Thương hiệu
                                                        BIOLINE
                                                    </p>
                                                    <span
                                                        class="cart-box__variant"
                                                        >Bịch 500gram</span
                                                    >
                                                    <div
                                                        class="cart-box__bottom-row"
                                                    >
                                                        <div
                                                            class="cart-box-item__qty"
                                                        >
                                                            <button
                                                                class="cart-box__qty decrease"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-minus"
                                                                ></i>
                                                            </button>
                                                            <span
                                                                class="num-qty"
                                                                >1</span
                                                            >
                                                            <button
                                                                class="cart-box__qty increase"
                                                            >
                                                                <i
                                                                    class="fa-solid fa-plus"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                        <span
                                                            class="cart-box__price"
                                                        >
                                                            265,500đ
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="cart-box__close">
                                                    <i
                                                        class="fa-solid fa-xmark"
                                                    ></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-box__total">
                                        <p class="cart-box__total--text">
                                            tổng tiền:
                                        </p>
                                        <p class="cart-box__total--price">
                                            924.000đ
                                        </p>
                                    </div>
                                    <a
                                        href="./assets/link/gioHang.html"
                                        class="cart-box__btn"
                                        style="display: inline-block"
                                    >
                                        XEM GIỎ HÀNG
                                    </a>
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCataAfter.html">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="./assets/link/resultCataAfter.html">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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
                            <a href="./assets/link/resultCataAfter.html">
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

        <!-- Your Info -->
        <section class="your-acc">
            <div class="container">
                <div class="account-body">
                    <div class="account-sidebar">
                        <div class="account-sidebar__heading">
                            <h2 class="acc-sidebar__name">
                                Xin chào, Đặng Sơn!
                            </h2>
                        </div>
                        <ul class="sidebar__list">
                            <li class="sidebar__item sidebar__item--active">
                                <a
                                    href="./assets/link/Personal_info.html"
                                    class="sidebar__link"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                            fill="#2E2E2E"
                                            stroke="#2E2E2E"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M12 15C14.0711 15 15.75 13.3211 15.75 11.25C15.75 9.17893 14.0711 7.5 12 7.5C9.92893 7.5 8.25 9.17893 8.25 11.25C8.25 13.3211 9.92893 15 12 15Z"
                                            fill="white"
                                            stroke="#2E2E2E"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M6 18.0004C8.5 20.5002 13.5 22.0002 18 18.0004C15 15.5003 10.5 14.0004 6 18.0004Z"
                                            fill="white"
                                        ></path>
                                    </svg>
                                    <span>Thông Tin Cá Nhân</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a
                                    href="./assets/link/yourOrder.html"
                                    class="sidebar__link"
                                >
                                    <img
                                        src="./assets/img/truck.svg"
                                        alt=""
                                        class="sidebar-item__img"
                                    />
                                    <span>Đơn Hàng</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a
                                    href="./assets/link/address.html"
                                    class="sidebar__link"
                                >
                                    <img
                                        src="./assets/img/yourAddress.svg"
                                        alt=""
                                        class="sidebar-item__img"
                                    />
                                    <span>Địa Chỉ</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a
                                    href="./assets/link/viewRecently.html"
                                    class="sidebar__link"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M15 6.84375C15 6.84375 16.1419 6.28125 12 6.28125C10.5166 6.28125 9.0666 6.72112 7.83323 7.54523C6.59986 8.36934 5.63856 9.54068 5.07091 10.9111C4.50325 12.2816 4.35472 13.7896 4.64411 15.2444C4.9335 16.6993 5.64781 18.0357 6.6967 19.0846C7.7456 20.1334 9.08197 20.8478 10.5368 21.1371C11.9917 21.4265 13.4997 21.278 14.8701 20.7103C16.2406 20.1427 17.4119 19.1814 18.236 17.948C19.0601 16.7147 19.5 15.2646 19.5 13.7812"
                                            stroke="#2E2E2E"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                        ></path>
                                        <path
                                            d="M12 2.71875L15.75 6.46875L12 10.2188"
                                            stroke="#2E2E2E"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                    <span>Đã Xem Gần Đây</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a
                                    href="./assets/link/checkOrder.html"
                                    class="sidebar__link"
                                >
                                    <img
                                        src="./assets/img/infoOrder.svg"
                                        alt=""
                                        class="sidebar-item__img"
                                    />
                                    <span>Kiểm Tra Đơn Hàng</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="/index.html" class="sidebar__link">
                                    <img
                                        src="./assets/img/logout.svg"
                                        alt=""
                                        class="sidebar-item__img"
                                    />
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="account-content">
                        <h1 class="acc-content__tittle">THÔNG TIN CÁ NHÂN</h1>
                        <div class="account-form">
                            <form action="">
                                <div class="item-input-form">
                                    <label class="form-label" for="name"
                                        >TÊN</label
                                    >
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="name"
                                        id="name"
                                        value="Sơn"
                                    />
                                </div>
                                <div class="item-input-form">
                                    <label class="form-label" for="lastname"
                                        >HỌ</label
                                    >
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="lastname"
                                        id="lastname"
                                        value="Đặng"
                                    />
                                </div>
                                <div class="item-input-form">
                                    <label
                                        class="form-label"
                                        for="birthday"
                                        class="item-label-form"
                                        >SINH NHẬT</label
                                    >
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="birthday"
                                        id="birthday"
                                        placeholder="Nhập ngày tháng năm"
                                    />
                                </div>
                                <div class="item-input-form">
                                    <label class="form-label" for="lastname"
                                        >GIỚI TÍNH</label
                                    >
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="gender"
                                        id="gender"
                                        value="Nam"
                                    />
                                </div>
                                <div class="item-input-form">
                                    <label class="form-label" for="phonenumber"
                                        >số điện thoại</label
                                    >
                                    <input
                                        class="form-control"
                                        type="number"
                                        name="phonenumber"
                                        id="phonenumber"
                                    />
                                </div>
                                <div class="item-input-form">
                                    <label class="form-label" for="email"
                                        >email</label
                                    >
                                    <input
                                        class="form-control"
                                        type="email"
                                        name="email"
                                        id="email"
                                        value="sonriamep113@gmail.com"
                                    />
                                </div>
                                <button
                                    type="button"
                                    class="item-input-form__btn"
                                >
                                    CẬP NHẬT THÔNG TIN
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
