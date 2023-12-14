<?php
session_start();
include 'connect.php';

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
        // Kiểm tra xem mật khẩu có đúng định dạng MD5 không
        if (preg_match('/^[a-f0-9]{32}$/', $password)) {
            echo "Vui lòng nhập mật khẩu mới, không sử dụng định dạng MD5.";
            // Có thể yêu cầu người dùng nhập mật khẩu mới nếu nó theo định dạng MD5
        } else {
            // Mã hoá mật khẩu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Thêm thông tin tài khoản vào cơ sở dữ liệu
            $sql = "INSERT INTO user (username , email, phone, password, name) VALUES ('$username', '$email', '$phone', '$hashed_password', '$name')";
            if ($conn->query($sql) === TRUE) {
                // Chuyển hướng đến trang khác sau khi đăng ký thành công
                header("Location: login.php");
                exit();
            } else {
                echo "Đăng ký thất bại: " . $conn->error;
            }
        }
    }
}
?>
