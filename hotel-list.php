<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Khách sạn</title>
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

    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <style>
        .block-title a {
            color: #936e4f;
        }

        .list-info .block-minor {
            color: #bb0b0b;
        }

        p {
            color: #0b2245;
        }
    </style>
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "hotel";
    include 'header.php';
    ?>

    <!--=================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-hotel-grid-list" style="background-image: url(https://statics.vinpearl.com/gia-khach-san-phu-quoc-1_1643103340.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Khách sạn</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Khách sạn</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="hotel-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/cc/93/53/rosamia-da-nang-hotel.jpg?w=700&h=-1&s=1" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">Rosamia Da Nang Hotel</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 1,247,386đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 282 Vo Nguyen Giap, My Khe Beach, Ngu Hanh Son District, Danang, Vietnam, Da Nang 550000 Vietnam</p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết </a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/302376126.jpg?k=b4cd262d1d61e077c967b5ff966d8829b4bbb5a77c08e70ef38ca2a0b7386794&o=&hp=1" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">TA Wellness Resort</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 6,436,386đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> Vo Nguyen Giap Street, Khue My Ward, Ngu Hanh Son District, Da Nang, Vietnam –</p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->
                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/89/7f/aa/guest-room.jpg?w=1100&h=-1&s=1" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">Hyatt Regency Danang Resort</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 4,065,122đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 05 Truong Sa Street Hoa Hai Ward, Ngu Hanh Son District, Đà Nẵng 550000 Việt Nam</p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://anantara-hoi-an-resort.hotelmix.vn/data/Photos/OriginalPhoto/12778/1277871/1277871013/Anantara-Hoi-An-Resort-Exterior.JPEG" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">Anantara Hoi An Resort</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 5,658,537đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 1 Pham Hong Thai Street, Hội An 880000 Việt Nam <br><br></p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/491151992.jpg?k=e801fce4f8bc401a134bd81e3edd454e2a65cb1db0e0efbc629279343911ddf8&o=&hp=1" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">Hotel Royal Hoi An - MGallery</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 2,120,000đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 39 Đào Duy Từ Street, Cam Pho, Hội An 560000 Việt Nam <br> <br></p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->

                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-right-sidebar.html">
                                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/354168551.jpg?k=1fe325bece610cdc39520831221a6b588cb168d38cec9f1e7c17ce41474b20e1&o=&hp=1" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><i class="fa-solid fa-wifi"></i> Free<span class="divider">|</span><span class="pkg"> Ngày/Đêm</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-right-sidebar.html">Gaia Hotel Phu Quoc</a></h3>
                                    <p class="block-minor"><i class="fa-solid fa-money-bill"></i> 832,000đ</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 71 Tran Hung Dao, Duong Dong, Phú Quốc, Việt Nam <br><br></p>
                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-lg">Chi tiết</a>
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->

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

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                        <div class="side-bar-block filter-block">
                            <h3>Sort By Filter</h3>
                            <p>Find your dream flights today</p>

                            <div class="panels-group">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-1" data-toggle="collapse">Select Category <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox" />
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>All</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox" />
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Apartment</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox" />
                                                    <label for="check03"><span><i class="fa fa-check"></i></span>Bed & Breakfast</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox" />
                                                    <label for="check04"><span><i class="fa fa-check"></i></span>Guest House</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox" />
                                                    <label for="check05"><span><i class="fa fa-check"></i></span>Hotels</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox" />
                                                    <label for="check06"><span><i class="fa fa-check"></i></span>Residence</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox" />
                                                    <label for="check07"><span><i class="fa fa-check"></i></span>Resorts</label>
                                                </li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-2" data-toggle="collapse">Facility<span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox" />
                                                    <label for="check08"><span><i class="fa fa-check"></i></span>Air Conditioning</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox" />
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Bathroom</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox" />
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Cable Tv</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check11" name="checkbox" />
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Parking</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check12" name="checkbox" />
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>Pool</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check13" name="checkbox" />
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>Wi-fi</label>
                                                </li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-3" data-toggle="collapse">Rating <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-3" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check14" name="checkbox" />
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>1 Star</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check15" name="checkbox" />
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>2 Star</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check16" name="checkbox" />
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>3 Star</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check17" name="checkbox" />
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>4 Star</label>
                                                </li>
                                                <li class="custom-check"><input type="checkbox" id="check18" name="checkbox" />
                                                    <label for="check18"><span><i class="fa fa-check"></i></span>5 Star</label>
                                                </li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                            </div><!-- end panel-group -->

                            <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div><!-- end price-slider -->
                        </div><!-- end side-bar-block -->

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/poster2.png" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
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

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end hotel-listing -->
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


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>