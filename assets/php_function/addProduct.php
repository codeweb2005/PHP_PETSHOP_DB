<?php
// Kết nối đến cơ sở dữ liệu MySQL

function addProduct($conn) {
    // Kiểm tra xem form đã được submit chưa
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-product-submit'])) {
        // Lấy dữ liệu từ form
        $name = trim($_POST['product-name']);
        $description = trim($_POST['product-desc']);
        $price = str_replace('.', '', trim($_POST['new-price'])); // Xóa dấu chấm để lưu số
        $category = trim($_POST['category']);
        $quantity = (int)trim($_POST['quantity']);
        
        // Xử lý upload ảnh
        $image = '';
        if (isset($_FILES['upload-image']) && $_FILES['upload-image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = '/assets/new_img_product'; // Thư mục lưu ảnh (tính từ gốc server)
            $fileName = uniqid() . '-' . basename($_FILES['upload-image']['name']);
            $serverPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDir . $fileName; // Đường dẫn tuyệt đối để lưu ảnh
            $targetPath = $uploadDir . $fileName; // Đường dẫn tương đối để lưu vào DB

            if (move_uploaded_file($_FILES['upload-image']['tmp_name'], $serverPath)) {
                $image = $targetPath;
            } else {
                // Xử lý lỗi cụ thể
                switch ($_FILES['upload-image']['error']) {
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        return "Ảnh vượt quá dung lượng cho phép.";
                    case UPLOAD_ERR_NO_FILE:
                        return "Không có file ảnh được chọn.";
                    default:
                        return "Lỗi không xác định khi upload ảnh.";
                }
            }
        }

        // Kiểm tra dữ liệu đầu vào
        if (empty($name) || empty($price) || empty($category)) {
            return "Vui lòng điền đầy đủ các trường bắt buộc.";
        }

        // Chuẩn bị truy vấn SQL
        $sql = "INSERT INTO products (name, description, price, image, category, quantity) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            return "Lỗi chuẩn bị truy vấn: " . $conn->error;
        }

        // Gán giá trị và thực thi
        $stmt->bind_param("ssdssi", $name, $description, $price, $image, $category, $quantity);
        
        if ($stmt->execute()) {
            return "Thêm sản phẩm thành công!";
        } else {
            return "Lỗi khi thêm sản phẩm: " . $stmt->error;
        }

        $stmt->close();
    }
    return null; // Trả về null nếu không có submit
}

// Cách sử dụng:
// 1. Kết nối database
$servername = "localhost";
$username = "root";
$password = "912005za@";
$dbname = "petshop_store_db";

$conn = new mysqli($servername, $username, $password , $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// 2. Gọi function và xử lý kết quả
$result = addProduct($conn);

// Tích hợp SweetAlert (nếu bạn có <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> trong HTML)
if ($result !== null) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Thông báo',
            text: '$result',
            confirmButtonText: 'OK'
        });
    </script>";
}

// Đóng kết nối
$conn->close();
?>
