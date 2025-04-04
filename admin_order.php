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
        <title>Quản Lí Đơn Hàng</title>
        <link rel="stylesheet" href="/assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/admin_clients.css" />
        <link rel="stylesheet" href="./assets/link/sidebarAdmin.css" />
        <!-- Embeded Icons -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
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
        tr td:nth-child(5) {
            padding-bottom: 30px;
        }
        tr td:nth-child(6) {
            padding-top: 30px;
        }
        tr td:first-child {
            padding-left: 50px;
        }
        .status {
            margin-top: -20px;
        }
        .status-blocked {
            margin-left: -9px;
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
                        <li class="sidebar-list-item">
                            <a
                                href="admin_home.php"
                                class="sidebar-link"
                            >
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
                            <a
                                href="admin_product.php"
                                class="sidebar-link"
                            >
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
                            <a
                                href="admin_clients.php"
                                class="sidebar-link"
                                id="logout-acc"
                            >
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
                        <li class="sidebar-list-item active">
                            <a href="" class="sidebar-link" id="logout-acc">
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
                            <a
                                href="admin_stastic.php"
                                class="sidebar-link"
                                id="logout-acc"
                            >
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
            <section class="content">
                <h3 class="content-tittle" data-aos="fade-left" data-aos-duration="1500">Quản Lý Đơn Hàng</h3>
                <div class="admin-control">
                    <div class="admin-control-left">
                        <select name="tinh-trang-user" id="tinh-trang-user">
                            <option selected>Tất cả</option>
                            <option value="">Đã xử lý</option>
                            <option value="">Chưa xử lý</option>
                        </select>
                    </div>
                    <div class="admin-control-center">
                        <form action="" class="form-search">
                            <span class="search-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input
                                type="text"
                                id="form-search-product"
                                class="form-search-input"
                                placeholder="Tìm kiếm mã đơn, khách hàng..."
                            />
                        </form>
                    </div>
                    <div class="admin-control-right">
                        <form action="" class="filter-date">
                            <div>
                                <label for="time-start">Từ</label>
                                <input
                                    type="date"
                                    class="form-control-date"
                                    id="time-start-user"
                                />
                            </div>
                            <div>
                                <label for="time-end">Đến</label>
                                <input
                                    type="date"
                                    class="form-control-date"
                                    id="time-end-user"
                                />
                            </div>
                        </form>
                        <a href="" class="btn-reset-order">
                            <i class="fa-solid fa-rotate-right"></i>
                        </a>
                    </div>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <td>Mã đơn</td>
                                <td>Khách hàng</td>
                                <td>Ngày đặt</td>
                                <td>Tổng tiền</td>
                                <td>Trạng thái</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once "./assets/php_function/display_order.php"; 
                            displayOrders($conn);
                            ?>
                        </tbody>
                    </table>
                    <div class="page-nav table-page">
                        <ul class="pages">
                            <li class="page previous-page">
                                <svg
                                    viewBox="64 64 896 896"
                                    focusable="false"
                                    data-icon="left"
                                    width="12px"
                                    height="12px"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"
                                    ></path>
                                </svg>
                            </li>
                            <li class="page current-page">1</li>
                            <li class="page">2</li>
                            <li class="page">3</li>
                            <li class="page">4</li>
                            <li class="page next-page">
                                <svg
                                    viewBox="64 64 896 896"
                                    focusable="false"
                                    data-icon="right"
                                    width="12px"
                                    height="12px"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"
                                    ></path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Modal View Detail -->
            <div class="modal-view">
                <input
                    type="checkbox"
                    name="view-order"
                    id="view-order"
                    class="view-order-checkbox"
                    hidden
                />
                <label for="view-order" class="modal-overlay"></label>
                <div class="view-order-wrap">
                    <label for="view-order" class="modal-close">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                            width="24px"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18 18 6M6 6l12 12"
                            />
                        </svg>
                    </label>
                    <h3 class="view-title">Chi tiết đơn hàng</h3>
                    <div class="view-content">
                        <div class="view-content-left">
                            <div class="product-item">
                                <div class="product-item__thumbnail">
                                    <img
                                        src="/assets/img/pro-2.jpg"
                                        alt="Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị Gà 1.2KG"
                                        class="product-item__img"
                                    />
                                </div>
                                <div class="product-item__info" style="flex: 1;">
                                    <div class="product-info__heading">
                                        <p class="product-item__name">
                                            Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị
                                            Gà 1.2KG
                                        </p>
                                        <p class="product-item__price">
                                            209.000đ
                                        </p>
                                    </div>
                                    <div class="product-item__note">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6"
                                            width="16px"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"
                                            />
                                        </svg>
                                        <span>Không có ghi chú</span>
                                    </div>
                                    <p class="product-item__qty">Số lượng: 3</p>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-item__thumbnail">
                                    <img
                                        src="/assets/img/phukien2.webp"
                                        alt="Túi Vận Chuyển Chó Mèo Có Ngăn Phụ"
                                        class="product-item__img"
                                    />
                                </div>
                                <div class="product-item__info" style="flex: 1;">
                                    <div class="product-info__heading">
                                        <p class="product-item__name">
                                            Túi Vận Chuyển Chó Mèo Có Ngăn Phụ
                                        </p>
                                        <p class="product-item__price">
                                            210.000đ
                                        </p>
                                    </div>
                                    <div class="product-item__note">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6"
                                            width="16px"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"
                                            />
                                        </svg>
                                        <span>Không có ghi chú</span>
                                    </div>
                                    <p class="product-item__qty">Số lượng: 2</p>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-item__thumbnail">
                                    <img
                                        src="/assets/img/pro-1.webp"
                                        alt="Thức Ăn Hạt Cho Mèo Trưởng Thành vị Thịt Gà và Cá Hồi Natural Core 10KG"
                                        class="product-item__img"
                                    />
                                </div>
                                <div class="product-item__info" style="flex: 1;">
                                    <div class="product-info__heading">
                                        <p class="product-item__name">
                                            Thức Ăn Hạt Cho Mèo Trưởng Thành vị Thịt Gà và Cá Hồi Natural Core 10KG
                                        </p>
                                        <p class="product-item__price">
                                            531.000đ
                                        </p>
                                    </div>
                                    <div class="product-item__note">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6"
                                            width="16px"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"
                                            />
                                        </svg>
                                        <span>Không có ghi chú</span>
                                    </div>
                                    <p class="product-item__qty">Số lượng: 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="view-content-right">
                            <div class="recipient-info row-info">
                                <div class="recipient-title">
                                    <i class="fa-solid fa-person" style="font-size: 2rem;"></i>
                                    <span style="margin-left: 3px;">Người nhận</span>
                                </div>
                                <span class="recipient-name">Trung Tín</span>
                            </div>
                            <div class="recipient-phonecall row-info">
                                <div class="recipient-title">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                                        />
                                    </svg>
                                    <span>Số điện thoại</span>
                                </div>
                                <span class="recipient-numphone">
                                    0971121238
                                </span>
                            </div>
                            <div class="time-delivery delivery-info">
                                <div class="time-delivery-heading delivery-heading">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                        />
                                    </svg>
                                    <span>Thời gian giao</span>
                                </div>
                                <p class="time-delivery-info delivery-content">
                                    03:40 - 16/11/2024
                                </p>
                            </div>
                            <div class="address-delivery delivery-info">
                                <div class="address-delivery-heading delivery-heading">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                        />
                                    </svg>
                                    <span>Địa chỉ nhận</span>
                                </div>
                                <p class="address-delievery-info delivery-content">Quận 5</p>
                            </div>
                            <div class="note-box delivery-info">
                                <div class="note-box-heading delivery-heading">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"
                                        />
                                    </svg>
                                    <span>Ghi chú</span>
                                </div>
                                <p class="note-box-info delivery-content" style="height: 20px;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="view-order-bottom">
                        <div class="view-order-bottom-left">
                            <p>Thành tiền</p>
                            <span>1.850.000đ</span>
                        </div>
                        <div class="view-order-bottom-btn">
                            <label for="">Trạng thái đơn hàng: </label>
                            <div class="admin-control-left">
                                <select name="tinh-trang-user" id="tinh-trang-user">
                                    <option selected>-- Chọn --</option>
                                    <option value="">Đã xử lý</option>
                                    <option value="">Chưa xử lý</option>
                                    <option value="">Giao thành công</option>
                                    <option value="">Đã hủy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
