<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>About Us</title>
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

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "our";
    include 'header.php';
    ?>


    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="cover-about-us" style="background-image: url(https://i.pinimg.com/564x/fa/67/dc/fa67dc2710b92baff1df091402acfd0d.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Về chúng tôi</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Giới thiệu</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="about-us">

            <div id="about-content" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="flex-content">

                                <div class="flex-content-img about-img">
                                    <img src="images/OTB TRAVELS.png" class="img-responsive" alt="about-img" />
                                </div><!-- end about-img -->

                                <div class="about-text">
                                    <div class="about-detail">
                                        <h2>About Star Travels</h2>
                                        <p>OTBTRAVELS là nền tảng đặt tour và khách sạn, đồng thời cung cấp blog du lịch đầy đủ thông tin hữu ích. Chúng tôi cam kết mang đến trải nghiệm du lịch thuận tiện và thông tin chất lượng để mọi chuyến đi của bạn trở nên đáng nhớ.</p>
                                        <p>Hãy để OTBTRAVELS làm đối tác tin cậy trong mọi hành trình khám phá của bạn!</p>
                                    </div><!-- end about-detail -->
                                </div><!-- end about-text -->

                            </div><!-- end flex-content -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end about-content -->

            <div id="video-banner" class="banner-padding back-size">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Take a Video Tour</h2>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>

                            <a href="https://youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end video-banner -->

            <div id="team" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-heading">
                                <h2>Our Team</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->

                            <div class="owl-carousel owl-theme" id="owl-team" style="margin-left: 270px;">

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/m6.jpg" class="img-responsive img-circle" alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="https://www.facebook.com/profile.php?id=100034812583951"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                                            </ul>
                                        </div><!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Kim Oanh</h3>
                                            <p>Thành viên</p>
                                        </div><!-- end member-name -->
                                    </div><!-- end member-block -->
                                </div><!-- end item -->

                                <div class="item">
                                    <div class="member-block">
                                        <div class="member-img">
                                            <img src="images/TRong.jpg" class="img-responsive img-circle" alt="member-img" />
                                            <ul class="list-unstyled list-inline contact-links">
                                                <li><a href="https://www.facebook.com/profile.php?id=100025189622600"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                                            </ul>
                                        </div><!-- end member-img -->

                                        <div class="member-name">
                                            <h3>Duy Trọng</h3>
                                            <p>Trưởng nhóm</p>
                                        </div><!-- end member-name -->
                                    </div><!-- end member-block -->
                                </div><!-- end item -->
                            </div><!-- end owl-team -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end team -->

        </div><!-- end about-us -->
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



    <!--======================= FOOTER =======================-->
    <?php
    include 'footer.php';
    ?>


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