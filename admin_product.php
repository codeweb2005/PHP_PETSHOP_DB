
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quản Lí Sản Phẩm</title>
        <link rel="stylesheet" href="/assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/link/adminProduct.css" />
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
    <style>
        .upload-img-preview {
            margin-left: 48px;
            width: 250px;
            height: 250px;
            object-fit: cover;
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
                        <li class="sidebar-list-item active">
                            <a href="" class="sidebar-link">
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
                <h3 class="content-tittle" data-aos="fade-left" data-aos-duration="1500">Danh Sách Sản Phẩm</h3>
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
                                placeholder="Tìm kiếm sản phầm..."
                            />
                        </form>
                    </div>
                    <div class="admin-control-right">
                        <a href="" class="btn-control-large">
                            <i class="fa-solid fa-rotate-right"></i>
                            Làm mới</a
                        >
                        <label for="add-product" class="btn-control-large">
                            <i class="fa-solid fa-plus"></i>
                            Thêm mới
                        </label>
                    </div>
                </div>
                <div class="show-product">
                    <?php
                    
                    include "assets/php_function/displayProducts_admin.php";
                    // Gọi function
                    displayProducts($conn);
                    // Đóng kết nối
                    $conn->close();
                    ?>
                </div>

                </div>
                <div class="page-nav">
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
            </section>

            <!-- Modal Add New Product -->
            <div class="modal">
                <input
                    type="checkbox"
                    name="add-product"
                    id="add-product"
                    class="modal-checkbox"
                    hidden
                />

                <div class="modal-add-product" style="height: 500px;">
                    <label for="add-product" class="modal-close">
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
                    <h3 class="modal-add-product-title">THÊM MỚI SẢN PHẨM</h3>
                    <div class="modal-content">
    <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
    <?php include './assets/php_function/addProduct.php'; ?>
        <div class="modal-content-left">
            <img src="/assets/img/blank-image.png" alt="" class="upload-img-preview" id="image-preview" />
            <div class="form-group file">
                <label for="upload-image" class="form-label-file">
                    <svg ...></svg>
                    <span>Chọn hình ảnh</span>
                </label>
                <input type="file" name="upload-image" id="upload-image" accept="image/*" onchange="previewImage(event)" />
            </div>
        </div>
        <div class="modal-content-right">
            <div class="form-group">
                <label for="product-name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="product-name" id="product-name" class="form-control" placeholder="Nhập tên sản phẩm" />
            </div>
            <div class="form-group">
                <label for="category" class="form-label">Chọn loại</label>
                <select name="category" id="category">
                    <option value="Thức ăn">Thức ăn</option>
                    <option value="Đồ chơi">Đồ chơi</option>
                    <option value="Phụ kiện">Phụ kiện</option>
                    <option value="Đồ vệ sinh">Đồ vệ sinh</option>
                    <option value="Sức khỏe">Sức khỏe</option>
                    <option value="Chăm nuôi">Chăm nuôi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="new-price" class="form-label">Giá bán</label>
                <input type="text" name="new-price" id="new-price" class="form-control" placeholder="Nhập giá bán" />
            </div>
            <div class="form-group">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Nhập số lượng" />
            </div>
            <div class="form-group">
                <label for="product-desc" class="form-label">Mô tả</label>
                <textarea name="product-desc" id="product-desc" class="product-desc" placeholder="Nhập mô tả sản phẩm..."></textarea>
            </div>
            <button type="submit" name="add-product-submit" class="add-product-submit">
                <svg ...></svg>
                <span>Thêm Sản Phẩm</span>
            </button>
        </div>
</form>
                    </div>
                </div>
            </div>

            <!-- Modal Edit Information Product -->
            <div class="modal">
                <input
                    type="checkbox"
                    name="edit-product"
                    id="edit-product"
                    class="edit-checkbox"
                    hidden
                />
                <div class="modal-edit-product">
                    <label for="edit-product" class="modal-close">
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
                    <h3 class="modal-edit-product-title">CHỈNH SỬA SẢN PHẨM</h3>
                    <div class="modal-content">
                        <form action="" class="edit-product-form">
                            <div class="modal-content-left">
                                <img
                                    src="/assets/img/pro-2.jpg"
                                    alt=""
                                    class="upload-img-preview"
                                />
                                <div class="form-group file">
                                    <label
                                        for="upload-image"
                                        class="form-label-file"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2.5"
                                            stroke="currentColor"
                                            class="size-6"
                                            style="width: 20px; margin-top: 3px"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"
                                            />
                                        </svg>
                                        <span>Chọn hình ảnh</span></label
                                    >
                                    <!-- <input
                                        type="file"
                                        name="upload-image"
                                        id="upload-image"
                                    /> -->
                                </div>
                            </div>
                            <div class="modal-content-right">
                                <div class="form-group">
                                    <label for="product-name" class="form-label"
                                        >Tên sản phẩm</label
                                    >
                                    <br />
                                    <input
                                        type="text"
                                        name="product-name"
                                        id="product-name"
                                        class="form-control"
                                        placeholder="Nhập tên sản phẩm"
                                        value="Thức Ăn Hạt Mềm Cho Chó ANF- Soft Vị Gà 1.2KG"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="category" class="form-label"
                                        >Chọn loại</label
                                    >
                                    <select name="category" id="category">
                                        <option value="1" selected>Thức ăn</option>
                                        <option value="2">Đồ chơi</option>
                                        <option value="3">Phụ kiện</option>
                                        <option value="4">
                                            Đồ vệ sinh
                                        </option>
                                        <option value="5">Sức khỏe</option>
                                        <option value="6">Chăm nuôi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product-name" class="form-label"
                                        >Thêm size:</label
                                    >
                                    <br />
                                    <div class="form-group__row" style="display: flex; justify-content: space-around;">
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <label for="small size">500g</label>
                                            <input type="checkbox" id="small size" checked />
                                        </div>
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <label for="medium size">1.2kg</label>
                                            <input type="checkbox" id="medium size" checked />
                                        </div>
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <label for="large size">3kg</label>
                                            <input type="checkbox" id="large size" checked />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="new-price" class="form-label"
                                        >Giá bán</label
                                    >
                                    <input
                                        type="text"
                                        name="new-price"
                                        id="new-price"
                                        class="form-control"
                                        placeholder="Nhập giá bán"
                                        value="102.500đ"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="product-desc" class="form-label">Mô tả</label>
                                    <textarea name="prduct-desc" id="product-desc" class="product-desc" placeholder="Nhập mô tả sản phẩm...">Phương pháp đặc biệt “Water Tight” – Kín nước là phương pháp giữ chặt nước bên trong kết cấu của hạt, giúp nước không thoát ra ngoài để tạo độ ẩm, mềm xốp cho hạt và ức chế nấm mốc, vi sinh vật xuất hiện ở độ ẩm cao, đồng thời ngăn chặn nguyên nhân gây ra phân lỏng.Cá hồi và thịt gà giúp cải thiện khả năng tiêu hóa và tăng cảm giác ngon miệng
                                    </textarea>
                                </div>
                                <button class="edit-product-submit">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6"
                                        width="20px"
                                        style="margin-top: -3px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"
                                        />
                                    </svg>
                                    <span>Lưu Thay Đổi</span>
                                </button>
                            </div>
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
                    // Tìm thẻ cha chứa thông tin sản phẩm
                    const productInfo = button.closest(".list");
                    const productName = productInfo.querySelector(".product-name").textContent.trim();
                    // Hiển thị hộp thoại confirm
                    const confirmed = confirm(`Bạn có chắc chắn muốn xóa sản phẩm?`);
                });
            });
                    function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('image-preview');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
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
