<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kết quả tìm kiếm cho từ khóa: thức ăn</title>
        <link rel="stylesheet" href="./assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/pageProduct.css" />
        <!-- Embed Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Sen:wght@700&display=swap"
            rel="stylesheet"
        />
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
    <style>
        .user-box {
            position: absolute;
            z-index: 10;
            top: 58px;
            width: 250px;
            /* height: 200px; */
            min-width: 205px;
            padding: 24px;
            border-radius: 2px;
            background: #fff;
            color: #000;
            box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: 0.5s;
        }
        .header__account:hover .user-box {
            visibility: visible;
            opacity: 1;
        }
        .user-box__heading {
            font-size: 2.2rem;
            font-weight: 600;
            color: #2e2e2e;
            margin-bottom: 20px;
        }
        .user-box__item {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-weight: 400;
        }
        .user-box__content .user-box__item:last-child {
            margin-bottom: 0;
        }
        .header__cart {
            position: relative;
            font-size: 2rem;
            padding: 20px;
            color: #fff;
            cursor: pointer;
        }
        .header__cart::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -9px;
            height: 20px;
            width: 100%;
            background: transparent;
        }
        .header__cart:hover .cart-box {
            opacity: 1;
            visibility: visible;
            scale: 1;
        }
        .cart-box {
            position: absolute;
            top: 60px;
            right: 0;
            width: 420px;
            height: 50vh;
            padding: 20px 0;
            border-radius: 3px;
            background: #fff;
            box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            scale: 0;
            transform-origin: calc(100% - 32px) top;
            transition: 0.25s ease;
        }
        .cart-box::before {
            content: "";
            position: absolute;
            top: -33px;
            right: 10px;
            border-bottom: 20px solid #fff;
            border-top: 20px solid transparent;
            border-right: 20px solid transparent;
            border-left: 20px solid transparent;
        }

        .cart-box__tittle {
            width: 100%;
            text-transform: uppercase;
            color: #060409;
            font-weight: 500;
            font-size: 1.5rem;
            text-align: center;
            padding: 0 0 10px;
            border-bottom: 1px solid #e7e7e7;
        }
        .cart-box__items {
            max-height: 29vh;
            overflow-y: auto;
        }
        .cart-box__item {
            position: relative;
            padding: 12px;
            display: flex;
            align-items: center;
            border-bottom: 1px dotted #e7e7e7;
        }
        .cart-box__body {
            padding-left: 15px;
        }
        .cart-box__name {
            display: block;
            font-size: 1.2rem;
            font-weight: 500;
            /* padding-right: 35px; */
            text-transform: uppercase;
            color: #252a2b;
        }
        .cart-box-item__img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 1px solid #ccc;
        }
        .cart-box__variant {
            margin-top: 10px;
            display: block;
            color: #677279;
            font-size: 1.2rem;
            font-weight: 400;
            padding-bottom: 10px;
        }
        .cart-box__body {
            color: red;
        }
        .cart-box__bottom-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .cart-box__price {
            color: #000;
            font-size: 1.3rem;
        }
        .cart-box-item__qty {
            display: flex;
            align-items: center;
        }
        .cart-box__qty {
            width: 24px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* font-size: 1.5rem; */
            text-align: center;
            border-radius: 50%;
            background: rgba(107, 68, 51, 0.04);
            border: 1px solid rgba(107, 68, 51, 0.06);
        }
        .num-qty {
            margin: 0 14px;
            font-size: 1.5rem;
            color: #000;
        }

        .cart-box__close {
            position: absolute;
            right: 0;
            top: 10px;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 20px;
            background: #f4f6fb;
            color: #252a2b;
        }
        .cart-box__total {
            padding: 0 12px;
            margin-top: 18px;
            display: flex;
            justify-content: space-between;
        }
        .cart-box__total--text {
            font-size: 1.6rem;
            text-transform: uppercase;
            color: #060409;
        }
        .cart-box__total--price {
            font-size: 1.6rem;
            color: red;
        }
        .cart-box__btn {
            margin: 0 14px;
            margin-top: 16px;
            width: 94%;
            border: none;
            outline: none;
            height: 36px;
            line-height: 36px;
            background: #060409;
            color: #fff;
        }
    </style>
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
                                                >155.000₫</span
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
                                                >25.000₫</span
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
                                                >135.000₫</span
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
                                                >315.000₫</span
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
                                                >135.000₫</span
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
                                                >240.000₫</span
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
                                                >190.000₫</span
                                            >
                                        </div>
                                    </a>
                                </div>
                                <div class="search-recommend__bottom">
                                    <a
                                        href="./assets/link/afterProductPage.html"
                                    >
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
                                                            54.600₫
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
                                                            215.000₫
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
                                                            390.000₫
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
                                                            265,500₫
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
                            Thức ăn hạt
                            <i class="fa-solid fa-chevron-right item-right"></i>
                            <ul class="food-type__list detail-list">
                                <li class="food-type__item detail-item">
                                    <a href="#!">Chó dưới 1 tuổi</a>
                                </li>
                                <li class="food-type__item detail-item">
                                    <a href="#!">Chó trên 1 tuổi </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Pate | Snack | Súp thưởng -->
                        <li class="dropdown__item supplies-dropdown__item">
                            Pate | Snack | Súp thưởng
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                        </li>

                        <!-- Chăm sóc sức khỏe -->
                        <li class="dropdown__item treats-dropdown__item">
                            Chăm sóc sức khỏe
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                        </li>

                        <!-- Sữa tắm | Dầu gội -->
                        <li class="dropdown__item dog-dropdown__item">
                            Sữa tắm | Dầu gội
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            Dụng cụ ăn uống
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            Vệ sinh
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                            Thức ăn hạt
                            <i class="fa-solid fa-chevron-right item-right"></i>
                            <ul class="food-type__list detail-list">
                                <li class="food-type__item detail-item">
                                    <a href="#!">Mèo dưới 1 tuổi</a>
                                </li>
                                <li class="food-type__item detail-item">
                                    <a href="#!">Mèo trên 1 tuổi</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Pate | Snack | Súp thưởng -->
                        <li class="dropdown__item supplies-dropdown__item">
                            Pate | Snack | Súp thưởng
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                        </li>

                        <!-- Chăm sóc sức khỏe -->
                        <li class="dropdown__item treats-dropdown__item">
                            Chăm sóc sức khỏe
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                        </li>

                        <!-- Sữa tắm | Dầu gội -->
                        <li class="dropdown__item dog-dropdown__item">
                            Sữa tắm | Dầu gội
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            Dụng cụ ăn uống
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            Vệ sinh
                            <i class="fa-solid fa-chevron-right item-right"></i>
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
                            Dịch Vụ
                            <ul class="services-type__list detail-list">
                                <li class="services-type__item detail-item">
                                    <a href="#!">Khách sạn mèo</a>
                                </li>
                                <li class="services-type__item detail-item">
                                    <a href="#!">Spa - Grooming</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Delivery -->
                        <li class="dropdown__item delivery-dropdown__item">
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
                        </li>
                    </ul>
                </li>

                <!-- Support -->
                <li class="menu-item">
                    <h3>HỖ TRỢ</h3>
                </li>
            </ul>
        </div>

        <!-- List Result -->
        <div class="collection-product">
            <div class="container">
                <div class="collection-container">
                    <div class="filter-collection">
                        <div class="filter-collection-item-list">
                            <!-- Products -->
                            <div class="filter-collection__item">
                                <label
                                    for="line-product"
                                    class="filter-item__btn"
                                >
                                    <i class="fa-solid fa-minus"></i>
                                </label>
                                <input
                                    type="checkbox"
                                    name="line-product"
                                    id="line-product"
                                    checked
                                />
                                <div class="filter-item__body">
                                    <h3 class="filter-item__tittle">
                                        Dòng sản phẩm
                                    </h3>
                                    <div class="filter-item__search">
                                        <input
                                            type="text"
                                            name="product"
                                            id="product"
                                            placeholder="Tìm sản phẩm"
                                        />
                                        <img
                                            src="./assets/img/find.svg"
                                            alt="find-icon"
                                            class="filter-item__icon"
                                        />
                                    </div>
                                    <div class="filter-item__menu">
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="food"
                                                checked
                                            />
                                            <label for="food" class="type-pro">
                                                Thức ăn
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="accessory"
                                            />
                                            <label
                                                for="accessory"
                                                class="type-pro"
                                            >
                                                Đồ chơi - Phụ kiện
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="sanitary"
                                            />
                                            <label
                                                for="sanitary"
                                                class="type-pro"
                                            >
                                                Đồ dùng vệ sinh
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="healthcare"
                                            />
                                            <label
                                                for="healthcare"
                                                class="type-pro"
                                            >
                                                Chăm sóc sức khỏe
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Type Product -->
                            <div class="filter-collection__item filter-type">
                                <label
                                    for="type-products"
                                    class="filter-item__btn"
                                >
                                    <i class="fa-solid fa-minus"></i>
                                </label>
                                <input
                                    type="checkbox"
                                    name="type-products"
                                    id="type-products"
                                    checked
                                />
                                <div
                                    class="filter-item__body filter-type__body"
                                >
                                    <h3 class="filter-item__tittle">
                                        Loại sản phẩm
                                    </h3>
                                    <div class="filter-item__search">
                                        <input
                                            type="text"
                                            name="product"
                                            id="product"
                                            placeholder="Tìm sản phẩm"
                                        />
                                        <img
                                            src="./assets/img/find.svg"
                                            alt="find-icon"
                                            class="filter-item__icon"
                                        />
                                    </div>
                                    <div class="filter-item__menu">
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="wet-food"
                                                checked
                                            />
                                            <label
                                                for="wet-food"
                                                class="type-pro"
                                            >
                                                Thức ăn ướt
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="dry-food"
                                            />
                                            <label
                                                for="dry-food"
                                                class="type-pro"
                                            >
                                                Thức ăn khô
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Brand -->
                            <div class="filter-collection__item filter-brand">
                                <label for="brand" class="filter-item__btn">
                                    <i class="fa-solid fa-minus"></i>
                                </label>
                                <input
                                    type="checkbox"
                                    name="brand"
                                    id="brand"
                                />
                                <div
                                    class="filter-item__body filter-brand__body"
                                >
                                    <h3 class="filter-item__tittle">
                                        Thương hiệu
                                    </h3>
                                    <div class="filter-item__search">
                                        <input
                                            type="text"
                                            name="product"
                                            id="product"
                                            placeholder="Tìm sản phẩm"
                                        />
                                        <img
                                            src="./assets/img/find.svg"
                                            alt="find-icon"
                                            class="filter-item__icon"
                                        />
                                    </div>
                                    <div
                                        class="filter-item__menu filter-brand__menu"
                                    >
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Virbac"
                                                checked
                                            />
                                            <label
                                                for="Virbac"
                                                class="type-pro"
                                            >
                                                Virbac
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id=" Vegebrand"
                                            />
                                            <label
                                                for=" Vegebrand"
                                                class="type-pro"
                                            >
                                                Vegebrand
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Friend Baby"
                                            />
                                            <label
                                                for="Friend Baby"
                                                class="type-pro"
                                            >
                                                Friend Baby
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Doog&Caat"
                                            />
                                            <label
                                                for="Doog&Caat"
                                                class="type-pro"
                                            >
                                                Doog&Caat
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="King's Pet"
                                            />
                                            <label
                                                for="King's Pet"
                                                class="type-pro"
                                            >
                                                King's Pet
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Fib"
                                            />
                                            <label for="Fib" class="type-pro">
                                                Fib
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Reflex"
                                            />
                                            <label
                                                for="Reflex"
                                                class="type-pro"
                                            >
                                                Reflex
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Pedigree"
                                            />
                                            <label
                                                for="Pedigree"
                                                class="type-pro"
                                            >
                                                Pedigree
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Whiskas"
                                            />
                                            <label
                                                for="Whiskas"
                                                class="type-pro"
                                            >
                                                Whiskas
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Max Well"
                                            />
                                            <label
                                                for="Max Well"
                                                class="type-pro"
                                            >
                                                Max Well
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Silver Spoon"
                                            />
                                            <label
                                                for="Silver Spoon"
                                                class="type-pro"
                                            >
                                                Silver Spoon
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Pet Gel"
                                            />
                                            <label
                                                for="Pet Gel"
                                                class="type-pro"
                                            >
                                                Pet Gel
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Bio-Pharmachemie"
                                            />
                                            <label
                                                for="Bio-Pharmachemie"
                                                class="type-pro"
                                            >
                                                Bio-Pharmachemie
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="ShowQueen"
                                            />
                                            <label
                                                for="ShowQueen"
                                                class="type-pro"
                                            >
                                                ShowQueen
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Q8"
                                            />
                                            <label for="Q8" class="type-pro">
                                                Q8
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Monge"
                                            />
                                            <label for="Monge" class="type-pro">
                                                Monge
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Cat's On"
                                            />
                                            <label
                                                for="Cat's On"
                                                class="type-pro"
                                            >
                                                Cat's On
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Moorpet"
                                            />
                                            <label
                                                for="Moorpet"
                                                class="type-pro"
                                            >
                                                Moorpet
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Gogo"
                                            />
                                            <label for="Gogo" class="type-pro">
                                                Gogo
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Bioline"
                                            />
                                            <label
                                                for="Bioline"
                                                class="type-pro"
                                            >
                                                Bioline
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Hanvet"
                                            />
                                            <label
                                                for="Hanvet"
                                                class="type-pro"
                                            >
                                                Hanvet
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Zichen"
                                            />
                                            <label
                                                for="Zichen"
                                                class="type-pro"
                                            >
                                                Zichen
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Charcoal"
                                            />
                                            <label
                                                for="Charcoal"
                                                class="type-pro"
                                            >
                                                Charcoal
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Pet Training"
                                            />
                                            <label
                                                for="Pet Training"
                                                class="type-pro"
                                            >
                                                Pet Training
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Pet Training"
                                            />
                                            <label
                                                for="Pet Training"
                                                class="type-pro"
                                            >
                                                Dono
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Pakeway"
                                            />
                                            <label
                                                for="Pakeway"
                                                class="type-pro"
                                            >
                                                Pakeway
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Fay"
                                            />
                                            <label for="Fay" class="type-pro">
                                                Fay
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Vemedim"
                                            />
                                            <label
                                                for="Vemedim"
                                                class="type-pro"
                                            >
                                                Vemedim
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Alkin Lab"
                                            />
                                            <label
                                                for="Alkin Lab"
                                                class="type-pro"
                                            >
                                                Alkin Lab
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Ketomycin"
                                            />
                                            <label
                                                for="Ketomycin"
                                                class="type-pro"
                                            >
                                                Ketomycin
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Dorrikey"
                                            />
                                            <label
                                                for="Dorrikey"
                                                class="type-pro"
                                            >
                                                Dorrikey
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Urine off"
                                            />
                                            <label
                                                for="Urine off"
                                                class="type-pro"
                                            >
                                                Urine off
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Tropiclean"
                                            />
                                            <label
                                                for="Tropiclean"
                                                class="type-pro"
                                            >
                                                Tropiclean
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="CD Labs"
                                            />
                                            <label
                                                for="CD Labs"
                                                class="type-pro"
                                            >
                                                CD Labs
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Cature"
                                            />
                                            <label
                                                for="Cature"
                                                class="type-pro"
                                            >
                                                Cature
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Snappy Tom"
                                            />
                                            <label
                                                for="Snappy Tom"
                                                class="type-pro"
                                            >
                                                Snappy Tom
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Cat's Best"
                                            />
                                            <label
                                                for="Cat's Best"
                                                class="type-pro"
                                            >
                                                Cat's Best
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Nobrand"
                                            />
                                            <label
                                                for="Nobrand"
                                                class="type-pro"
                                            >
                                                Nobrand
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Matchwell"
                                            />
                                            <label
                                                for="Matchwell"
                                                class="type-pro"
                                            >
                                                Matchwell
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Orgo"
                                            />
                                            <label for="Orgo" class="type-pro">
                                                Orgo
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Masti"
                                            />
                                            <label for="Masti" class="type-pro">
                                                Masti
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="APro"
                                            />
                                            <label for="APro" class="type-pro">
                                                APro
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Me-O"
                                            />
                                            <label for="Me-O" class="type-pro">
                                                Me-O
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Zoi Dog"
                                            />
                                            <label
                                                for="Zoi Dog"
                                                class="type-pro"
                                            >
                                                Zoi Dog
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Zoi Cat"
                                            />
                                            <label
                                                for="Zoi Cat"
                                                class="type-pro"
                                            >
                                                Zoi Cat
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Meowow"
                                            />
                                            <label
                                                for="Meowow"
                                                class="type-pro"
                                            >
                                                Meowow
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Aatas"
                                            />
                                            <label for="Aatas" class="type-pro">
                                                Aatas
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="ANF"
                                            />
                                            <label for="ANF" class="type-pro">
                                                ANF
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Nutrience"
                                            />
                                            <label
                                                for="Nutrience"
                                                class="type-pro"
                                            >
                                                Nutrience
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Beaut Pro"
                                            />
                                            <label
                                                for="Beaut Pro"
                                                class="type-pro"
                                            >
                                                Beaut Pro
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Minino"
                                            />
                                            <label
                                                for="Minino"
                                                class="type-pro"
                                            >
                                                Minino
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Absolute Holistic"
                                            />
                                            <label
                                                for="Absolute Holistic"
                                                class="type-pro"
                                            >
                                                Absolute Holistic
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Ganador"
                                            />
                                            <label
                                                for="Ganador"
                                                class="type-pro"
                                            >
                                                Ganador
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Catchy"
                                            />
                                            <label
                                                for="Catchy"
                                                class="type-pro"
                                            >
                                                Catchy
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Catsrang"
                                            />
                                            <label
                                                for="Catsrang"
                                                class="type-pro"
                                            >
                                                Catsrang
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="SmartHeart"
                                            />
                                            <label
                                                for="SmartHeart"
                                                class="type-pro"
                                            >
                                                SmartHeart
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Taste of The Wild"
                                            />
                                            <label
                                                for="Taste of The Wild"
                                                class="type-pro"
                                            >
                                                Taste of The Wild
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Mr. Vet"
                                            />
                                            <label
                                                for="Mr. Vet"
                                                class="type-pro"
                                            >
                                                Mr. Vet
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Bite of Wild"
                                            />
                                            <label
                                                for="Bite of Wild"
                                                class="type-pro"
                                            >
                                                Bite of Wild
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Cat's Eye"
                                            />
                                            <label
                                                for="Cat's Eye"
                                                class="type-pro"
                                            >
                                                Cat's Eye
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Bowwow"
                                            />
                                            <label
                                                for="Bowwow"
                                                class="type-pro"
                                            >
                                                Bowwow
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Today's Dinner"
                                            />
                                            <label
                                                for="Today's Dinner"
                                                class="type-pro"
                                            >
                                                Today's Dinner
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Zenith"
                                            />
                                            <label
                                                for="Zenith"
                                                class="type-pro"
                                            >
                                                Zenith
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Natural Core"
                                            />
                                            <label
                                                for="Natural Core"
                                                class="type-pro"
                                            >
                                                Natural Core
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Royal Canin"
                                            />
                                            <label
                                                for="Royal Canin"
                                                class="type-pro"
                                            >
                                                Royal Canin
                                            </label>
                                        </div>
                                        <div class="filter-item__opt">
                                            <input
                                                type="checkbox"
                                                name="pro-item"
                                                id="Budle'Budle"
                                            />
                                            <label
                                                for="Budle'Budle"
                                                class="type-pro"
                                            >
                                                Budle'Budle
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="filter-collection__item filter-price">
                                <label for="price" class="filter-item__btn">
                                    <i class="fa-solid fa-minus"></i>
                                </label>
                                <input
                                    type="checkbox"
                                    name="price"
                                    id="price"
                                    checked
                                />
                                <div
                                    class="filter-item__body filter-price__body"
                                >
                                    <h3 class="filter-item__tittle">Giá</h3>
                                    <div class="filter-price__row">
                                        <input
                                            type="text"
                                            minlenght="1"
                                            maxlength="10"
                                            class="text-price-from"
                                            placeholder="0đ"
                                        />
                                        <span>
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input
                                            type="text"
                                            minlenght="1"
                                            maxlength="10"
                                            class="text-price-to"
                                            placeholder="1,000,000đ"
                                        />
                                    </div>
                                    <ul class="filter-price-option__list">
                                        <li class="filter-price__opt">
                                            <input
                                                type="radio"
                                                name="sprice"
                                                value="(price_variant:product < 1000000)"
                                                data-price="1000000"
                                                id="price-filter-1"
                                                checked
                                            />
                                            <label for="price-filter-1"
                                                >Dưới 1,000,000đ</label
                                            >
                                        </li>
                                        <li class="filter-price__opt">
                                            <input
                                                type="radio"
                                                name="sprice"
                                                value="(price_variant:product range 1000000_2000000)"
                                                data-price="1000000_2000000"
                                                id="price-filter-2"
                                            />
                                            <label for="price-filter-2"
                                                >1,000,000đ - 2,000,000đ</label
                                            >
                                        </li>
                                        <li class="filter-price__opt">
                                            <input
                                                type="radio"
                                                name="sprice"
                                                value="(price_variant:product range 2000000_3000000)"
                                                data-price="2000000_3000000"
                                                id="price-filter-3"
                                            />
                                            <label for="price-filter-3"
                                                >2,000,000đ - 3,000,000đ</label
                                            >
                                        </li>
                                        <li class="filter-price__opt">
                                            <input
                                                type="radio"
                                                name="sprice"
                                                value="(price_variant:product > 4000000)"
                                                data-price="4000000"
                                                id="price-filter-4"
                                            />
                                            <label for="price-filter-4"
                                                >Trên 4,000,000đ</label
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-main">
                        <div class="product-main__heading">
                            <h2
                                class="product-main__tittle"
                                data-aos="fade-left"
                            >
                                Kết Quả Tìm Kiếm Cho Từ Khóa: Thức Ăn
                            </h2>
                            <p class="product-main__qnt-available">
                                Có 101 Sản phẩm
                            </p>
                        </div>
                        <div class="product-main__sort">
                            <p class="product-main__sort-label">Chế độ xem</p>
                            <div class="product-main__sort-view">
                                <img
                                    src="./assets/img/list.png"
                                    alt="list"
                                    class="sort-view__icon-list"
                                />
                                <img
                                    src="./assets/img/grid.png"
                                    alt="grid"
                                    class="sort-view__icon-grid"
                                />
                            </div>
                            <div class="product-main__sort-select">
                                <span class="sort-sellect__content"
                                    >Sắp xếp sản phẩm</span
                                >
                                <img
                                    src="./assets/img/down-arrow.png"
                                    alt="down-arrow"
                                    class="sort-sellect__icon"
                                />
                                <ul class="sort-sellect-list">
                                    <li>Giá cao thấp xuống cao</li>
                                    <li>Giá thấp đến cao</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-list">
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="0"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-1.webp"
                                            alt="Thức Ăn Hạt Cho Mèo Trưởng Thành vị Thịt Gà và Cá Hồi Natural Core 10KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Mèo Trưởng Thành vị
                                            Thịt Gà và Cá Hồi Natural Core 10KG
                                        </div>
                                        <span class="product-item__price"
                                            >1.131.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-2.jpg"
                                            alt="Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị Gà 1.2KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị
                                            Gà 1.2KG
                                        </div>
                                        <span class="product-item__price"
                                            >209.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-3.webp"
                                            alt="Thức Ăn Hạt Cho Chó Trưởng Thành Zoi Dog Mix Vị 1Kg"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Chó Trưởng Thành Zoi
                                            Dog Mix Vị 1Kg
                                        </div>
                                        <span class="product-item__price"
                                            >30.500đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="0"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-4.png"
                                            alt="Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi Cats Eye 1.5KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi
                                            Cats Eye 1.5KG
                                        </div>
                                        <span class="product-item__price"
                                            >122.500đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-5.png"
                                            alt="Thức Ăn Hạt Mềm Cho Chó Già Zenith Senior 1.2KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Mềm Cho Chó Già Zenith
                                            Senior 1.2KG
                                        </div>
                                        <span class="product-item__price"
                                            >188.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-6.webp"
                                            alt="Thức Ăn Cho Mèo Con Reflex Kitten Vị Gà & Gạo 2KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Cho Mèo Con Reflex Kitten Vị
                                            Gà & Gạo 2KG
                                        </div>
                                        <span class="product-item__price"
                                            >200.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="0"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-7.webp"
                                            alt="Thức Ăn Cho Mèo Con Reflex Kitten Vị Gà & Gạo 2KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Cho Mèo Con Reflex Kitten Vị
                                            Gà & Gạo 2KG
                                        </div>
                                        <span class="product-item__price"
                                            >229.500đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-8.webp"
                                            alt="Thức Ăn Hạt Cho Chó Lớn Royal Canin Maxi Adult 1KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Chó Lớn Royal Canin
                                            Maxi Adult 1KG
                                        </div>
                                        <span class="product-item__price"
                                            >183.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-9.webp"
                                            alt="Thức Ăn Cho Mèo Con Reflex Plus Kitten (Nhập khẩu Thổ Nhĩ Kỳ)"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Cho Mèo Con Reflex Plus
                                            Kitten (Nhập khẩu Thổ Nhĩ Kỳ)
                                        </div>
                                        <span class="product-item__price"
                                            >150.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="0"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-10.webp"
                                            alt="Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi Đa Đạm Natural Core ECO C1"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi Đa
                                            Đạm Natural Core ECO C1
                                        </div>
                                        <span class="product-item__price"
                                            >150.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-11.webp"
                                            alt="Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi Natural Core 95% Hữu Cơ 1kg"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi
                                            Natural Core 95% Hữu Cơ 1kg
                                        </div>
                                        <span class="product-item__price"
                                            >325.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-12.jpg"
                                            alt="Thức ăn Cho Chó Diamond Naturals Gà & Gạo 2KG"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức ăn Cho Chó Diamond Naturals Gà
                                            & Gạo 2KG
                                        </div>
                                        <span class="product-item__price"
                                            >295.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="0"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-13.webp"
                                            alt="Thức Ăn Hạt Mềm Chó ANF Soft"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Hạt Mềm Chó ANF Soft
                                        </div>
                                        <span class="product-item__price"
                                            >55.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-14.jpg"
                                            alt="Thức Ăn Cho Chó Trưởng Thành Taste Of The Wild Adult 12.2kg"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Cho Chó Trưởng Thành Taste
                                            Of The Wild Adult 12.2kg
                                        </div>
                                        <span class="product-item__price"
                                            >2.190.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="product-list__item"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <a href="./assets/link/detail.html">
                                    <div class="product-item__thumbnail">
                                        <img
                                            src="./assets/img/pro-15.webp"
                                            alt="Thức Ăn Cho Mèo Mọi Lứa Tuổi Cats Eye 13.5 kg"
                                            class="product-item__img"
                                        />
                                        <div class="product-item__cta">
                                            <a
                                                href="#!"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping product-item__cart"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="product-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye product-item__view"
                                                ></i>
                                                <span
                                                    class="product-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item__info">
                                        <div
                                            class="product-item__name line-clamp"
                                            style="padding-bottom: 1px"
                                        >
                                            Thức Ăn Cho Mèo Mọi Lứa Tuổi Cats
                                            Eye 13.5 kg
                                        </div>
                                        <span class="product-item__price"
                                            >1.050.000đ</span
                                        >
                                        <button class="product-item__btn">
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="product-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        300.000₫
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
                        <strong style="font-weight: 600">300.000₫</strong>
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

        <!-- Pagination -->
        <nav class="pagination">
            <div class="container">
                <div class="page-list">
                    <span class="tittle-page">Tổng 40 Trang</span>
                    <div class="page-item back-page">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="page-item current-page">1</div>
                    <div class="page-item">2</div>
                    <div class="page-item">3</div>
                    <div class="page-item">4</div>
                    <div class="page-item">...</div>
                    <div class="page-item">40</div>
                    <div class="page-item next-page">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                </div>
            </div>
        </nav>

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
                                    src="//bizweb.dktcdn.net/100/501/740/themes/929449/assets/payment.png?1726189697911"
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
