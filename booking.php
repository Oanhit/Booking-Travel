
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

</head>

<body>
    <?php
    include 'connect.php';
    $tourId = $_SESSION['tour_categoryid'];
    // var_dump($tourId);
    $sql = "SELECT price_adult, price_child FROM tour WHERE id = $tourId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $priceAdult = $row['price_adult']; // Giá người lớn từ cơ sở dữ liệu
        $priceChild = $row['price_child']; // Giá trẻ em từ cơ sở dữ liệu
    }

    ?>
    <!-- Form Đặt Tours -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

            <div class="side-bar-block booking-form-block">
                <h3 class="selected-price"> <span style="font-size: 28px; font-family:'Times New Roman', Times, serif; color:#473a15">Đặt Tour <i class="fa-solid fa-check"></i></span></h3>

                <div class="booking-form">
                    <p>Tìm kiếm ước mơ trải nghiệm</p>

                    <form action="order.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Họ và tên" required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required />
                        </div>

                        
                        <div class="row">

                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="number_adult" id="number_adult" placeholder="Người lớn" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="number_child" id="number_child" placeholder="Trẻ em" required />
                                </div>
                            </div>
                            <input type="text" class="form-control" id="total" name="total" placeholder="Tổng tiền" readonly />
                        </div>
                        <div class="checkbox custom-check">
                            <input type="checkbox" id="check01" name="checkbox" />
                            <label for="check01"><span><i class="fa fa-check"></i></span>Nhấp vào đây nếu bạn đồng ý <a href="#">Điều khoản và Điều kiện </a> của chúng tôi!</label>
                        </div>

                        <button class="btn btn-block btn-orange">Đặt Tour </button>
                    </form>
                </div><!-- end booking-form -->
            </div><!-- end side-bar-block -->
        <script>
            // Lắng nghe sự kiện khi người dùng thay đổi số người lớn hoặc số trẻ em
            document.getElementById('number_adult').addEventListener('input', updateTotal);
            document.getElementById('number_child').addEventListener('input', updateTotal);

            var priceAdult = <?php echo $priceAdult; ?>; // Lấy giá người lớn từ PHP
            var priceChild = <?php echo $priceChild; ?>; // Lấy giá trẻ em từ PHP

            // Hàm tính và cập nhật tổng tiền
            function updateTotal() {
                var numberAdult = parseInt(document.getElementById('number_adult').value) || 0;
                var numberChild = parseInt(document.getElementById('number_child').value) || 0;

                var total = (numberAdult * priceAdult) + (numberChild * priceChild); // Tính tổng tiền dựa trên giá từ cơ sở dữ liệu

                document.getElementById('total').value = total.toLocaleString('vi-VN') + '.000 VND'; // Hiển thị tổng tiền có định dạng tiền tệ
            }
        </script>
</body>

</html>