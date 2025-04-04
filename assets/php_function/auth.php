<?php
// Kết nối đến cơ sở dữ liệu MySQL
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

// Lấy dữ liệu từ form
$email = $_POST['email'];
$password = $_POST['password'];

// Truy vấn kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE email = ?"; // Giả sử bảng tên là 'users'
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email); // 's' là kiểu string
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Kiểm tra xem email có tồn tại và mật khẩu có khớp không
if ($user && password_verify($password, $user['password'])) {
    // Nếu là admin, kiểm tra cột 'role' (giả sử có cột này trong bảng users)
    if ($user['role'] === 'admin') {
        // Bắt đầu session và lưu thông tin người dùng
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Chuyển hướng đến trang admin
        header("Location: /petshopp/admin_home.php");
        exit();
    } else {
        // Nếu không phải admin, chuyển về trang chính hoặc thông báo lỗi
        header("Location: /petshopp/index.php?error=Bạn không có quyền truy cập trang admin");
        exit();
    }
} else {
    // Nếu thông tin đăng nhập sai, quay lại trang đăng nhập với thông báo lỗi
    header("Location: /petshopp/login.php?error=Email hoặc mật khẩu không đúng");
    exit();
}

// Đóng kết nối
$stmt->close();
$conn->close();
?>