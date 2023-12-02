<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
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
    <style>
        .main-info>.arrow a i {
            background-color: cadetblue;
        }

        div.item>.main-block>.main-img img {
            max-height: 230px;
        }

        .cruise-mask {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #b2f0fd;
        }

        .cruise-mask p {
            color: #850a0a;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .page-heading h2 {
            color: #b7891d;
        }
    </style>
</head>

<body id="main-homepage">

    <!--====== HEADER =====-->
    <?php
    $active_tab = "home";
    include 'header.php';

    ?>

    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">
            <ul class="slides">

                <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slider1.jpg) 50% 0%;
	                                          background-size:cover;
	                                          height:100%;">
                    <div class=" meta">
                        <div class="container" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                            <h2>Khám Phá</h2>
                            <h1>Hội An</h1>
                            <a href="#" class="btn btn-default">Xem tất cả</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slider2.jpg) 50% 0%;
	                                          background-size:cover;
	                                          height:100%;">
                    <div class=" meta">
                        <div class="container" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                            <h2>Trải Nghiệm</h2>
                            <h1>Đà Nẵng</h1>
                            <a href="#" class="btn btn-default">Xem tất cả</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="tab-content">

                            <div id="tours" class="tab-pane in active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" placeholder="Điểm xuất phát" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" placeholder="Điểm đến" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control dpd1" placeholder="Bắt đầu">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control dpd1" placeholder="Kết thúc">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" placeholder="Tên tours" />
                                                <i class="fa fa-tags"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Tìm kiếm</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end tours -->

                        </div><!-- end tab-content -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <!--=============== HOTEL OFFERS ===============-->
    <section id="hotel-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Địa Điểm Nổi Bật</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">

                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://pos.nvncdn.net/86c7ad-50310/art/artCT/20230420_0moA6KAt.png" class="img-responsive" alt="tour-img" />
                                        <!-- 360 x 240 -->
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Khám phá</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="tour-detail-left-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                    <div class="main-title hotel-title">
                                        <a href="tour-detail-left-sidebar.html">Đà Nẵng</a>
                                        <!-- <p>From: Scotland</p> -->
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://images.vietnamtourism.gov.vn/vn/images/2020/Thang_9/trang_an1.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Khám phá</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                    <div class="main-title hotel-title">
                                        <a href="#">Vịnh Hạ Long</a>
                                        <!-- <p>From: Germany</p> -->
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://vcdn1-dulich.vnecdn.net/2022/06/01/Hoi-An-VnExpress-5851-16488048-4863-2250-1654057244.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=Z2ea_f0O7kgGZllKmJF92g" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Khám phá</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                    <div class="main-title hotel-title">
                                        <a href="#">Hội An</a>
                                        <!-- <p>From: Austria</p> -->
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://dulichkhampha24.com/wp-content/uploads/2019/10/kinh-nghiem-du-lich-Ha-Giang.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Khám phá</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                    <div class="main-title hotel-title">
                                        <a href="#">Hà Giang</a>
                                        <!-- <p>From: Germany</p> -->
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->

                    </div><!-- end owl-hotel-offers -->

                    <div class="view-all text-center">
                        <a href="tour-grid-left-sidebar.html" class="btn btn-orange">Xem tất cả</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hotel-offers -->


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


    <!--=============== TOUR OFFERS ===============-->
    <section id="tour-offers" class="section-padding" style="background-image: url(https://tugo.com.vn/wp-content/uploads/con-gi-tuyet-hon-khi-ngoi-tren-cabin-ngam-hoang-hon-london-810x459.png);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2 style="color:#fffefc">Tour Mới Nhất</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-giang/hinh-danh-thang/850px/ha-giang-mua-hoa-tam-giac-mach.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">7,999,000đ<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Hà Giang Tour</a>
                                        <p><i class="fa-solid fa-clock"></i> 4 Ngày 3 Đêm</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://nhn.1cdn.vn/thumbs/720x480/2023/03/24/base64-16795350350691923441338.png" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">5,390,000đ<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Phú Quốc Tour</a>
                                        <p><i class="fa-solid fa-clock"></i> 3 Ngày 2 Đêm</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://datviettour.com.vn/uploads/images/mien-trung/phan-thiet/hinh-danh-thang/850px/phan-thiet-850px.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">1,886,000đ<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Phan Thiết Tour</a>
                                        <p><i class="fa-solid fa-clock"></i> 2 Ngày 1 Đêm</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="https://www.dalattrip.com/dulich/media/2017/12/thanh-pho-da-lat.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">3,086,000đ<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Đà Lạt Tour</a>
                                        <p><i class="fa-solid fa-clock"></i> 3 Ngày 3 Đêm</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                    </div><!-- end owl-tour-offers -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">Xem tất cả</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end tour-offers -->

    <section id="cruise-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tour nổi bật</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#">
                                                <img src="https://ik.imagekit.io/tvlk/blog/2022/02/dia-diem-du-lich-hoi-an-1.jpg?tr=dpr-2,w-675" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>Ưu đãi</p>
                                                </div><!-- end cruise-mask -->
                                            </a>
                                        </div><!-- end cruise-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title">
                                                <a href="#">Hội An Tour</a>
                                                <p><i class="fa-solid fa-clock"></i> 2 Ngày 2 Đêm</p>
                                                <div class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star grey"></i></span>
                                                </div><!-- end rating -->

                                                <span class="cruise-price">2,499,000đ</span>
                                            </div><!-- end cruise-title -->
                                        </div><!-- end cruise-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end cruise-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#">
                                                <img src="https://hnm.1cdn.vn/2023/07/02/a89.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>Ưu đãi</p>
                                                </div><!-- end cruise-mask -->
                                            </a>
                                        </div><!-- end cruise-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title">
                                                <a href="#">Tây Nguyên Tour</a>
                                                <p><i class="fa-solid fa-clock"></i> 4 Ngày 3 Đêm</p>
                                                <div class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star grey"></i></span>
                                                </div><!-- end rating -->

                                                <span class="cruise-price">4,286,000đ</span>
                                            </div><!-- end cruise-title -->
                                        </div><!-- end cruise-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end cruise-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#">
                                                <img src="https://images.kienthuc.net.vn/zoom/800/Uploaded/tructoasoan/2023_02_16/dinh-fansipan-07545270_MZUZ.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>Hấp dẫn</p>
                                                </div><!-- end cruise-mask -->
                                            </a>
                                        </div><!-- end cruise-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title">
                                                <a href="#">Sapa Tour</a>
                                                <p><i class="fa-solid fa-clock"></i> 3 Ngày 2 Đêm</p>
                                                <div class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star grey"></i></span>
                                                </div><!-- end rating -->

                                                <span class="cruise-price">3,590,000đ</span>
                                            </div><!-- end cruise-title -->
                                        </div><!-- end cruise-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end cruise-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#">
                                                <img src="https://dulichviet.com.vn/images/bandidau/du-lich-can-tho-mien-tay-song-nuoc-voi-nhung-diem-den-thu-vi.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>Ưu Đãi</p>
                                                </div><!-- end cruise-mask -->
                                            </a>
                                        </div><!-- end cruise-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title">
                                                <a href="#">Cần Thơ Tour</a>
                                                <p><i class="fa-solid fa-clock"></i> 4 Ngày 3 Đêm</p>
                                                <div class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star grey"></i></span>
                                                </div><!-- end rating -->

                                                <span class="cruise-price">4,289,000đ</span>
                                            </div><!-- end cruise-title -->
                                        </div><!-- end cruise-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end cruise-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">Xem tất cả</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cruise-offers -->


    <!--==================== VIDEO BANNER ===================-->
    <section id="video-banner" class="banner-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="color:#f5ad3b">Khung Cảnh Việt Nam</h2>
                    <p>
                        Việt Nam là một đất nước đa dạng về cảnh quan tự nhiên và văn hóa, từ những ngọn núi hùng vĩ, những bãi biển tuyệt đẹp cho đến những thị trấn cổ kính đậm chất lịch sử. Đất nước này chứa đựng một sự pha trộn tuyệt vời giữa nét đẹp tự nhiên hoang sơ và vẻ đẹp kiến trúc, văn hóa phong phú.</p>
                        <br>

                    <!-- <a href=.images/video1 class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a> -->

                    <video width="100%" height="100%" autoplay muted loop>
                        <source src="./images/video1.mp4" type="video/mp4">
                    </video>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end video-banner -->


    <!--==================== TESTIMONIALS ====================-->
    <section id="testimonials" class="section-padding back-size" style="background-image: url(https://media-cdn-v2.laodong.vn/storage/newsportal/2023/4/18/1181354/2.1-Toan-Canh-Samten.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading white-heading">
                        <h2>Đánh giá</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <div class="carousel-inner text-center">

                            <div class="item active">
                                <blockquote>"Trang web đặt tour này cung cấp cho tôi một trải nghiệm tuyệt vời khi tôi muốn lên kế hoạch cho chuyến du lịch của mình. Giao diện trực quan và dễ sử dụng giúp tôi dễ dàng tìm kiếm và chọn lựa những tour phù hợp với mong muốn của mình. Tôi thích cách thông tin về các tour được hiển thị rõ ràng và chi tiết, bao gồm cả lịch trình, hoạt động đi kèm và chi phí."

