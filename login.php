
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng Nhập Tài Khoản</title>
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
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
                        <a href="/index.php">
                            <img
                                src="./assets/img/mainlogo.png"
                                alt=""
                                class="logo"
                            />
                        </a>
                    </div>
                    <!-- Sign Up & Cart  -->
                    <div class="header__cta">
                        <div class="header__account">
                            <i class="fa-solid fa-user header-user"></i>
                            <p class="user-title">Account</p>
                            <div class="account-btn">
                                <a
                                    class="signin-btn btn"
                                >
                                    <span>Đăng nhập</span>
                                </a>
                                <a
                                    href="create_account.php"
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
                                    style="padding: 0 20px"
                                >
                                    <p class="cart-box__total--text">
                                        tổng tiền:
                                    </p>
                                    <p class="cart-box__total--price">0đ</p>
                                </div>
                                <form action="empty-cart.php">
                                    <button class="cart-box__btn">
                                        XEM GIỎ HÀNG
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Breadcrumb Bar -->
        <div class="breadcrumb-bar">
            <nav class="breadcrumb-nav">
                <a href="index.php">Trang chủ</a> /
                <span>Đăng nhập</span>
            </nav>
        </div>

        <!-- Form -->
        <div class="form-container">
            <h2 class="form-title">ĐĂNG NHẬP TÀI KHOẢN</h2>
            <p class="login-link">
                Bạn chưa có tài khoản?
                <a
                    href="create_account.php"
                    style="font-size: 1.5rem"
                    >Đăng ký tại đây</a
                >
            </p>
            <form action="./assets/php_function/auth.php" method="post" class="login-form">
                <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?=htmlspecialchars($_GET['error']); ?>
            </div>
            <?php } ?>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu *</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Mật khẩu"
                        required
                    />
                </div>
                <p class="forgot-password">
                    <a href="#" style="font-size: 1.5rem"
                        >Quên mật khẩu? Nhấn vào đây</a
                    >
                </p>
                <button
                    type="submit"
                    class="submit-btn"
                    style="font-weight: 600; display: inline-block"
                >
                    Đăng nhập
                </button>
            </form>
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
