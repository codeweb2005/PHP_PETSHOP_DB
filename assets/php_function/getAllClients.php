<?php
// Thiết lập kết nối cơ sở dữ liệu
$servername = "localhost"; // Tên server (thường là localhost)
$username = "root";        // Tên người dùng MySQL
$password = "912005za@";   // Mật khẩu MySQL
$dbname = "petshop_store_db"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Hàm hiển thị khách hàng
function displayCustomers($conn) {
    // Truy vấn SQL để lấy tất cả khách hàng
    $sql = "SELECT id, name, phone, join_date, status FROM customers ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $stt = 1; // Số thứ tự
        // Duyệt qua từng khách hàng và hiển thị
        while ($row = $result->fetch_assoc()) {
            // Xác định lớp CSS cho trạng thái
            $statusClass = ($row['status'] == 'Hoạt động') ? 'status-online' : 'status-blocked';
            
            // HTML cho mỗi hàng trong bảng
            echo '
            <tr>
                <td>' . $stt++ . '</td>
                <td>' . htmlspecialchars($row['name']) . '</td>
                <td>' . htmlspecialchars($row['phone']) . '</td>
                <td>' . htmlspecialchars($row['join_date']) . '</td>
                <td>
                    <span class="status ' . $statusClass . '">' . htmlspecialchars($row['status']) . '</span>
                </td>
                <td>
                    <div class="list-tool">
                        <label for="edit-client" class="btn-edit">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </label>
                        <button class="btn-delete" data-id="' . $row['id'] . '">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>';
        }
    } else {
        echo '<tr><td colspan="6">Không có khách hàng nào trong cơ sở dữ liệu.</td></tr>';
    }
}
?>