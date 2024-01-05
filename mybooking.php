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
                                echo '<p style="color:#2a82a5;"> Chào  ' . $loggedInUser . ' ! Chúc bạn có những trải nghiệm tuyệt vời khi sử dụng website của chúng tôi</p>';
                            }
                            ?>
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

                                        <div class="profile-container">
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
                                                    $sql = "SELECT tourid,id FROM `order` WHERE userid = '$userID' LIMIT 0, 25";
                                                    $result_data = $conn->query($sql);

                                                    if ($result_data && $result_data->num_rows > 0) {
                                                        while ($row_data = $result_data->fetch_assoc()) {
                                                            $tourid = $row_data['tourid'];
                                                            $orderid = $row_data['id'];

                                                            //  var_dump($tourid);   

                                                            // Truy vấn để lấy thông tin từ bảng tour
                                                            $sql_tour = "SELECT name FROM tour WHERE id = $tourid";
                                                            $result_tour = $conn->query($sql_tour);

                                                            if ($result_tour && $result_tour->num_rows > 0) {
                                                                $row_tour = $result_tour->fetch_assoc();
                                                                $nametour = $row_tour['name'];
                                                                // echo "Tên tour: " . $nametour;
                                                                $sql_order = "SELECT orderdate, total FROM `order` WHERE id = '$orderid' LIMIT 0, 25";
                                                                $result_order = $conn->query($sql_order);

                                                                if ($result_order && $result_order->num_rows > 0) {
                                                                    $row_order = $result_order->fetch_assoc();
                                                                    $orderdate = $row_order['orderdate'];
                                                                    $total = $row_order['total'];
                                                                    // var_dump($total);


                                                                    $sql_orderdetail = "SELECT od.name, od.email, od.phone 
                                                                                    FROM order_detail od 
                                                                                    INNER JOIN `order` o ON od.orderid = o.id
                                                                                    WHERE o.tourid = '$tourid' AND o.userid = '$userID'";

                                                                    $result_orderdetail = $conn->query($sql_orderdetail);

                                                                    if ($result_orderdetail && $result_orderdetail->num_rows > 0) {
                                                                        while ($row_orderdetail = $result_orderdetail->fetch_assoc()) {
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
                                                                                            <td class="dash-list-btn"><button class="btn btn-orange">Huỷ</button><button class="btn" data-toggle="modal" data-target="#edit-profile">Thanh toán</button></td>
                                                                                        </tr>

                                                        <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                                        ?>

                                                                            </div>
                                                                            </tbody>
                                                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div> <!-- end booking-listings -->
                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->


    <!-- <button class="btn" data-toggle="modal" data-target="#edit-profile" style="margin-top:10px; background-color: #b3eff1; color:black;">Edit Profile</button> -->
    <div id="edit-profile" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="color: #b3592c">Thanh toán<i class="fa-solid fa-user-pen fa-flip"></i></h3>
                </div><!-- end modal-header -->

                <div class="modal-body">
                    <?php
                    include 'connect.php';

                    $sql_tour_order_details = "SELECT od.name, od.email, od.phone, od.number_people, od.number_adult, od.number_child, od.subtotal
                      FROM order_detail od
                      INNER JOIN `order` o ON od.orderid = o.id
                     WHERE o.userid = '$userID' AND o.tourid = '$tourid' AND od.orderid= '$orderid'";

                    $result_tour_order_details = $conn->query($sql_tour_order_details);

                    if ($result_tour_order_details && $result_tour_order_details->num_rows > 0) {
                        while ($row_tour_order = $result_tour_order_details->fetch_assoc()) {
                            $name = $row_tour_order["name"];
                            $email = $row_tour_order["email"];
                            $phone = $row_tour_order["phone"];
                            $number_people = $row_tour_order["number_people"];
                            $number_adult = $row_tour_order["number_adult"];
                            $number_child = $row_tour_order["number_child"];
                            $subtotal = $row_tour_order["subtotal"];
                    ?>
                            <form action="payment.php" method="post" enctype="multipart/form-data">
                                <!-- <label class="form-group" for="nametour" name>Tour: <?php echo $nametour ?></label> -->
                                <!-- <input class="form-control" type="text" name="username" id="username" value=""> -->
                                <br>
                                <label class="form-group" for="name">Họ tên:</label>
                                <input class="form-control" type="text" name="name" id="name" value="<?php echo $name ?>">
                                <br>
                                <label class="form-group" for="email">Email:</label>
                                <input class="form-control" type="email" name="email" id="email" value="<?php echo $email ?>">
                                <br>
                                <label class="form-group" for="phone">Số điện thoại:</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $phone ?>">
                                <br>
                                <label class="form-group" for="number_people">Số lượng người:</label>
                                <input class="form-control" type="text" name="number_people" id="number_people" value="<?php echo $number_people  ?>">
                                <br>
                                <label class="form-group" for="number_adult">Người lớn:</label>
                                <input class="form-control" type="text" name="number_adult" id="number_adult" value="<?php echo $number_adult ?>">
                                <br>
                                <label class="form-group" for="number_adult">Trẻ em:</label>
                                <input class="form-control" type="text" name="number_child" id="number_child" value="<?php echo $number_child ?>">
                                <br>
                                <label class="form-group" for="number_adult">Tổng tiền:</label>
                                <input class="form-control" type="text" name="number_adult" id="number_adult" value="<?php echo $subtotal ?>">
                                <br>


                                <button class="btn btn-orange" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Thanh toán</button>
                            </form>
                </div><!-- end modal-bpdy -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end edit-profile -->

<?php
                        }
                    }

?>
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