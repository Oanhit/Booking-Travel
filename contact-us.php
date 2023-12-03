<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
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


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "contact";
    include 'header.php';
    ?>


    <!--================ PAGE-COVER ===============-->
    <section class="page-cover" id="cover-contact-us" style="background-image: url(https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Liên hệ</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Liên hệ</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-5 no-pd-r">
                        <div class="custom-form contact-form" style="background-color: #f0f9c7;">
                            <h3 style="color:#d36d21">Liên hệ </h3>
                            <p>Trang Liên Hệ của chúng tôi là cầu nối để bạn có thể dễ dàng kết nối và gửi thông điệp đến chúng tôi. Chúng tôi luôn sẵn lòng lắng nghe và hỗ trợ bạn trong mọi thắc mắc, ý kiến hoặc yêu cầu của bạn.</p>
                            <form>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required />
                                    <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" required />
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required />
                                    <span><i class="fa fa-info-circle"></i></span>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>

                                <button class="btn btn-orange btn-block">Send</button>
                            </form>
                        </div><!-- end contact-form -->
                    </div><!-- end columns -->

                    <div class="col-sm-12 col-md-7 no-pd-l">
                        <div class="map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7332975516197!2d108.24978007489275!3d15.975298241946092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2sus!4v1700667822486!5m2!1svi!2sus" allowfullscreen></iframe>

                        </div><!-- end map -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end contact-us -->
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