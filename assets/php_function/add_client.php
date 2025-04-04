<?php
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

// Hàm thêm khách hàng mới
function addCustomer($conn) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_customer'])) {
        $name = $_POST['fullname'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mã hóa mật khẩu
        $join_date = date('Y-m-d'); // Ngày hiện tại
        $status = 'Hoạt động'; // Trạng thái mặc định

        // Kiểm tra dữ liệu đầu vào
        if (empty($name) || empty($phone) || empty($_POST['password'])) {
            return "Vui lòng điền đầy đủ thông tin.";
        }

        // Chuẩn bị truy vấn SQL
        $sql = "INSERT INTO customers (name, phone, join_date, status, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $phone, $join_date, $status, $password);

        // Thực thi và kiểm tra kết quả
        if ($stmt->execute()) {
            return "Thêm khách hàng thành công!";
        } else {
            return "Lỗi khi thêm khách hàng: " . $conn->error;
        }
    }
    return null;
}

// Gọi hàm thêm khách hàng và lấy thông báo
$message = addCustomer($conn);
$conn->close();
?>
