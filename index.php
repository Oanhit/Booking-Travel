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
                                <form method="post" action="search.php">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" id="departure" name="departure" placeholder="Điểm xuất phát" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" id="destination" name="destination" placeholder="Điểm đến" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="date" class="form-control " id="start_date" name="start_date" placeholder="Bắt đầu">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="date" class="form-control " id="end_date" name="end_date" placeholder="Kết thúc">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" id="tour_name" name="tour_name" placeholder="Tên tours" />
                                                <i class="fa fa-tags"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" type="submit" name="search">Tìm kiếm</button>
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


    <!--=============== Tour nổi bật ===============-->
    <section id="hotel-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tour Nổi Bật</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->
                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                        include 'connect.php';

                        // Truy vấn để lấy thông tin về tour có số lượng đặt nhiều nhất
                        $query_most_ordered = "SELECT tourid, COUNT(*) AS total_orders
                                               FROM `order`
                                               GROUP BY tourid
                                               ORDER BY total_orders DESC
                                               LIMIT 4";

                        $result_most_ordered = $conn->query($query_most_ordered);

                        if ($result_most_ordered && $result_most_ordered->num_rows > 0) {
                            while ($row_most_ordered = $result_most_ordered->fetch_assoc()) {
                                $tourId = $row_most_ordered['tourid'];

                                // Sử dụng tourId để lấy thông tin tour từ bảng 'tour'
                                $query_tour_info = "SELECT name, star_date, end_date
                                                    FROM tour
                                                    WHERE id = $tourId";

                                $result_tour_info = $conn->query($query_tour_info);

                                if ($result_tour_info && $result_tour_info->num_rows > 0) {
                                    while ($row_tour_info = $result_tour_info->fetch_assoc()) {
                                        $name_tour = $row_tour_info['name'];
                                        $start_date_str = $row_tour_info['star_date'];
                                        $end_date_str = $row_tour_info['end_date'];
                                        $end_date = DateTime::createFromFormat('Y-m-d', $end_date_str);
                                        $start_date = DateTime::createFromFormat('Y-m-d', $start_date_str);

                                        if ($end_date && $start_date) {
                                            $interval = $end_date->diff($start_date);
                                            $total_days = $interval->days;
                                            $total_nights = $total_days - 1;
                        ?>
                                            <div class="item">
                                                <div class="main-block tour-block">
                                                    <div class="main-img">
                                                        <?php
                                                        $url = "tour-detail.php?id=" . $tourId;
                                                        // var_dump($tourId);
                                                        ?>
                                                        <a href="<?php echo $url ?>">
                                                            <img src="https://media.vneconomy.vn/images/upload/2023/07/06/1688465738-grasp-the-rainy-season-travel-tips-to-da-lat.jpg" class="img-responsive" alt="tour-img" />
                                                        </a>
                                                    </div><!-- end offer-img -->

                                                    <div class="offer-price-2">
                                                        <ul class="list-unstyled">
                                                            <li class="price"><a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                                        </ul>
                                                    </div><!-- end offer-price-2 -->

                                                    <div class="main-info tour-info">
                                                        <div class="main-title tour-title">
                                                            <a href="#" style="font-size: 16px;"><?php echo $name_tour ?></a>
                                                            <p><i class="fa-solid fa-clock"></i><?php echo  $total_days . " ngày " . $total_nights . " đêm";  ?></p>
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
                        <?php
                                        }
                                    }
                                } else {
                                    echo "Không có thông tin tour.";
                                }
                            }
                        }


                        // $conn->close();
                        ?>
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


    <!--=============== TOUR  mới nhất ===============-->
    <section id="tour-offers" class="section-padding" style="background-image: url(https://tugo.com.vn/wp-content/uploads/con-gi-tuyet-hon-khi-ngoi-tren-cabin-ngam-hoang-hon-london-810x459.png);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2 style="color:#fffefc">Tour Mới Nhất</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                        <?php
                        include 'connect.php';

                        $query_tours = "SELECT * FROM tour ORDER BY create_at DESC LIMIT 5";
                        $result_tours = $conn->query($query_tours);

                        if ($result_tours && $result_tours->num_rows > 0) {
                            while ($row_tour = $result_tours->fetch_assoc()) {
                                $tourId = $row_tour['id'];
                                $tour_name = $row_tour['name'];
                                $departure_address = $row_tour['departure_address'];
                                $start_date_str = $row_tour['star_date'];
                                $end_date_str = $row_tour['end_date'];
                                $end_date = DateTime::createFromFormat('Y-m-d', $end_date_str);
                                $start_date = DateTime::createFromFormat('Y-m-d', $start_date_str);

                                if ($end_date && $start_date) {
                                    $interval = $end_date->diff($start_date);
                                    $total_days = $interval->days;
                                    $total_nights = $total_days - 1;

                                    $query_categories = "SELECT DISTINCT tour_category.id  
                                            FROM tour_category 
                                            INNER JOIN tour ON tour_categoryid = tour.id LIMIT 5";

                                    $result_categories = $conn->query($query_categories);
                                    if ($result_categories && $result_categories->num_rows > 0) {
                                        $row_category = $result_categories->fetch_assoc();
                                        $tourid = $row_category['id'];
                                        $_SESSION['tour_categoryid'] = $tourId;
                                        // $tour_category_name = $row_category['name'];
                        ?>

                                        <div class="item">
                                            <div class="main-block tour-block">
                                                <div class="main-img">
                                                    <?php
                                                    $url = "tour-detail.php?id=" . $tourId;
                                                    // var_dump($tourId);
                                                    ?>
                                                    <a href="<?php echo $url ?>">
                                                        <img src="https://nhn.1cdn.vn/thumbs/720x480/2023/03/24/base64-16795350350691923441338.png" class="img-responsive" alt="tour-img" />
                                                    </a>
                                                </div><!-- end offer-img -->

                                                <div class="offer-price-2">
                                                    <ul class="list-unstyled">
                                                        <li class="price" style="font-size: 15px;">Từ: <?php echo $departure_address ?><a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                                    </ul>
                                                </div><!-- end offer-price-2 -->

                                                <div class="main-info tour-info">
                                                    <div class="main-title tour-title">
                                                        <a href="#" style="font-size: 15px;"><?php echo $tour_name ?></a>
                                                        <p><i class="fa-solid fa-clock"></i><?php echo  $total_days . " ngày " . $total_nights . " đêm";  ?></p>
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
                        <?php
                                    }
                                }
                            }
                        } else {
                            echo "Không có tour mới nào.";
                        }



                        $conn->close();
                        ?>

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
                        <h2>Ưu đãi Tour</h2>
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
                                        <img src="https://cdnimgen.vietnamplus.vn/uploaded/wbxx/2023_08_21/hoian.jpg" class="img-responsive" alt="blog-img" style="max-height:240px" />
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