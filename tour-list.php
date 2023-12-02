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


    <!--======== SEARCH-OVERLAY =========-->
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
                                    <div class="panel-heading">
                                        <a href="#panel-1" data-toggle="collapse">Địa điểm<span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox" />
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>Đà Nẵng</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox" />
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Hội An</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox" />
                                                    <label for="check03"><span><i class="fa fa-check"></i></span>Hà Giang</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox" />
                                                    <label for="check04"><span><i class="fa fa-check"></i></span>Phú Quốc</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox" />
                                                    <label for="check05"><span><i class="fa fa-check"></i></span>Sapa</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox" />
                                                    <label for="check06"><span><i class="fa fa-check"></i></span>Hà Nội</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox" />
                                                    <label for="check07"><span><i class="fa fa-check"></i></span>Hồ Chí Minh</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox" />
                                                    <label for="check08"><span><i class="fa fa-check"></i></span>Cần Thơ</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox" />
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Tây Nguyên</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox" />
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Đà Lạt</label>
                                                </li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="form-group left-icon">
                                        <input type="text" class="form-control" placeholder="Địa Điểm" />
                                    </div><!-- end panel-heading -->


                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="form-group left-icon">
                                        <input type="text" class="form-control" placeholder="Tên Tours" />
                                        <!-- <i class="fa fa-map-marker"></i> -->
                                    </div><!-- end panel-heading -->

                                    <div id="panel-3" class="panel-collapse collapse">

                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                            </div><!-- end panel-group -->

                            <div class="price-slider">
                                <!-- <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div> -->
                            </div><!-- end price-slider -->
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

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://cdn.tuoitre.vn/zoom/700_525/471584752817336320/2023/5/11/photo-1683781481480-1683781481544575599709-0-76-1000-1986-crop-1683781630912431451134.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">6,900,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N2Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600">Phú Quốc - Hà Tiên </a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 29/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                        Khám phá hòn đảo ngọc Phú Quốc với chúng tôi - nơi kết nối với biển cả tuyệt đẹp, bãi biển trắng mịn và trải nghiệm văn hóa độc đáo. Đồng hành cùng chúng tôi để tận hưởng sự hòa quyện giữa thiên nhiên hoang sơ và dịch vụ du lịch chuyên nghiệp. </p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->

                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-dai-dien/vinwonders-nha-trang-488px-2.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">2,486,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N3Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600">Nha Trang - Vịnh San Hô </a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 20/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 -5 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                    Hòa mình vào vẻ đẹp tuyệt vời của Nha Trang và khám phá Vịnh San Hô - một thế giới dưới đáy biển với sự đa dạng sinh học đầy mê </p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->


                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://elitetour.com.vn/files/images/Blogs/mui%20ne%20phan%20thiet%206.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">2,686,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N2Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600">Phan Thiết - KDL Tà Kú</a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 8/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                    Phan Thiết - Bãi biển yên bình, cát trắng mịn và không gian đáng nhớ. Tận hưởng những ngày thư giãn tại các resort ven biển, tham gia các hoạt động như lướt cát, thưởng thức ẩm thực biển tươi ngon </p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->


                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://datviettour.com.vn/uploads/images/tay-nguyen/ta-dung/hinh-dai-dien/ta-dung-488px.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">2,786,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N2Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600">Tà Đùng - Buôn Ma Thuột</a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 8/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                    Buôn Ma Thuột - Hương vị của Tây Nguyên. Khám phá vườn cà phê lớn, trải nghiệm văn hóa Ê Đê, và khám phá các điểm du lịch như hồ Lak và suối Dray Nur. Hành trình không thể bỏ lỡ tại vùng đất đỏ nổi tiếng của Việt Nam. </p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->

                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-dai-dien/dinh-fansipan-488px.png" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">3,900,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 3N2Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600"> Sapa - Phansipan</a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 29/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                    Sapa là hòn ngọc của vùng núi phía Bắc, nơi có đỉnh Phan Xi Păng cao nhất Đông Nam Á. Khám phá vẻ đẹp của thung lũng sương mù, rừng núi và ruộng bậc thang. Một hành trình không thể bỏ lỡ vào thiên nhiên hoang sơ và văn hóa dân tộc độc đáo. </p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->


                        <div class="list-block main-block t-list-block">
                            <div class="list-content">
                                <div class="main-img list-img t-list-img">
                                    <a href="tour-detail-left-sidebar.html">
                                        <img src="https://taxilienkhuong.com/wp-content/uploads/2022/12/nhung-su-kien-le-hoi-noi-bat-o-da-lat-1.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">3,800,000đ<span class="divider">|</span><span class="pkg"><i class="fa-solid fa-clock"></i> 4N3Đ</span></li>
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
                                    <h3 class="block-title"><a href="tour-detail-right-sidebar.html" style="color:#331e0c; font-weight:600">Đà Lạt - Thiên Đường Hoa</a></h3>
                                    <br>
                                    <p class="block-minor" style="color:#a77b2b"><i class="fa-solid fa-calendar-days"></i> 7/12/2023</p>
                                    <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 2 sao</p>
                                    <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                    
                                    <p style="color:#918d7b">
                                    Đà Lạt, thành phố nổi tiếng với vẻ đẹp thơ mộng của những khu vườn hoa rực rỡ và các hồ nước trong lành. Khám phá hồ Xuân Hương, thác Pongour, hay thư giãn trong không khí tĩnh lặng của thành phố cao nguyên này.</p>
                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end t-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end t-list-block -->


                        <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div><!-- end pages -->
                    </div><!-- end columns -->





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


    <!--========================= NEWSLETTER-1 ==========================-->
    <?php
    include 'footer.php';
    ?>


    <!--======================= FOOTER =======================-->


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