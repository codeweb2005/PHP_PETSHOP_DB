<?php
function displayOrders($conn) {
    // Truy vấn SQL để lấy tất cả đơn hàng
    $sql = "SELECT order_id, customer_name, order_date, total_amount, status FROM orders ORDER BY order_date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $stt = 1; // Số thứ tự
        // Duyệt qua từng đơn hàng và hiển thị
        while ($row = $result->fetch_assoc()) {
            // Định dạng tổng tiền
            $total = number_format($row['total_amount'], 0, ',', '.') . ' VNĐ';
            // Xác định lớp CSS cho trạng thái
            $statusClass = ($row['status'] == 'Đã xử lý') ? 'status-online' : 'status-blocked';

            // HTML cho mỗi hàng trong bảng
            echo '
            <tr >
                <td>' . htmlspecialchars($row['order_id']) . '</td>
                <td>' . htmlspecialchars($row['customer_name']) . '</td>
                <td>' . htmlspecialchars($row['order_date']) . '</td>
                <td >' . $total . '</td>
                <td>
                    <span class="status ' . $statusClass . '">' . htmlspecialchars($row['status']) . '</span>
                </td>
                <td>
                    <div class="list-tool">
                        <label for="view-order" class="btn-edit">
                            <i class="fa-regular fa-eye"></i>
                        </label>
                    </div>
                </td>
            </tr>';
        }
    } else {
        echo '<tr><td colspan="7">Không có đơn hàng nào trong cơ sở dữ liệu.</td></tr>';
    }
}

// Thiết lập kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "912005za@";
$dbname = "petshop_store_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>