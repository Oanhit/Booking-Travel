<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập, hủy phiên làm việc
if (isset($_SESSION['user'])) {
    // Hủy tất cả các biến session
    $_SESSION = array();

    // Nếu bạn muốn xóa cả cookie phiên làm việc, hãy dùng lệnh dưới đây
    // Lưu ý: điều này sẽ xóa tất cả các cookie liên quan đến phiên làm việc hiện tại
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Hủy phiên làm việc
    session_destroy();

    // Chuyển hướng người dùng đến trang đăng nhập sau khi logout
    header("Location: login.php");
    exit();
} else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit();
}
?>
