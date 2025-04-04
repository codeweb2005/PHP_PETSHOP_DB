<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập và là admin chưa
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: /login.php?error=Bạn không có quyền truy cập");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Trang Tổng Quan</title>
        <link rel="stylesheet" href="/assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/admin_home.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- AOS animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <style>
        tr th:nth-child(6) {
            padding-left: 30px;
        }
        tr td:nth-child(3) {
            white-space: nowrap;
            max-width: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        tr td:nth-child(5) {
            padding-left: 40px;
        }
    </style>
    <body>
        <div class="container">
            <aside class="sidebar open">
                <div class="top-sidebar">
                    <a href="admin_home.php" class="petshop-logo"
                        ><img src="/assets/img/mainlogo.png" alt="Antony Logo"
                    /></a>
                </div>
                <div class="middle-sidebar">
                    <ul class="sidebar-list">
                        <li class="sidebar-list-item active">
                            <a href="admin_home.php" class="sidebar-link">
                                <div class="sidebar-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="24"
                                        height="24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar">
                                    Trang tổng quan
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-list-item">
                            <a href="admin_product.php" class="sidebar-link">
                                <div class="sidebar-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="24"
                                        height="24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar" id="name-acc">
                                    Sản Phẩm
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-list-item">
                            <a href="admin_clients.php" class="sidebar-link" id="logout-acc">
                                <div class="sidebar-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="24"
                                        height="24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar">Khách Hàng</div>
                            </a>
                        </li>
                        <li class="sidebar-list-item">
                            <a href="admin_order.php" class="sidebar-link" id="logout-acc">
                                <div class="sidebar-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="24"
                                        height="24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar">Đơn Hàng</div>
                            </a>
                        </li>
                        <li class="sidebar-list-item">
                            <a href="admin_stastic.php" class="sidebar-link" id="logout-acc">
                                <div class="sidebar-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="24"
                                        height="24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar">Thống Kê</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-sidebar">
                    <ul class="sidebar-list">
                        <li class="sidebar-list-item user-logout">
                            <a href="/" class="sidebar-link">
                                <div class="sidebar-icon">
                                    <i
                                        class="fa-solid fa-circle-chevron-left"
                                    ></i>
                                </div>
                                <div class="hidden-sidebar">Trang chủ</div>
                            </a>
                        </li>
                        <li class="sidebar-list-item user-logout">
                            <a href="#" class="sidebar-link">
                                <div class="sidebar-icon">
                                    <i class="fa-regular fa-circle-user"></i>
                                </div>
                                <div class="hidden-sidebar" id="name-acc">
                                    Lit Truong
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-list-item user-logout">
                            <a href="login.php" class="sidebar-link" id="logout-acc">
                                <div class="sidebar-icon">
                                    <i
                                        class="fa-solid fa-arrow-right-from-bracket"
                                    ></i>
                                </div>
                                <div class="hidden-sidebar">Đăng xuất</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="content">
                <h3 class="content-tittle" data-aos="fade-left" data-aos-duration="1500">Trang Tổng Quan</h3>
                <div class="cards">
                    <div class="card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                        <div class="card-top">
                            <h4 class="card-tittle">Khách hàng</h4>
                            <div
                                class="card-img"
                                style="--costomer-bg: #ff5a1f"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="card-icon"
                                >
                                    <path
                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                                    ></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                        </div>
                        <strong class="card-amount">12</strong>
                        <a href="admin_clients.php" class="card-link">Tất cả khách hàng</a>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="card-top">
                            <h4 class="card-tittle">Sản phẩm</h4>
                            <div
                                class="card-img"
                                style="--costomer-bg: #3f83f8"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-shopping-cart text-info"
                                >
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path
                                        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <strong class="card-amount">09</strong>
                        <a href="admin_order.php" class="card-link">Tất cả đơn hàng</a>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <div class="card-top">
                            <h4 class="card-tittle">Doanh Thu</h4>
                            <div
                                class="card-img"
                                style="--costomer-bg: #0e9f6e"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-dollar-sign text-info"
                                >
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path
                                        d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <strong class="card-amount">2005</strong>
                        <a href="admin_stastic.php" class="card-link">Xem doanh thu</a>
                    </div>
                </div>
                <div class="recent-orders">
                    <h2 class="recent-order__tittle">Đơn hàng gần đây</h2>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Ảnh SP</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thời gian đặt hàng</th>
                                <th>Khách hàng</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td style="position: relative">
                                    <img
                                        src="/assets/img/pro-3.webp"
                                        alt="Product Image"
                                    />
                                </td>
                                <td>
                                    Thức Ăn Hạt Cho Chó Trưởng Thành Zoi Dog Mix
                                    Vị 1Kg
                                </td>
                                <td>OB5Q3JQY</td>
                                <td>2</td>
                                <td>30.500đ</td>
                                <td>27-08-2014 01:22:12</td>
                                <td>Văn Tuấn</td>
                                <td>
                                    <span class="status in-transit"
                                        >Chờ xử lý</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td style="position: relative">
                                    <img
                                        src="/assets/img/pro-4.png"
                                        alt="Product Image"
                                    />
                                </td>
                                <td>
                                    Thức Ăn Hạt Cho Mèo Mọi Lứa Tuổi Cats Eye
                                    1.5KG
                                </td>
                                <td>V5TTO7KX</td>
                                <td>7</td>
                                <td>122.500đ</td>
                                <td>25-08-2018 21:12:56</td>
                                <td>Văn Cường</td>
                                <td>
                                    <span class="status delivered"
                                        >Đã xử lý</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td style="position: relative">
                                    <img
                                        src="/assets/img/pro-13.webp"
                                        alt="Product Image"
                                    />
                                </td>
                                <td>Thức Ăn Hạt Mềm Chó ANF Soft</td>
                                <td>BP39T88P</td>
                                <td>4</td>
                                <td>55.000đ</td>
                                <td>24-08-2024 14:12:77</td>
                                <td>Thành Sơn</td>
                                <td>
                                    <span class="status delivered"
                                        >Đã xử lý</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td style="position: relative">
                                    <img
                                        src="/assets/img/pro-12.jpg"
                                        alt="Product Image"
                                    />
                                </td>
                                <td>
                                    Thức ăn Cho Chó Diamond Naturals Gà & Gạo
                                    2KG
                                </td>
                                <td>AYNPLUT7</td>
                                <td>3</td>
                                <td>295.000đ</td>
                                <td>23-10-2024 09:12:35</td>
                                <td>Thảo My</td>
                                <td>
                                    <span class="status delivered"
                                        >Đã xử lý</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td style="position: relative">
                                    <img
                                        src="/assets/img/pro-2.jpg"
                                        alt="Product Image"
                                    />
                                </td>
                                <td>
                                    Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị Gà
                                    1.2KG
                                </td>
                                <td>2HKOTFY8</td>
                                <td>1</td>
                                <td>209.000đ</td>
                                <td>23-08-2024 09:12:35</td>
                                <td>Kim Ngân</td>
                                <td>
                                    <span class="status delivered"
                                        >Đã xử lý</span
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="admin_order.php" class="view-details">Xem chi tiết</a>
                </div>
            </main>
        </div>
        <!-- JS Animation -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                once: "true",
            });
        </script>
    </body>
</html>
