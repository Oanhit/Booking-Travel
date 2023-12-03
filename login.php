<?php
$servername = "localhost:4306"; // Tên máy chủ MySQL
$username = "root";
$password = "";
$dbname = "travel";

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
session_start();



// Kiểm tra xem người dùng đã gửi thông tin đăng nhập chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form đăng nhập
    $login = $_POST['user']; // Số điện thoại hoặc email
    $password = $_POST['pass'];

    // Thực hiện truy vấn để kiểm tra thông tin đăng nhập từ cơ sở dữ liệu
    $sql = "SELECT * FROM user WHERE ( username = '$login' OR  phone = '$login' OR email = '$login') AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        // Đăng nhập thành công
        $_SESSION['dangnhap'] = true;
        $_SESSION['user'] = $login; // Lưu thông tin đăng nhập vào session
        $_SESSION['role'] = $result->fetch_assoc()['role']; // Lưu vai trò của người dùng vào session

        // Chuyển hướng đến trang index hoặc trang khác
        header("Location: index.php"); // Thay 'index.php' bằng đường dẫn tới trang index của bạn
        exit(); // Kết thúc quá trình thực thi mã PHP sau khi chuyển hướng
    } else {
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "login";
    include 'header.php';
    ?>

    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="cover-login" style="background-image: url(https://baoninhbinh.org.vn/DATA/ARTICLES/2021/9/28/day-manh-quang-ba-hinh-anh-du-lich-chuan-bi-tot-cac-dieu-4a7a8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Đăng nhập</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Trang Chủ</a></li>
                        <li class="active">Đăng nhập</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="login" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="flex-content">
                            <div class="custom-form custom-form-fields" style="background-color:#fff0cc">
                                <h3 style="color:orange; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Đăng nhập</h3>
                                <p></p>
                                <form action="login.php" method="post">

                                    <div class="form-group">
                                        <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập" required />
                                        <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Mật khẩu" required />
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>

                                    <input type="submit" class="btn btn-orange btn-block" value="Đăng nhập" name="dangnhap">
                                </form>

                                <div class="other-links">
                                    <p class="link-line">Tạo tài khoản mới ? <a href="registration.html">Đăng ký</a></p>
                                    <a class="simple-link" href="forgot-password.php">Quên mật khẩu ?</a>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->

                            <div class="flex-content-img custom-form-img">
                                <img src="https://www.vietnambooking.com/wp-content/uploads/2019/11/kinh-nghiem-du-lich-ha-giang-bang-xe-may-19-11-2019-1.jpg" class="img-responsive" alt="registration-img" />
                            </div><!-- end custom-form-img -->
                        </div><!-- end form-content -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end login -->
    </section><!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Ưu đãi - Giá tốt nhất</h3>
                        <p>Tự hào mang đến cho bạn trải nghiệm du lịch tuyệt vời với giá cả vô cùng ưu đãi</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>An toàn và Bảo mật</h3>
                        <p>Mọi thông tin của quý khách được bảo vệ một cách tuyệt đối</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Đại lý du lịch tốt</h3>
                        <p>Kinh nghiệm và dịch vụ hỗ trợ khách hàng cực kì uy tín</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Hướng dẫn du lịch</h3>
                        <p>Mọi thông tin về chuyến du lịch được cập nhật liên tục, đầy đủ và chi tiết nhất</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter" style="background-image:url(https://toquoc.mediacdn.vn/280518851207290880/2023/4/5/3333380841899454470574571287910598869949696n-1680712798929833722222.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 style="color:black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Đăng ký theo dõi</h2>
                    <p>Đăng ký để nhận được những tin tức thú vị từ chúng tôi</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Nhập email của bạn" required />
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">Liên hệ</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>Phường Hòa Quý - Quận Ngũ Hành Sơn - TP.Đà Nẵng</li>
                            <li><span><i class="fa fa-phone"></i></span>+84702 579 654</li>
                            <li><span><i class="fa fa-envelope"></i></span>tronggg2611@gmail.com</li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">Website</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Khách sạn</a></li>
                            <li><a href="#">Tours</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">Hỗ trợ</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Đăng ký</a></li>
                            <li><a href="#">Tạo tài khoản</a></li>
                            <li><a href="#">Maps</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">Về chúng tôi</span></h3>
                        <p>Chào mừng đến với trang web du lịch của chúng tôi! Khám phá những điểm đến tuyệt vời, tận hưởng các hành trình phiêu lưu và tìm hiểu về văn hóa độc đáo trên khắp thế giới. Hãy để chúng tôi dẫn dắt bạn đến những trải nghiệm du lịch không quên.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>© 2023 <a href="#">OTB TRAVELS</a>. All rights reserved.</p>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-bottom -->

    </section><!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>