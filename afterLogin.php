<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Petshop</title>
        <link rel="stylesheet" href="./assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <!-- Embed Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Sen:wght@700&display=swap"
            rel="stylesheet"
        />
        <!-- Embed Fonts -->
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
        <style>
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
            /* User box */
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
        </style>
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
                            <a href="afterLogin.php">
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
                                                style="
                                                    color: red;
                                                    margin-left: 4px;
                                                "
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
                                            href="afterDetail.php"
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
                                                    thật CATIDEA Fairy Chef
                                                    Freeze Dried Raw 6in1 Thương
                                                    hiệu CATIDEA
                                                </span>
                                                <span class="search-item__price"
                                                    >155.000đ</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="afterDetail.php"
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
                                                    Pate cho chó nước sốt vị
                                                    thịt bò PEDIGREE Pouch Beef
                                                    Thương hiệu PEDIGREE
                                                </span>
                                                <span class="search-item__price"
                                                    >25.000đ</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="afterDetail.php"
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
                                                    Bánh thưởng cho mèo vị bạc
                                                    hà MEOW FUN Peppermint Cod
                                                    Thương hiệu BUDGE
                                                </span>
                                                <span class="search-item__price"
                                                    >135.000đ</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="afterDetail.php"
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
                                                    Thức ăn cho mèo Anh lông
                                                    ngắn CATIDEA Fairy Chef
                                                    British Shorthair Thương
                                                    hiệu CATIDEA
                                                </span>
                                                <span class="search-item__price"
                                                    >315.000đ</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="afterDetail.php"
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
                                                    Thức ăn cho chó con PURINA
                                                    PRO PLAN Small &amp; Mini
                                                    Puppy Thương hiệu PURINA PRO
                                                    PLAN
                                                </span>
                                                <span class="search-item__price"
                                                    >135.000đ</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="afterDetail.php"
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
                                            href="afterDetail.php"
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
                                        <a
                                            href="afterProductPage.php"
                                        >
                                            Xem thêm kết quả có chứa
                                            <strong
                                                style="
                                                    color: red;
                                                    margin-left: 3px;
                                                "
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
                                                        href="Personal_info.php"
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
                                                        <p
                                                            class="user-box__name"
                                                        >
                                                            Thông Tin Tài Khoản
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="user-box__item">
                                                    <a
                                                        href="yourOrder.php"
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
                                                        <p
                                                            class="user-box__name"
                                                        >
                                                            Đơn Hàng
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="user-box__item">
                                                    <a
                                                        href="address.php"
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
                                                        <p
                                                            class="user-box__name"
                                                        >
                                                            Địa Chỉ
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="user-box__item">
                                                    <a
                                                        href="checkOrder.php"
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
                                                        <p
                                                            class="user-box__name"
                                                        >
                                                            Kiểm Tra Đơn Hàng
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="user-box__item">
                                                    <a
                                                        href="/index.php"
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
                                                        <p
                                                            class="user-box__name"
                                                        >
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
                                                    href="afterDetail.php"
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
                                                            Pate Mèo Mẹ & Mèo
                                                            Con Royal Canin
                                                            Mother & Babycat
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
                                                    <button
                                                        class="cart-box__close"
                                                    >
                                                        <i
                                                            class="fa-solid fa-xmark"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="cart-box__item">
                                                <a
                                                    href="afterDetail.php"
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
                                                            Thức Ăn Hạt Cho Chó
                                                            Con Giống Vừa Royal
                                                            Canin Medium Puppy
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
                                                    <button
                                                        class="cart-box__close"
                                                    >
                                                        <i
                                                            class="fa-solid fa-xmark"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="cart-box__item">
                                                <a
                                                    href="afterDetail.php"
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
                                                            Ketohexidine Trị
                                                            Viêm Da Lông Chó Mèo
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
                                                    <button
                                                        class="cart-box__close"
                                                    >
                                                        <i
                                                            class="fa-solid fa-xmark"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="cart-box__item">
                                                <a
                                                    href="afterDetail.php"
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
                                                            Catnip cho mèo dạng
                                                            que BIOLINE Catnip
                                                            Dental Stick Thương
                                                            hiệu BIOLINE
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
                                                    <button
                                                        class="cart-box__close"
                                                    >
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
                                            href="gioHang.php"
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="resultCataAfter.php">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
                                Sữa tắm | Dầu gội
                            </a>
                        </li>

                        <!-- Dụng cụ ăn uống -->
                        <li class="dropdown__item dog-dropdown__item">
                            <a href="resultCataAfter.php">
                                Dụng cụ ăn uống
                            </a>
                        </li>

                        <!-- Vệ sinh -->
                        <li class="dropdown__item health-dropdown__item">
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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
                            <a href="resultCataAfter.php">
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

            <!-- Flash Sale -->
            <div class="top-seller">
                <div class="container">
                    <div class="top-seller__body">
                        <div class="top-seller__top">
                            <h2 class="top-seller__tittle">
                                KHUYẾN MÃI NGAY HÔM NAY
                            </h2>
                            <div class="top-seller__count">
                                <div class="top-seller__count-box">
                                    <p id="days" class="number">0</p>
                                    <span class="bottom">Ngày</span>
                                </div>
                                <div class="top-seller__count-box">
                                    <p id="hour" class="number">00</p>
                                    <span class="bottom">Giờ</span>
                                </div>
                                <div class="top-seller__count-box">
                                    <p id="minute" class="number">00</p>
                                    <span class="bottom">Phút</span>
                                </div>
                                <div class="top-seller__count-box">
                                    <p id="second" class="number">00</p>
                                    <span class="bottom">Giây</span>
                                </div>
                            </div>
                        </div>
                        <div class="seller-wrap">
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-1.jpg"
                                        alt="Royal Canin"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Súp thưởng cho mèo vị gà cá hồi
                                            BIOLINE Chicken Salmon
                                        </p>
                                        <span class="seller-price"
                                            >50.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-2.jpg"
                                        alt="Snack bánh thưởng cho mèo CIAO Bonito, Chicken & Squid vị cá ngừ, thịt gà và mực"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Snack bánh thưởng cho mèo CIAO
                                            Bonito, Chicken & Squid vị cá ngừ,
                                            thịt gà và mực
                                        </p>
                                        <span class="seller-price"
                                            >35.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-3.jpg"
                                        alt="Xương cho chó gặm vị sữa hình bàn chải VEGEBRAND Orgo High Calcium Milk Flavor"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Xương cho chó gặm vị sữa hình bàn
                                            chải VEGEBRAND Orgo High Calcium
                                            Milk Flavor
                                        </p>
                                        <span class="seller-price"
                                            >50.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-4.jpg"
                                        alt="Pate cho chó vị gan gà hầm nước sốt JERHIGH Chicken Liver Chunks In Gravy"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Pate cho chó vị gan gà hầm nước sốt
                                            JERHIGH Chicken Liver Chunks In
                                            Gravy
                                        </p>
                                        <span class="seller-price"
                                            >35.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-5.jpg"
                                        alt="Balo đựng chó mèo phi hành gia LOFFE Square Transparent"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Balo đựng chó mèo phi hành gia LOFFE
                                            Square Transparent
                                        </p>
                                        <span class="seller-price"
                                            >595.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="seller-item">
                                <a href="afterDetail.php">
                                    <img
                                        src="./assets/img/seller-6.jpg"
                                        alt="Sữa tắm cho chó trị ve rận BBN Killing Mites Shampoo"
                                        class="seller-img"
                                    />
                                    <div class="seller-item__info">
                                        <p class="seller-name line-clamp">
                                            Sữa tắm cho chó trị ve rận BBN
                                            Killing Mites Shampoo
                                        </p>
                                        <span class="seller-price"
                                            >150.000đ</span
                                        >
                                        <button class="seller-cart">
                                            <p>Mua Ngay</p>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="top-seller__action">
                            <a href="#!" class="seeall-btn">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature -->
            <div class="features container">
                <div class="features-container">
                    <div
                        class="feature"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="2000"
                    >
                        <div class="feature__icon feature__icon-shipping">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3 class="feature__tittle">Giao hàng toàn quốc</h3>
                        <p class="feature__desc">
                            Freeshop với hoá đơn trên 500K
                        </p>
                    </div>
                    <div
                        class="feature"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="2000"
                    >
                        <div class="feature__icon feature__icon-certificate">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                        <h3 class="feature__tittle">Sản phẩm chất lượng</h3>
                        <p class="feature__desc">Đảm bảo hàng chính hãng</p>
                    </div>
                    <div
                        class="feature"
                        data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="2000"
                    >
                        <div class="feature__icon feature__icon-gift">
                            <i class="fas fa-gift"></i>
                        </div>
                        <h3 class="feature__tittle">Ưu đãi siêu hấp dẫn</h3>
                        <p class="feature__desc">
                            Tích điểm đổi quà tặng ưu đãi
                        </p>
                    </div>
                </div>
            </div>

            <!-- New Product -->
            <section class="new-product">
                <div class="container">
                    <div
                        class="new-product__tittle"
                        data-aos="fade-up"
                        data-aos-delay="0"
                        data-aos-duration="2000"
                    >
                        <h2>SẢN PHẨM MỚI</h2>
                    </div>
                    <div class="new-product__content">
                        <div class="new-product__list">
                            <div
                                class="new-product__item"
                                data-aos="fade-up"
                                data-aos-delay="100"
                                data-aos-duration="2000"
                            >
                                <a href="detail.php">
                                    <div class="new-item__thumbnail">
                                        <img
                                            src="./assets/img/newproduct3.jpg"
                                            alt="Máy mài móng chó mèo JOYU Pet Nail Grinder N8
    Thương hiệu JOYU"
                                            class="new-item__img"
                                        />
                                    </div>
                                    <div class="new-item__info">
                                        <p class="new-item__name line-clamp">
                                            Máy mài móng chó mèo JOYU Pet Nail
                                            Grinder N8 Thương hiệu JOYU
                                        </p>
                                        <div class="new-item__price">
                                            <span class="new-item__price--old"
                                                >440.000đ
                                            </span>
                                            <span class="new-item__price--new"
                                                >220.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="new-item__label">
                                        <span>-50%</span>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="new-product__item"
                                data-aos="fade-up"
                                data-aos-delay="300"
                                data-aos-duration="2000"
                            >
                                <a href="detail.php">
                                    <div class="new-item__thumbnail">
                                        <img
                                            src="./assets/img/newproduct5.jpg"
                                            alt="Đồ chơi đĩa bay bánh thưởng cho chó mèo PAW Pet Frisbee Leakage Toy
    Thương hiệu PAW"
                                            class="new-item__img"
                                        />
                                    </div>
                                    <div class="new-item__info">
                                        <p class="new-item__name line-clamp">
                                            Đồ chơi đĩa bay bánh thưởng cho chó
                                            mèo PAW Pet Frisbee Leakage Toy
                                            Thương hiệu PAW
                                        </p>
                                        <div class="new-item__price">
                                            <span class="new-item__price--old"
                                                >140.000đ
                                            </span>
                                            <span class="new-item__price--new"
                                                >62.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="new-item__label">
                                        <span> -56%</span>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="new-product__item"
                                data-aos="fade-up"
                                data-aos-delay="600"
                                data-aos-duration="2000"
                            >
                                <a href="detail.php">
                                    <div class="new-item__thumbnail">
                                        <img
                                            src="./assets/img/newproduct6.jpg"
                                            alt="Túi đựng chó mèo ANIME hình họa tiết White Cats
    Thương hiệu ANIME"
                                            class="new-item__img"
                                        />
                                    </div>
                                    <div class="new-item__info">
                                        <p class="new-item__name line-clamp">
                                            Túi đựng chó mèo ANIME hình họa tiết
                                            White Cats Thương hiệu ANIME
                                        </p>
                                        <div class="new-item__price">
                                            <span class="new-item__price--old"
                                                >300.000đ
                                            </span>
                                            <span class="new-item__price--new"
                                                >150.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="new-item__label">
                                        <span> -57%</span>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="new-product__item"
                                data-aos="fade-up"
                                data-aos-delay="900"
                                data-aos-duration="2000"
                            >
                                <a href="detail.php">
                                    <div class="new-item__thumbnail">
                                        <img
                                            src="./assets/img/newproduct9.jpg"
                                            alt="Nhà vệ sinh cho mèo PAW Space Helmet Cat Litter Boxes
                                        Thương hiệu PAW"
                                            class="new-item__img"
                                        />
                                    </div>
                                    <div class="new-item__info">
                                        <p class="new-item__name line-clamp">
                                            Nhà vệ sinh cho mèo PAW Space Helmet
                                            Cat Litter Boxes Thương hiệu PAW
                                        </p>
                                        <div class="new-item__price">
                                            <span class="new-item__price--old"
                                                >525.000đ
                                            </span>
                                            <span class="new-item__price--new"
                                                >275.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="new-item__label">
                                        <span> -29%</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="new-product__btn">Xem Thêm</a>
                </div>
            </section>

            <!-- Banner -->
            <div class="advertisement">
                <div class="container">
                    <img
                        src="./assets/img/banner.webp"
                        alt="advertisement"
                        class="ad-img"
                    />
                </div>
            </div>

            <!-- Food For Dog -->
            <section class="dog-food">
                <div class="container">
                    <div
                        class="dog-food__tittle food-tittle"
                        data-aos="fade-up"
                        data-aos-delay="0"
                        data-aos-duration="2000"
                    >
                        <h2>THỨC ĂN CHO CHÓ</h2>
                    </div>
                    <div class="dog-food__content food-content">
                        <div class="dog-food__list food-list">
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="100"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-1.jpg"
                                            alt="Thức ăn cho chó con PURINA PRO PLAN Small & Mini Puppy
                                        Thương hiệu PURINA PRO PLAN"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn cho chó con PURINA PRO PLAN
                                            Small & Mini Puppy Thương hiệu
                                            PURINA PRO PLAN
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >135.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="200"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-2.jpg"
                                            alt="Thức ăn cho chó Phốc Sóc MKB All Life Stages Formula Nutrition
                                        Thương hiệu MKB"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn cho chó Phốc Sóc MKB All
                                            Life Stages Formula Nutrition Thương
                                            hiệu MKB
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >315.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="300"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-3.jpg"
                                            alt="Thức ăn cho chó MKB MEC Wild Taste Nutrition for Poodle
                                        Thương hiệu MKB"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn cho chó MKB MEC Wild Taste
                                            Nutrition for Poodle Thương hiệu MKB
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >265.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="400"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-4.jpg"
                                            alt="Pate cho chó nước sốt vị thịt bò PEDIGREE Pouch Beef
                                        Thương hiệu PEDIGREE"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Pate cho chó nước sốt vị thịt bò
                                            PEDIGREE Pouch Beef Thương hiệu
                                            PEDIGREE
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >25.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="500"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-5.jpg"
                                            alt="Sốt thịt cừu hầm lúa mạch rau củ cho chó JERHIGH Lamb Stew With Barley Rice Vegetable"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Sốt thịt cừu hầm lúa mạch rau củ cho
                                            chó JERHIGH Lamb Stew With Barley
                                            Rice Vegetable
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >70.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="600"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-6.jpg"
                                            alt="Xúc xích cho chó vị thịt gà JERHIGH Hot Dog Bar Chicken Meat
                                        Thương hiệu JERHIGH"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Xúc xích cho chó vị thịt gà JERHIGH
                                            Hot Dog Bar Chicken Meat Thương hiệu
                                            JERHIGH
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >60.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="700"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-7.jpg"
                                            alt="Bánh kem thạch cho chó vị gà việt quất JERHIGH Panna Cotta Chicken Blueberry Mousse"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Bánh kem thạch cho chó vị gà việt
                                            quất JERHIGH Panna Cotta Chicken
                                            Blueberry Mousse
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >45.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="dog-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="800"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/dogfood-8.jpg"
                                            alt="Sữa bột cho chó BBN Goat’s Milk New Zealand
                                        Thương hiệu BBN"
                                            class="dogfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="dogfood-item__info food-item__info"
                                    >
                                        <div
                                            class="dogfood-item__name line-clamp food-item__name"
                                        >
                                            Sữa bột cho chó BBN Goat’s Milk New
                                            Zealand Thương hiệu BBN
                                        </div>
                                        <span
                                            class="dogfood-item__price food-item__price"
                                            >320.000đ
                                        </span>
                                        <button
                                            class="dogfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="new-product__btn">Xem Thêm</a>
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
                        <h2
                            class="view-product__tittle"
                            style="font-weight: 600"
                        >
                            Túi đựng chó mèo ANIME hình họa tiết White Cats
                            Thương hiệu ANIME
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
                                <span
                                    class="box-size__item"
                                    style="cursor: pointer"
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

            <!-- Food For Cat -->
            <section class="cat-food">
                <div class="container">
                    <div
                        class="cat-food__tittle food-tittle"
                        data-aos="fade-up"
                        data-aos-delay="0"
                        data-aos-duration="2000"
                    >
                        <h2>THỨC ĂN CHO MÈO</h2>
                    </div>
                    <div class="cat-food__content food-content">
                        <div class="cat-food__list food-list">
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="200"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-1.jpg"
                                            alt="Thức ăn cho mèo Anh lông ngắn CATIDEA Fairy Chef British Shorthair
                                        Thương hiệu CATIDEA"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn cho mèo Anh lông ngắn
                                            CATIDEA Fairy Chef British Shorthair
                                            Thương hiệu CATIDEA
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >315.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="400"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-2.jpg"
                                            alt="Thức ăn cho mèo con vị cá hồi cá ngừ PURINA PRO PLAN Kitten Starter
                                        Thương hiệu PURINA PRO PLAN"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn cho mèo con vị cá hồi cá ngừ
                                            PURINA PRO PLAN Kitten Starter
                                            Thương hiệu PURINA PRO PLAN
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >500.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="600"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-3.jpg"
                                            alt="Thức ăn sấy khô cho mèo thịt thật CATIDEA Fairy Chef Freeze Dried Raw 6in1
                                        Thương hiệu CATIDEA"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Thức ăn sấy khô cho mèo thịt thật
                                            CATIDEA Fairy Chef Freeze Dried Raw
                                            6in1 Thương hiệu CATIDEA
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >155.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="800"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-4.jpg"
                                            alt="Nước sốt pate cho mèo CIAO vị ức gà và thanh cua
                                        Thương hiệu CIAO"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Nước sốt pate cho mèo CIAO vị ức gà
                                            và thanh cua Thương hiệu CIAO
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >35.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="1000"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-5.jpg"
                                            alt="Snack bánh thưởng cho mèo CIAO Seafood Scallop vị hải sản sò điệp
                                        Thương hiệu CIAO"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Snack bánh thưởng cho mèo CIAO
                                            Seafood Scallop vị hải sản sò điệp
                                            Thương hiệu CIAO
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >35.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="1200"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-6.jpg"
                                            alt="Bánh thưởng cho mèo vị bạc hà MEOW FUN Peppermint Cod
                                        Thương hiệu BUDGE"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Bánh thưởng cho mèo vị bạc hà MEOW
                                            FUN Peppermint Cod Thương hiệu BUDGE
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >50.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="1400"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-7.jpg"
                                            alt="Catnip cho mèo dạng que BIOLINE Catnip Dental Stick
                                        Thương hiệu BIOLINE"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Catnip cho mèo dạng que BIOLINE
                                            Catnip Dental Stick Thương hiệu
                                            BIOLINE
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >50.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="cat-food__item food-item"
                                data-aos="fade-up"
                                data-aos-duration="2000"
                                data-aos-delay="1600"
                            >
                                <a href="detail.php">
                                    <div class="food-item__thumbnail">
                                        <img
                                            src="./assets/img/catfood-8.jpg"
                                            alt="Xúc xích cho mèo vị cá biển BIOLINE Cat Cod Sausage
                                        Thương hiệu BIOLINE"
                                            class="catfood-item__img food-item__img"
                                        />
                                        <div class="food-item__cta">
                                            <a
                                                href="#!"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-cart-shopping food-item__cart"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Tùy chọn</span
                                                >
                                            </a>
                                            <a
                                                href="#view-modal"
                                                class="food-item__icon"
                                            >
                                                <i
                                                    class="fa-solid fa-eye food-item__view"
                                                ></i>
                                                <span
                                                    class="food-item__action-name"
                                                    >Xem nhanh</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="catfood-item__info food-item__info"
                                    >
                                        <div
                                            class="catfood-item__name line-clamp food-item__name"
                                        >
                                            Xúc xích cho mèo vị cá biển BIOLINE
                                            Cat Cod Sausage Thương hiệu BIOLINE
                                        </div>
                                        <span
                                            class="catfood-item__price food-item__price"
                                            >70.000đ
                                        </span>
                                        <button
                                            class="catfood-item__btn food-item__btn"
                                        >
                                            <img
                                                src="./assets/img/shopping-bag.png"
                                                alt="Shopping bag"
                                                class="food-item__bag"
                                            />
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="new-product__btn">Xem Thêm</a>
                </div>
            </section>

            <!-- Feedback -->
            <section class="feedback">
                <div class="container">
                    <div
                        class="feedback__heading"
                        data-aos="fade-up"
                        data-aos-delay="0"
                        data-aos-duration="2000"
                    >
                        <h2 class="feedback__tittle">Đánh giá từ khách hàng</h2>
                        <p class="feedback__desc">
                            Hơn 1.000 khách hàng đã hài lòng về dịch vụ và sảnđ
                            phẩm của chúng tôi
                        </p>
                    </div>
                    <div class="feedback-content">
                        <div
                            class="feedback__list"
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="2000"
                        >
                            <div class="feedback-item">
                                <div class="feedback-item__vote">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="feedback-item__content">
                                    Mình rất đánh giá cao về chất lượng của sản
                                    phẩm. Thức ăn và dịch vụ chăm sóc cũng rất
                                    đa dạng, nhiều lựa chọn.
                                </p>
                                <div class="feedback-item__author">
                                    <img
                                        src="./assets/img/nhanvat1.webp"
                                        alt="Nguyen Thanh Tung"
                                        class="feedback-author__avatar"
                                    />
                                    <span class="feedback-author__name"
                                        >Thanh Tùng -
                                    </span>
                                    <span class="feedback-author__address"
                                        >Quận 2</span
                                    >
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-item__vote">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="feedback-item__content">
                                    Nhân viên của Antony Shop rất nhiệt tình và
                                    chuyên nghiệp, mình có thiện cảm ngay từ khi
                                    được tư vấn sản phẩm.
                                </p>
                                <div class="feedback-item__author">
                                    <img
                                        src="./assets/img/nhanvat2.webp"
                                        alt="Phuong Ly"
                                        class="feedback-author__avatar"
                                    />
                                    <span class="feedback-author__name"
                                        >Phương Ly -
                                    </span>
                                    <span class="feedback-author__address"
                                        >Quận 1</span
                                    >
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-item__vote">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="feedback-item__content">
                                    Chất lượng dịch vụ khi mình đến lựa chọn sản
                                    phẩm là điều mình cảm thấy ấn tượng khi đến
                                    với Antony Shop, rất hài lòng
                                </p>
                                <div class="feedback-item__author">
                                    <img
                                        src="./assets/img/nhanvat3.webp"
                                        alt="Trần Minh Hiếu"
                                        class="feedback-author__avatar"
                                    />
                                    <span class="feedback-author__name"
                                        >Minh Hiếu -
                                    </span>
                                    <span class="feedback-author__address"
                                        >Quận 1</span
                                    >
                                </div>
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
                                <h4
                                    class="footer-heading footer-heading__strong"
                                >
                                    Thông Tin Cửa Hàng
                                </h4>
                                <div class="footer-content">
                                    <p class="footer-introduce">
                                        Antony là cửa hàng chuyên cung cấp thức
                                        ăn và phụ kiện cho thú cưng tọa lạc tại
                                        Quận 5. Đến với Antony, khách yêu
                                        shopping tận lực, Antony tư vấn tận tâm.
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
                            <div
                                class="grid__column"
                                style="padding-left: 100px"
                            >
                                <h4
                                    class="footer-heading footer-heading__strong"
                                >
                                    Hỗ Trợ Khách Hàng
                                </h4>
                                <ul class="footer-list">
                                    <li class="footer-item">
                                        <a class="footer-item__link"
                                            >Tìm Kiếm</a
                                        >
                                    </li>
                                    <li class="footer-item">
                                        <a class="footer-item__link"
                                            >Giới Thiệu</a
                                        >
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
                            <div
                                class="grid__column"
                                style="padding-left: 50px"
                            >
                                <h4
                                    class="footer-heading footer-heading__strong"
                                >
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
                                            >19 Hồ Biểu Chánh, Q.Phú Nhuận,
                                            P.12, TP-HCM</span
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
                                <h4
                                    class="footer-heading footer-heading__strong"
                                >
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
                                        style="
                                            margin-bottom: 0;
                                            margin-top: 20px;
                                        "
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
                    <a
                        class="footer-last-heading footer-nolist"
                        target="_blank"
                    >
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
                    var searchInput = document.querySelector(
                        ".search-form__input"
                    );
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
                            function formatNumber (number) {
                if (number < 10)
                    return '0'+number;
                return number;
            }
            var timeleft = 10000;

            setInterval(() => {
                --timeleft;
                showTime();
            }, 1000);
            
            function showTime () {
                var time_left = timeleft;
                var days_left = time_left / 86400;
                time_left %= 86400;
                var hour_left = time_left / 3600;
                time_left %= 3600;
                var minute_left = time_left / 60;
                time_left %= 60;
                let days_box = document.getElementById("days");
                let hour_box = document.getElementById("hour");
                let minute_box = document.getElementById("minute");
                let second_box = document.getElementById("second");
                days_box.innerText = formatNumber(parseInt(days_left));
                hour_box.innerText = formatNumber(parseInt(hour_left));
                minute_box.innerText = formatNumber(parseInt(minute_left));
                second_box.innerText = formatNumber(parseInt(time_left));
            }
            </script>
        </body>
    </head>
</php>
