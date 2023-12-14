<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Tours</title>
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
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php $active_tab = "tour";
    include 'header.php' ?>


    <!--=================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-hotel-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Tour List</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Search Tour</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="hotel-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <?php
                    include 'connect.php';

                    if (isset($_POST['search'])) {
                        $departure = $_POST['departure'];
                        $destination = $_POST['destination'];
                        $start_date = $_POST['start_date'];
                        $end_date = $_POST['end_date'];
                        $tour_name = $_POST['tour_name'];

                        // Bắt đầu câu truy vấn
                        $sql = "SELECT * FROM tour WHERE 1 = 1";

                        // Thêm điều kiện cho từng trường tìm kiếm nếu có giá trị được nhập
                        if (!empty($departure)) {
                            $sql .= " AND departure_address LIKE '%$departure%'";
                        }

                        if (!empty($destination)) {
                            $sql .= " AND destination_address LIKE '%$destination%'";
                        }

                        if (!empty($start_date)) {
                            $sql .= " AND star_date = '$start_date'";
                        }
                        if (!empty($end_date)) {
                            $sql .= " AND end_date = '$end_date'";
                        }
                        if (!empty($tour_name)) {
                            $sql .= " AND name LIKE '%$tour_name%'";
                        }

                        // Thực thi câu truy vấn
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $tourId = $row['id'];
                                $name_toour = $row['name'];
                                $departure = $row['departure_address'];
                                $start_date_str = $row['star_date'];
                                $end_date_str = $row['end_date'];
                                $end_date = DateTime::createFromFormat('Y-m-d', $end_date_str);
                                $start_date = DateTime::createFromFormat('Y-m-d', $start_date_str);

                                if ($end_date && $start_date) {
                                    $interval = $end_date->diff($start_date);
                                    $total_days = $interval->days;
                                    $total_nights = $total_days - 1;

                                    // Thực hiện truy vấn sử dụng INNER JOIN để lấy thông tin từ cả hai bảng
                                    $sql_tour = "SELECT DISTINCT tour_category.id  
                             FROM tour_category 
                             INNER JOIN tour ON tour_categoryid = tour.id";

                                    $result_tour = $conn->query($sql_tour);
                                    if ($result_tour) {
                                        if ($result_tour->num_rows > 0) {
                                            $row_tour = $result_tour->fetch_assoc();
                                            $tourid = $row_tour['id'];
                                            $_SESSION['tour_categoryid'] = $tourId;



                    ?>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                                                <div class="row">

                                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                                        <div class="grid-block main-block h-grid-block">
                                                            <div class="main-img h-grid-img">
                                                                <?php
                                                                $url = "tour-detail.php?id=" . $tourId;

                                                                // var_dump($tourId);
                                                                ?>
                                                                <a href="<?php echo $url ?>">
                                                                    <img src="https://statics.vinpearl.com/du-lich-ha-noi-4-ngay-3-dem-1_1681407076.jpg" class="img-responsive" alt="hotel-img" />
                                                                </a>
                                                                <div class="main-mask">
                                                                    <ul class="list-unstyled list-inline offer-price-1">
                                                                        <li class="price" style="font-size: 15px;">Từ: <?php echo   $departure ?><span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                                    </ul>
                                                                </div><!-- end main-mask -->
                                                            </div><!-- end h-grid-img -->

                                                            <div class="block-info h-grid-info">
                                                                <div class="rating">
                                                                    <span><i class="fa fa-star orange"></i></span>
                                                                    <span><i class="fa fa-star orange"></i></span>
                                                                    <span><i class="fa fa-star orange"></i></span>
                                                                    <span><i class="fa fa-star orange"></i></span>
                                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                                </div><!-- end rating -->

                                                                <h3 class="block-title"><a href="hotel-detail-right-sidebar.html"><?php echo $name_toour ?></a></h3>
                                                                <p class="block-minor"><?php echo  $total_days . " ngày " . $total_nights . " đêm";  ?></p>
                                                                <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                                                <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                                                <div class="grid-btn">
                                                                    <a href="hotel-detail-right-sidebar.html" class="btn btn-orange btn-block btn-lg">Chi tiết >></a>
                                                                </div><!-- end grid-btn -->
                                                            </div><!-- end h-grid-info -->
                                                        </div><!-- end h-grid-block -->
                                                    </div><!-- end columns -->
                                        <?php
                                        }
                                    }
                                }
                                        ?>
                                                </div><!-- end row -->

                                    <?php
                                }
                            }
                        } else {
                            echo "Không tìm thấy tour phù hợp với điều kiện tìm kiếm.";
                        }

                        $conn->close();

                                    ?>
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
        </div><!-- end hotel-grid -->

    </section><!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->

    <?php include 'footer.php' ?>


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>