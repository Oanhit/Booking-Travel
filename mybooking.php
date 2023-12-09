<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bookings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
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
</head>


<body id="booking">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "users";
    include 'header.php';
    ?>


    <!--========= PAGE-COVER ==========-->
    <section class="page-cover dashboard" style="background-color: #e3cfaa;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li><a href="#" style="color: black;">Home</a></li>
                        <li class="active">My Account</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="dashboard" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="dashboard-heading">
                            <h2>Travel <span>Profile</span></h2>
                            <?php
                            if (isset($_SESSION['user'])) {
                                $loggedInUser = $_SESSION['user']; // Lấy tên người dùng từ session đã lưu

                                // Hiển thị tên người dùng trên thanh menu
                                echo '<p style="color:#2a82a5;"> Chào  ' . $loggedInUser . ' ! Chúc bạn có những trải nghiệm tuyệt vời khi sử dụng website của chúng tôi</p>'; // Thay đổi dòng này để phản ánh giao diện của bạn


                                // Có thể thêm các thẻ HTML để hiển thị tên người dùng vào phần menu của bạn
                            }
                            ?>
                            <!-- <p>Hi Lisa, Welcome to Star Travels!</p> -->
                            <!-- <p>All your trips booked with us will appear here and you'll be able to manage everything!</p> -->
                        </div><!-- end dashboard-heading -->

                        <div class="dashboard-wrapper">
                            <div class="row">

                                <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                    <ul class="nav nav-tabs nav-stacked text-center">
                                        <li><a href="dashboard.php"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        <li><a href="user-profile.php"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li class="active"><a href="#"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                        <li><a href="wishlist.php"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                        <li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                    </ul>
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                    <h2 class="dash-content-title">Tour bạn đã đặt <i class="fa-regular fa-circle-check"></i></h2>
                                    <div class="dashboard-listing booking-listing">
                                        <div class="dash-listing-heading">
                                            <div class="custom-radio">
                                                <input type="radio" id="radio01" name="radio" checked />
                                                <label for="radio01"><span></span>All Types</label>
                                            </div><!-- end custom-radio -->

                                            <div class="custom-radio">
                                                <input type="radio" id="radio02" name="radio" />
                                                <label for="radio02"><span></span>Hotels</label>
                                            </div><!-- end custom-radio -->
                                        </div>
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
 
                                                // Truy vấn để lấy thông tin từ bảng order
                                                $sql = "SELECT tourid FROM `order` WHERE userid = '$userID' LIMIT 0, 25";
                                                $result_data = $conn->query($sql);

                                                if ($result_data && $result_data->num_rows > 0) {
                                                    while ($row_data = $result_data->fetch_assoc()) {
                                                        $tourid = $row_data['tourid'];
                                                        //  var_dump($tourid);   

                                                        // Truy vấn để lấy thông tin từ bảng tour
                                                        $sql_tour = "SELECT name FROM tour WHERE id = $tourid";
                                                        $result_tour = $conn->query($sql_tour);

                                                        if ($result_tour && $result_tour->num_rows > 0) {
                                                            $row_tour = $result_tour->fetch_assoc();
                                                            $nametour = $row_tour['name'];
                                                            // echo "Tên tour: " . $nametour;
                                                            $sql_order = "SELECT orderdate, total FROM `order` WHERE tourid = '$tourid' LIMIT 0, 25";
                                                            $result_order = $conn->query($sql_order);

                                                            if ($result_order && $result_order->num_rows > 0) {
                                                                $row_order = $result_order->fetch_assoc();
                                                                $orderdate = $row_order['orderdate'];
                                                                $total = $row_order['total'];

                                                                // Truy vấn để lấy name, email, phone từ bảng orderdetail
                                                                $sql_orderdetail = "SELECT od.name, od.email, od.phone 
                                                                                    FROM order_detail od 
                                                                                    INNER JOIN `order` o ON od.orderid = o.id ";
                                                                $result_orderdetail = $conn->query($sql_orderdetail);

                                                                if ($result_orderdetail && $result_orderdetail->num_rows > 0) {
                                                                    $row_orderdetail = $result_orderdetail->fetch_assoc();
                                                                    $name_orderdetail = $row_orderdetail['name'];
                                                                    $email = $row_orderdetail['email'];
                                                                    $phone = $row_orderdetail['phone'];
                                        ?>

                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="dash-list-icon booking-list-date">
                                                                                        <div class="b-date">
                                                                                            <h3><i class="fa-regular fa-circle-check"></i></h3>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="dash-list-text booking-list-detail">
                                                                                        <h3><?php echo $nametour  ?></h3>
                                                                                        <ul class="list-unstyled booking-info">
                                                                                            <li><span>Ngày đặt:</span> <?php echo $orderdate ?></li>
                                                                                            <li><span style="color:red">Thành tiền:</span> <?php echo $total . ".000 VNĐ"; ?></li>
                                                                                            <li><span>Khách hàng:</span> <?php echo $name_orderdetail ?> <span class="line">|</span><span class="line"><?php echo $email ?> |</span><?php echo $phone ?></li>
                                                                                        </ul>
                                                                                        <button class="btn btn-orange">Message</button>
                                                                                    </td>
                                                                                    <td class="dash-list-btn"><button class="btn btn-orange">Huỷ</button><button class="btn">Thanh toán</button></td>
                                                                                </tr>


                                                    <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                                    ?>

                                                                            </tbody>
                                                                        </table>
                                                                    </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->

                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <?php
    include 'footer.php';
    ?>
                <!-- Page Scripts Starts -->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/custom-navigation.js"></script>
                <!-- Page Scripts Ends -->
</body>

</html>