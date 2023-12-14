<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>TOURS</title>
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

    <!--======== Header =========-->
    <?php
    $active_tab = "tour";
    include 'header.php';
    ?>

    <!--================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-tour-grid-list" style="background-image: url(https://images.baodantoc.vn/uploads/2022/Th%C3%A1ng%208/Ng%C3%A0y_29/Thah/1545276593_305_bali-guide_jpg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Tất cả tours</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Tours</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="tour-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                        <div class="side-bar-block filter-block" style="background-color: #ffe493">
                            <h3>Tìm kiếm </h3>
                            <p>Khám phá và Trải nghiệm</p>

                            <div class="panels-group">

                            <div class="panel panel-default">
                                    <div class="form-group left-icon">
                                        <input type="text" class="form-control" placeholder="Địa Điểm" />
                                    </div><!-- end panel-heading -->
                            </div>

        
                            <div class="panel panel-default">
                                    <div class="form-group left-icon">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div><!-- end panel-heading -->
                            </div>

                                   
                           
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" type="submit" name="search">Tìm kiếm</button>
                                        </div><!-- end columns -->
                            </div><!-- end panel-group -->
                        </div><!-- end side-bar-block -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/poster.png" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Poster</span>
                                                    <span>Chinh Phục</span>
                                                    <span>Tours</span>
                                                </div><!-- end ad-text -->
                                            </div><!-- end columns -->
                                        </a>
                                    </div><!-- end ad-img -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Cần trợ giúp</h3>
                                    <p>Liên hệ nhanh với chúng tôi nếu bạn gặp bất kì khó khăn gì nhé! Đội ngũ chúng tôi sẽ hỗ trợ hết mình</p>
                                    <div class="support-contact">
                                        <span><i class="fa-solid fa-phone fa-bounce"></i></span>
                                        <p>+84702 579 654</p>
                                    </div><!-- end support-contact -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->
                    <?php
                    include 'connect.php';
                    // Thực hiện truy vấn sử dụng INNER JOIN để lấy thông tin từ cả hai bảng
                    $sql = "SELECT DISTINCT tour_category.id, tour_category.name, tour_category.status   
                             FROM tour_category 
                             INNER JOIN tour ON tour_categoryid = tour.id";

                    $result = $conn->query($sql);
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $tourId = $row['id'];
                                $_SESSION['tour_categoryid'] = $tourId;
                                $tourName = $row['name'];
                                $tourStatus = $row['status'];

                    ?>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side" >

                                    <div class="list-block main-block t-list-block">
                                        <div class="list-content">
                                            <div class="main-img list-img t-list-img">
                                                <?php
                                                $url = "tour-detail.php?id=" . $tourId;
                                                
                                                // var_dump($tourId);
                                                ?>
                                                <a href="<?php echo $url; ?>">
                                                    <img src="https://cdn.tuoitre.vn/zoom/700_525/471584752817336320/2023/5/11/photo-1683781481480-1683781481544575599709-0-76-1000-1986-crop-1683781630912431451134.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                                <div class="main-mask">
                                                    <ul class="list-unstyled list-inline offer-price-1">
                                                        <li class="price">6,900,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N2Đ
                                                            </span></li>
                                                        <li class="rating">
                                                            <span><i class="fa fa-star orange"></i></span>
                                                            <span><i class="fa fa-star orange"></i></span>
                                                            <span><i class="fa fa-star orange"></i></span>
                                                            <span><i class="fa fa-star orange"></i></span>
                                                            <span><i class="fa fa-star lightgrey"></i></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end main-mask -->
                                            </div><!-- end t-list-img -->

                                            <div class="list-info t-list-info">
                                                <h3 class="block-title"><a href="tour-detail.php" style="color:#331e0c; font-weight:600"><?php echo $tourName; ?></a></h3>
                                                <br>
                                                <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> Click để xem chi tiết</p>
                                                <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                                <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>

                                                <p style="color:#918d7b">
                                                    <!-- vd như ở đay lưuw trong csdl là biến chitiet thì select xong truyên cai bien đó vô đây, mấy cái thẻ phía trên cũng tuơng tự -->
                                                    <?php echo $tourStatus ?>
                                                </p>
                                                <a href="tour-detail.php" class="btn btn-orange btn-lg">Chi tiết</a>
                                            </div><!-- end t-list-info -->
                                        </div><!-- end list-content -->
                                    </div><!-- end t-list-block -->
                                </div>
                    <?php
                            }
                        }
                        $conn->close();
                    }
                    ?>

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end tour-grid -->
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