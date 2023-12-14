<?php
session_start();
include 'middleware.php';

// Kiểm tra trạng thái đăng nhập
if (!isset($_SESSION['user'])) {
    echo '<script>alert("Bạn cần đăng nhập trước khi đặt tour.");';
    echo 'window.location.href = "login.php";</script>';
    exit(); // Chấm dứt quá trình thực thi sau khi chuyển hướng
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Các phần còn lại của trang -->
</head>
<body>
    <!-- Nội dung của trang -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include 'connect.php';
    // Lấy thông tin từ form đặt tour
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $number_people = $_POST['number_people'];
    $number_adult = isset($_POST['number_adult']) ? intval($_POST['number_adult']) : 0;
    $number_child = isset($_POST['number_child']) ? intval($_POST['number_child']) : 0;

    $username = $_SESSION['user']; // Lấy thông tin user từ session
    $tourCategoryId = $_SESSION['tour_categoryid']; // Lấy thông tin tour_categoryid từ session
    $sql = "SELECT price_adult, price_child FROM tour WHERE id = $tourCategoryId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $priceAdult = $row['price_adult'];
        $priceChild = $row['price_child'];
        // Tính tổng tiền dựa trên giá và số lượng người lớn, trẻ em
        $total = ($number_adult * $priceAdult) + ($number_child * $priceChild);
        // Lấy userid từ username
        $sql_userid = "SELECT id FROM user WHERE username = '$username'";
        $result_userid = $conn->query($sql_userid);

        if ($result_userid->num_rows > 0) {
            $row_userid = $result_userid->fetch_assoc();
            $userid = $row_userid['id']; // Lấy userid từ kết quả truy vấn

            // Thực hiện truy vấn để lấy tour_category.id từ INNER JOIN
            $sql_tourid = "SELECT tour_category.id  
            FROM tour_category 
            INNER JOIN tour ON tour_category.id = tour.tour_categoryid 
            WHERE tour.id = $tourCategoryId";
            // var_dump($sql_tourid);
            $result_tourid = $conn->query($sql_tourid);

            if ($result_tourid->num_rows > 0) {
                $row_tourid = $result_tourid->fetch_assoc();
                $tourid = $row_tourid['id']; // Lấy tourid từ kết quả truy vấn
                // var_dump($tourid);
                // Thêm dữ liệu vào bảng `order`
                $stmt = $conn->prepare("INSERT INTO `order` (total, userid, tourid) VALUES (?, ?, ?)");
                $stmt->bind_param("dis", $total, $userid, $tourid);
                $stmt->execute();
                $orderid = $conn->insert_id; // Lấy orderid vừa được tạo
                // var_dump($tourid);
                // Thêm dữ liệu vào bảng `order_detail`
                $number_people = $number_adult + $number_child;
                $subtotal = ($number_adult * $priceAdult) + ($number_child * $priceChild); // Tính subtotal dựa trên số người và số trẻ em
                $stmt_detail = $conn->prepare("INSERT INTO order_detail (name, email, phone, number_people , number_adult, number_child, subtotal, orderid) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt_detail->bind_param("sssiiidi", $name, $email, $phone, $number_people, $number_adult, $number_child, $subtotal, $orderid);
                $stmt_detail->execute();
            }
        }
    }
    // Đóng kết nối
    $conn->close();
    ?>
    <script>
        <?php if ($stmt && $stmt_detail) { ?>
            alert("Đặt tour thành công!");
            // document.getElementById("notification").innerHTML = "<h2 style='color: red; font-size:20px'>Đặt tour thành công!</h2>";
            window.location.href = "mybooking.php";
        <?php } ?>
    </script>


</body>

</html>