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
        <title>Quản Lí Khách Hàng</title>
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
        <!-- AOS animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                        <li class="sidebar-list-item active">
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
                <h3 class="content-tittle" data-aos="fade-left" data-aos-duration="1500">Quản Lý Khách Hàng</h3>
                <div class="admin-control">
                    <div class="admin-control-left">
                        <select name="tinh-trang-user" id="tinh-trang-user">
                            <option selected>Tất cả</option>
                            <option value="">Hoạt động</option>
                            <option value="">Bị chặn</option>
                        </select>
                    </div>
                    <div class="admin-control-center">
                        <form action="" class="form-search">
                            <span class="search-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input
                                type="text"
                                id="form-search-client"
                                class="form-search-input"
                                placeholder="Tìm kiếm khách hàng..."
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
                        <label for="add-client" class="btn-control-large">
                            <i class="fa-solid fa-plus"></i>
                            Thêm mới
                        </label>
                    </div>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Họ và tên</td>
                                <td>Liên hệ</td>
                                <td>Ngày tham gia</td>
                                <td>Tình trạng</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "./assets/php_function/getAllClients.php";
                            displayCustomers($conn);
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

            <!-- Modal Add New Clients -->
            <div class="modal">
                <input
                    type="checkbox"
                    name="add-client"
                    id="add-client"
                    class="client-checkbox"
                    hidden
                />
                <div class="modal-add-clients">
                    <label for="add-client" class="modal-close">
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
                    <h3 class="modal-add-client-title">THÊM KHÁCH HÀNG MỚI</h3>
                    <div class="form-content sign-up">
                        <form action="" method="POST"class="signup-form"enctype="multipart/form-data">
                        <?php include './assets/php_function/add_client.php'; ?>
                            <div class="form-group">
                                <label for="fullname" class="form-label"
                                    >Tên đăng nhập</label
                                >
                                <br />
                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullname"
                                    name="fullname"
                                    placeholder="sonriamep06"
                                />
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label"
                                    >Số điện thoại</label
                                >
                                <br />
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    placeholder="Nhập số điện thoại"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label"
                                    >Mật khẩu</label
                                >
                                <br />
                                <input
                                    type="text"
                                    name="password"
                                    id="password"
                                    placeholder="Nhập mật khẩu"
                                    class="form-control"
                                />
                            </div>
                            
                            <button class="add_customer" type="submit" name="add_customer" >Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Edit Info Contact -->
            <div class="modal">
                <input
                    type="checkbox"
                    name="edit-client"
                    id="edit-client"
                    class="client-checkbox-edit"
                    hidden
                />
                <div class="modal-edit-clients">
                    <label for="edit-client" class="modal-close">
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
                    <h3 class="modal-edit-client-title">CHỈNH SỬA THÔNG TIN</h3>
                    <div class="form-content sign-up">
                        <form action="" class="signup-form">
                            <div class="form-group">
                                <label for="fullname" class="form-label"
                                    >Tên đăng nhập</label
                                >
                                <br />
                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullname"
                                    name="fullname"
                                    placeholder="sonriamep06"
                                    value="sonrimep"
                                />
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label"
                                    >Số điện thoại</label
                                >
                                <br />
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    placeholder="Nhập số điện thoại"
                                    class="form-control"
                                    value="5000đ"
                                />
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label"
                                    >Mật khẩu</label
                                >
                                <br />
                                <input
                                    type="text"
                                    name="password"
                                    id="password"
                                    placeholder="Nhập mật khẩu"
                                    class="form-control"
                                    value="nguyvancuong07"
                                />
                            </div>
                            <div class="form-group edit-account" style="display: flex;">
                                <span>Trạng thái</span>
                                <div class="switch">
                                    <input type="checkbox" name="" id="switch" checked hidden>
                                    <label for="switch"></label>
                                </div>
                            </div>
                            <button class="signin-btn">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-6"
                                    width=24px
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"
                                    />
                                </svg>
                                <span>Lưu thông tin</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const deleteButtons = document.querySelectorAll(".btn-delete");

            // Gắn sự kiện click cho từng nút
            deleteButtons.forEach((button) => {
            button.addEventListener("click", () => {
                // Lấy tên của người dùng từ cột thứ 2
                const row = button.closest("tr");
                const name = row.querySelector("td:nth-child(2)").textContent;

                // Hiển thị hộp thoại xác nhận
                const confirmed = confirm(`Bạn có chắc chắn muốn xóa người dùng: "${name}"?`);
            });
        });
        </script>
        <!-- JS Animation -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                once: "true",
            });
        </script>
    </body>
</html>
