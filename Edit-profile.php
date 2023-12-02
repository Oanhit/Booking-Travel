<?php
// nhận dữ liệu từ form

$user = $_POST['username'];
$birthday = $_POST['birthday'];
$pass = $_POST['passwword'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// ket nối csdl
require_once 'ketnoi.php';

// viet lenh sql them du lieu
$updatesql = "UPDATE  sinhvien SET masv='$masv', hoten='$ht', lop='$lop' WHERE id=$id";
// echo $themsql ; exit;
// thuc thi câu lệnh thêm
if (mysqli_query($con, $updatesql)) {
    // echo "<h1>Thêm thành công</h1>";
    // tra ve trang lietke
    header("Location: lietke.php");
};
