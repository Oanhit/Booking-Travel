<?php  
include 'connect.php';

if (isset($_SESSION['dangnhap']) && $_SESSION['dangnhap'] === true) {
    $username = $_SESSION['user'];

    // Truy vấn để lấy ID từ cơ sở dữ liệu
    $query = "SELECT id FROM user WHERE username='$username'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userID = $row['id'];

        // Truy vấn để lấy thông tin từ bảng order và order_detail
        $sql = "SELECT od.name, od.email, od.phone, od.number_people, od.number_adult, od.number_child, od.subtotal 
                FROM order_detail od
                INNER JOIN `order` o ON od.orderid = o.id
                WHERE o.userid = '$userID'";

        $result_data = $conn->query($sql);

        if ($result_data && $result_data->num_rows > 0) {
            while ($row_data = $result_data->fetch_assoc()) {
                $name = $row_data["name"];
                $email = $row_data["email"];
                $phone = $row_data["phone"];
                $number_people = $row_data["number_people"];
                $number_adult = $row_data["number_adult"];
                $number_child = $row_data["number_child"];
                $subtotal = $row_data["subtotal"];

                // Sử dụng thông tin lấy được ở đây để hiển thị hoặc xử lý
                // Ví dụ: in ra thông tin hoặc lưu vào biến để sử dụng trong code HTML
                echo "Name: $name, Email: $email, Phone: $phone, Number of People: $number_people, Adults: $number_adult, Children: $number_child, Subtotal: $subtotal";
            }
        } else {
            echo "Không có dữ liệu.";
        }
    } else {
        echo "Không tìm thấy người dùng.";
    }
}
?>