</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->
                                <small>Thanh Huyền</small>
                            </div><!-- end item -->

                            <div class="item">
                                <blockquote>"Trải qua việc sử dụng trang web đặt tour này, tôi thấy có những ưu điểm và nhược điểm riêng. Giao diện trực quan giúp tôi dễ dàng tìm kiếm và chọn lựa tour phù hợp với nhu cầu của mình. Tính năng tìm kiếm linh hoạt và khả năng lọc tour theo nhiều tiêu chí là điểm mạnh của trang web này.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Nhật Uyên</small>
                            </div><!-- end item -->

                            <div class="item">
                                <blockquote>"Trang web đặt tour này không chỉ cung cấp cho tôi một nền tảng thuận tiện để tìm kiếm tour phù hợp mà còn mang lại cho tôi cảm giác tin cậy khi thực hiện việc đặt tour. Giao diện trực quan và thân thiện với người dùng giúp tôi dễ dàng duyệt qua các tour có sẵn, từ những chuyến du lịch mạo hiểm đến những hành trình thư giãn."</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Thành Công</small>
                            </div><!-- end item -->

                        </div><!-- end carousel-inner -->

                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="https://i.pinimg.com/564x/bd/ec/1e/bdec1ef6536c105da4a8f236701bc004.jpg" class="img-responsive" alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img src="https://i.pinimg.com/564x/78/68/a8/7868a8d36491961020fd32ab201e950b.jpg" class="img-responsive" alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img src="https://i.pinimg.com/564x/8d/91/bb/8d91bbb32b3f5e051f61130975c1e77f.jpg" class="img-responsive" alt="client-img">
                            </li>
                        </ol>

                    </div><!-- end quote-carousel -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonials -->


    <!--================ LATEST BLOG ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Blogs mới nhất</h2>
                        <hr class="heading-line" />
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#">
                                        <img src="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" class="img-responsive" alt="blog-img" style="max-height:240px" />
                                    </a>
                                </div><!-- end latest-img -->

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span> 28/1/2023<span class="author">by: <a href="#">Admin</a></span></li>
                                    </ul>
                                </div><!-- end latest-info -->

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title">
                                            <a href="#" style="color:#f5ad3b">'Hà Nội - Thủ Đô Nghìn Tuổi Trên Đất Việt'</a>
                                            <p>Khám phá văn hóa, ẩm thực và những điểm tham quan nổi tiếng ở Hà Nội</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div><!-- end latest-desc -->
                            </div><!-- end latest-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#">
                                        <img src="https://cdnimgen.vietnamplus.vn/uploaded/wbxx/2023_08_21/hoian.jpg" class="img-responsive" alt="blog-img" style="max-height:240px"/>
                                    </a>
                                </div><!-- end latest-img -->

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>3/1/2023<span class="author">by: <a href="#">Admin</a></span></li>
                                    </ul>
                                </div><!-- end latest-info -->

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title">
                                            <a href="#" style="color:#f5ad3b">'Hội An - Di Sản Văn Hóa Thế Giới Trên Bờ Sông Hoài'</a>
                                            <p>Hướng dẫn du lịch, những hoạt động và trải nghiệm độc đáo tại Hội An</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div><!-- end latest-desc -->
                            </div><!-- end latest-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#">
                                        <img src="https://www.vietnambooking.com/wp-content/uploads/2018/08/dulich-SG-kinh-nghiem-an-choi-tha-ga-chon-phon-hoa-do-thi-24-8-2018-45.jpg" class="img-responsive" alt="blog-img" style="max-height:240px" />
                                    </a>
                                </div><!-- end latest-img -->

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>15/2/2023<span class="author">by: <a href="#">Admin</a></span></li>
                                    </ul>
                                </div><!-- end latest-info -->

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title">
                                            <a href="#" style="color:#f5ad3b">'Sài Gòn - Hòa Quyện Hiện Đại và Truyền Thống'</a>
                                            <p>Khám phá về cuộc sống, ẩm thực và những địa điểm vui chơi ở TP.HCM</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div><!-- end latest-desc -->
                            </div><!-- end latest-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">Xem tất cả</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end latest-blog -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter" style="background-image: url(https://www.chudu24.com/wp-content/uploads/2017/01/du-lich-da-nang.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Đăng ký theo dõi</h2>
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