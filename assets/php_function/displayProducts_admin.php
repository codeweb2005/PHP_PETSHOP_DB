<?php
function displayProducts($conn) {
    // Truy vấn SQL để lấy tất cả sản phẩm
    $sql = "SELECT * FROM products ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Duyệt qua từng sản phẩm và hiển thị
        while ($row = $result->fetch_assoc()) {
            // Xử lý giá tiền để hiển thị định dạng VND
            $price = number_format($row['price'], 0, ',', '.') . 'đ';
            
            // HTML cho mỗi sản phẩm
            echo '
            <div class="list">
                <div class="list-left">
                    <img src="' . htmlspecialchars($row['image']) . '" 
                         alt="' . htmlspecialchars($row['name']) . '" 
                         class="product-img" />
                    <div class="list-info">
                        <h4 class="product-name">' . htmlspecialchars($row['name']) . '</h4>
                        <p class="list-product-desc line-clamp">' . htmlspecialchars($row['description']) . '</p>
                        <span class="product-type">' . htmlspecialchars($row['category']) . '</span>
                    </div>
                </div>
                <div class="list-right">
                    <div class="list-price">
                        <span class="list-current-price">' . $price . '</span>
                    </div>
                    <div class="list-control">
                        <div class="list-tool">
                            <label for="edit-product" class="btn-edit">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </label>
                            <button class="btn-delete" data-id="' . $row['id'] . '">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo '<p>Không có sản phẩm nào trong cơ sở dữ liệu.</p>';
    }
}
$servername = "localhost"; // Tên server (thường là localhost)
$username = "root";        // Tên người dùng MySQL
$password = "912005za@";            // Mật khẩu MySQL (để trống nếu không có)
$dbname = "petshop_store_db";    // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}