<?php
session_start();
// Kết nối đến cơ sở dữ liệu
include 'connect.php';

// Xử lý dữ liệu khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_SESSION["user"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $name = $_POST["name"];

    // Lấy ID từ cơ sở dữ liệu, giả sử sử dụng username để xác định ID
    $sql_select_id = "SELECT id FROM user WHERE username = '$username'";
    $result = $conn->query($sql_select_id);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        // Di chuyển và lưu trữ ảnh mới nếu có
        $target_dir = "Upload/";
        $target_file = $target_dir . basename($_FILES["user_image"]["name"]);

        if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
            echo "File " . basename($_FILES["user_image"]["name"]) . " đã được tải lên.";

            // Lưu đường dẫn hình ảnh vào session
            $_SESSION['uploaded_image'] = $target_file;

            // Chuẩn bị đường dẫn ảnh để lưu vào cơ sở dữ liệu
            $image_path = mysqli_real_escape_string($conn, $target_file);

            // Cập nhật thông tin vào cơ sở dữ liệu dựa trên ID
            $sql_update = "UPDATE user SET  birthday='$birthday', email='$email', phone='$phone', password='$password', address='$address', avatarimage='$image_path' WHERE id='$user_id'";

            if ($conn->query($sql_update) === TRUE) {
                header("Location: user-profile.php");
                exit();
            } else {
                echo "Lỗi khi cập nhật thông tin: " . $conn->error;
            }
        } else {
            echo "Có lỗi khi tải lên file ảnh.";
        }
    } else {
        echo "Không tìm thấy người dùng";
    }
}

// Đóng kết nối
$conn->close();
?>
