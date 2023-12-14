<?php
session_start();

function checkLoggedIn() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
        exit();
    }
}
?>
