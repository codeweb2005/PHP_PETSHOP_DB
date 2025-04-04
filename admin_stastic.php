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
        <title>Thống kê</title>
        <link rel="stylesheet" href="/assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/admin_stastic.css" />
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
        <link
            rel="apple-touch-icon"
            sizes="57x57"
            href="/assets/favicon/apple-icon-57x57.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="/assets/favicon/apple-icon-60x60.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="72x72"
            href="/assets/favicon/apple-icon-72x72.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="/assets/favicon/apple-icon-76x76.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="/assets/favicon/apple-icon-114x114.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="/assets/favicon/apple-icon-120x120.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="/assets/favicon/apple-icon-144x144.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="/assets/favicon/apple-icon-152x152.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/assets/favicon/apple-icon-180x180.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="/assets/favicon/android-icon-192x192.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/assets/favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="/assets/favicon/favicon-96x96.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/assets/favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="/assets/favicon/manifest.json" />
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
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21strong.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
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
                        <li class="sidebar-list-item">
                            <a
                                href="admin_order.php"
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
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                        />
                                    </svg>
                                </div>
                                <div class="hidden-sidebar">Đơn Hàng</div>
                            </a>
                        </li>
                        <li class="sidebar-list-item active">
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
                            <a
                                href="login.php"
                                class="sidebar-link"
                                id="logout-acc"
                            >
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
                <h3
                    class="content-tittle"
                    data-aos="fade-left"
                    data-aos-duration="1500"
                >
                    Thống Kê
                </h3>
                <div class="admin-control">
                    <div class="admin-control-left">
                        <select name="the-loai" id="the-loai">
                            <option selected>Tất cả</option>
                            <option value="">Thức ăn</option>
                            <option value="">Đồ chơi</option>
                            <option value="">Phụ kiện</option>
                            <option value="">Đồ vệ sinh</option>
                            <option value="">Sức khỏe</option>
                            <option value="">Chăm nuôi</option>
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
                                placeholder="Tìm kiếm tên sản phẩm..."
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
                            <i class="fa-solid fa-arrow-up-short-wide"></i>
                        </a>
                        <a href="" class="btn-reset-order">
                            <i class="fa-solid fa-arrow-down-wide-short"></i>
                        </a>
                        <a href="" class="btn-reset-order">
                            <i class="fa-solid fa-rotate-right"></i>
                        </a>
                    </div>
                </div>
                <div class="order-statistical">
                    <div
                        class="order-statistical-item"
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        data-aos-delay="200"
                    >
                        <div class="order-statistical-item-content">
                            <p class="order-statistical-item-desc">
                                Sản phẩm được bán ra
                            </p>
                            <strong class="order-statistical-item-qty"
                                >100</strong
                            >
                        </div>
                        <div
                            class="order-statistical-item-icon"
                            style="color: #25b003"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                                width="45px"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"
                                />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="order-statistical-item"
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        data-aos-delay="400"
                    >
                        <div class="order-statistical-item-content">
                            <p class="order-statistical-item-desc">
                                Số lượng bán ra
                            </p>
                            <strong class="order-statistical-item-qty"
                                >100</strong
                            >
                        </div>
                        <div
                            class="order-statistical-item-icon"
                            style="color: #e57b11"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                                width="45px"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184"
                                />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="order-statistical-item"
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        data-aos-delay="600"
                    >
                        <div class="order-statistical-item-content">
                            <p class="order-statistical-item-desc">Doanh Thu</p>
                            <strong class="order-statistical-item-qty"
                                >1.131.000 VNĐ</strong
                            >
                        </div>
                        <div
                            class="order-statistical-item-icon"
                            style="color: #ec1f00"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                                width="45px"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <td style="font-weight: 600">STT</td>
                                <td style="font-weight: 600">Tên Sản Phẩm</td>
                                <td style="font-weight: 600">Số lượng bán</td>
                                <td style="font-weight: 600">Doanh Thu</td>
                                <td style="font-weight: 600">Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Thức Ăn Hạt Cho Chó Trưởng Thành Zoi Dog Mix
                                    Vị 1Kg
                                </td>
                                <td>9</td>
                                <td>750,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Túi Vận Chuyển Chó Mèo Có Ngăn Phụ</td>
                                <td>8</td>
                                <td>400,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị Gà
                                    1.2KG
                                </td>
                                <td>6</td>
                                <td>750,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bát Ăn Đôi Cho Chó Mèo Hình Cá</td>
                                <td>5</td>
                                <td>950,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Thức Ăn Cho Mèo Con Reflex Kitten Vị Gà &
                                    Gạo 2KG
                                </td>
                                <td>5</td>
                                <td>700,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Đồ Chơi Cho Thú Cưng - Cầu Gai Phát Sáng
                                </td>
                                <td>3</td>
                                <td>600,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Khay Vệ Sinh Cho Mèo Hình Con Vịt 53x43x25cm
                                </td>
                                <td>2</td>
                                <td>850,000 VNĐ</td>
                                <td>
                                    <a
                                        href="ANTONY Shop.pdf"
                                        target="_blank"
                                        style="color: #000"
                                        class="view-btn"
                                    >
                                        <i class="fa-regular fa-eye"></i>
                                        <span class="view-action-name"
                                            >Xem hóa đơn</span
                                        >
                                    </a>
                                </td>
                            </tr>
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
                <div class="top-customers">
                        <h3>Top 5 Khách Hàng Của Antony Shop</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Khách hàng</th>
                                    <th>Doanh Thu</th>
                                    <th>Sản phẩm đã mua</th>
                                    <th>Hóa đơn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyen Ngoc Anh</td>
                                    <td>$800,000</td>
                                    <td>Thức ăn cho chó Zoi Dog Mix 1kg</td>
                                    <td><a class="view-btn" href="ANTONY Shop.pdf" target="_blank">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nguyễn Văn Bảo</td>
                                    <td>$700,000</td>
                                    <td>Thức ăn cho mèo ANF vị gà 1.2kg</td>
                                    <td><a class="view-btn" href="ANTONY Shop.pdf" target="_blank">View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nguyễn Ngọc Châu</td>
                                    <td>$600,000</td>
                                    <td>Khây vệ sinh cho mèo hình con vịt</td>
                                    <td><a class="view-btn" href="ANTONY Shop.pdf" target="_blank">View</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Phạm Tấn Dũng</td>
                                    <td>$300,000</td>
                                    <td>Bát ăn đôi cho chó mèo hình cá</td>
                                    <td><a class="view-btn" href="ANTONY Shop.pdf" target="_blank">View</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Đặng Gia Hân</td>
                                    <td>$200,000</td>
                                    <td>Đồ chơi cầu gai phát sáng</td>
                                    <td><a class="view-btn" href="ANTONY Shop.pdf" target="_blank">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </section>
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
