<?php

$conn = mysqli_connect("localhost:4306","root","","travel");

// function connectdb()
//     {
//     //  $dsn = 'mysql:host=localhost:4306;dbname=travel';
//     // $username = "root";
//     // $password = "";
//     // // $con = null;
//     //     // global $dsn,$username,$password, $con;
//     //     try {
            
//     //             $conn = new PDO($dsn, $username, $password);
//     //             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//     //             // echo "Ket noi thanh cong";               
            
//     //     } catch (PDOException $e) {
//     //         $error_message = $e->getMessage();
//     //         echo $error_message;
//     //     }
//      $con = mysqli_connect("localhost:4306","root","","travel");
//         return $con;
//     }

// $servername = "localhost:4306"; // Tên máy chủ MySQL
// $username = "root";
// $password = "";
// $dbname = "travel";

// // Tạo kết nối đến MySQL
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
// }
// Hàm kết nối CSDL
// function connectdb() {
//     $servername = "localhost:4306"; // Thay đổi thông tin kết nối tới server CSDL nếu cần
//     $username = "root"; // Thay đổi thông tin tài khoản đăng nhập CSDL
//     $password = ""; // Thay đổi thông tin mật khẩu đăng nhập CSDL
//     $dbname = "travel"; // Thay đổi tên của CSDL

//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         // Thiết lập chế độ lỗi để PDO thông báo lỗi
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $conn;
//     } catch(PDOException $e) {
//         echo "Kết nối CSDL thất bại: " . $e->getMessage();
//         return null;
//     }
// }

// Hàm kiểm tra tài khoản người dùng
// function checkuser($user, $pass){
//     $conn = connectdb();
//     if ($conn) {
//         try {
//             $sttm = $conn->prepare("SELECT * FROM user WHERE phone = :user AND password = :pass");
//             $sttm->bindParam(':user', $user);
//             $sttm->bindParam(':pass', $pass);
//             $sttm->execute();
//             $result = $sttm->setFetchMode(PDO::FETCH_ASSOC);
//             $kq = $sttm->fetchAll();
//             if(count($kq) > 0)
//                 return $kq[0]['role']; // Nếu có tài khoản, trả về vai trò của người dùng
//             else 
//                 return false; // Nếu không có tài khoản, trả về false
//         } catch(PDOException $e) {
//             echo "Lỗi truy vấn: " . $e->getMessage();
//             return null;
//         }
//     } else {
//         return null;
//     }
// }

?>


