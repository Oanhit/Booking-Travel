<?php
session_start();

$servername = "localhost:4306"; // Tên máy chủ MySQL
$username = "root";
$password = "";
$dbname = "travel";

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['passback'];
    $name = $_POST['name'];

    // Kiểm tra xác nhận mật khẩu
    if ($password !== $confirm_password) {
        echo "Xác nhận mật khẩu không khớp.";
        // Có thể thực hiện hành động khác nếu mật khẩu không khớp
    } else {
        // Thêm thông tin tài khoản vào cơ sở dữ liệu
        $sql = "INSERT INTO user (username , email, phone, password, name) VALUES ('$username', '$email', '$phone', '$password', '$name')";
        if ($conn->query($sql) === TRUE) {
            // echo "Đăng ký thành công!";
            // Có thể chuyển hướng đến trang khác sau khi đăng ký thành công
            header("Location: login.php"); // Thay 'login.php' bằng đường dẫn tới trang đăng nhập của bạn
            exit();
        } else {
            echo "Đăng ký thất bại: " . $conn->error;
        }
    }
}
?>
