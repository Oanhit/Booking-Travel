<?php
 session_start();
 ob_start();
// Kết nối đến cơ sở dữ liệu
$servername = "localhost:4306"; // Thay đổi thông tin kết nối nếu cần
$username = "root";
$password = ""; // Thay đổi thông tin kết nối nếu cần
$dbname = "travel";

// Tạo kết nối đến MySQL
$con = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$con) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý thông tin người dùng
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Xử lý file ảnh
    $target_directory = "Upload/"; // Thư mục lưu trữ file
    $target_file = $target_directory . basename($_FILES["user_image"]["name"]); // Đường dẫn đến file tải lên

    // Di chuyển file từ thư mục tạm sang thư mục uploads
    if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
        echo "File " . basename($_FILES["user_image"]["name"]) . " đã được tải lên.";
    
        // Lưu đường dẫn hình ảnh vào session
        $_SESSION['uploaded_image'] = $target_file;
    
        // Thêm thông tin người dùng và đường dẫn ảnh vào cơ sở dữ liệu
        $image_path = mysqli_real_escape_string($con, $target_file);
        $sql = "INSERT INTO user (username, avatarimage) VALUES ('$username', '$image_path')";
    
        if (mysqli_query($con, $sql)) {
            // Đóng kết nối đến cơ sở dữ liệu
            mysqli_close($con);
    
            // Chuyển hướng đến trang success.php
            header("Location: upload.php");
            exit();
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Có lỗi xảy ra khi tải file lên.";
    }
    
}


// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($con);
?>

