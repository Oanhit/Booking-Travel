<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Tour Detail Left Sidebar</title>
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

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <style>
        .noborder {
            color: #0e7cb3;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            background: none;
            border: none;
            /* Nếu bạn muốn tối ưu hơn, bạn có thể thêm các thuộc tính khác như padding, background-color, và margin tùy theo nhu cầu của bạn */
        }

        /* CSS để loại bỏ viền và background khi input được focus */
        input:focus {
            outline: none;
            /* Loại bỏ viền xung quanh khi focus */
            border: none;
            /* Loại bỏ border */
            background: none;
            /* Loại bỏ background */
        }

        .form-columns {
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex: 1;
            padding: 0 10px;
            /* Tùy chỉnh khoảng cách giữa cột */
        }

        input {
            font-size: 20px;
        }
    </style>
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "tour";
    include 'header.php';
    ?>
    <!--================ PAGE-COVER ================-->
    <section class="page-cover" id="cover-tour-detail" style="background-image: url(https://vcdn-kinhdoanh.vnecdn.net/2022/12/16/Sun-World-Phu-Quoc-7577-1671164502.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Chi tiết tour</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Chi tiết tour</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="tour-details" class="innerpage-section-padding">
            <div class="container">
                <?php
                include 'booking.php';
                ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="side-bar-block main-block ad-block">
                            <div class="main-img ad-img">
                                <a href="#">
                                    <img src="images/poster4.png" class="img-responsive" alt="car-ad" />
                                    <div class="ad-mask">
                                        <div class="ad-text">
                                            <span>Luxury</span>
                                            <h2>Tour</h2>
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

            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                <?php
                // Kết nối đến cơ sở dữ liệu
                include 'connect.php';
                if (isset($_GET['id'])) {
                    $categoryId = $_GET['id'];
                    $_SESSION['tour_categoryid'] = $categoryId;
                    // Thực hiện truy vấn sử dụng INNER JOIN để lấy thông tin từ cả hai bảng
                    $sql = "SELECT tour_category.id  
                                    FROM tour_category 
                                    INNER JOIN tour ON tour_categoryid = tour.id
                                    WHERE tour_category.id = $categoryId";
                   
                    $result = $conn->query($sql);

                    if ($result) {
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $tourId = $row['id'];

                ?>
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="https://datviettour.com.vn/uploads/images/mien-nam/phu-quoc/hinh-danh-thang/850px/thi-tran-hoang-hon-phu-quoc-850px.jpg" class="img-responsive" alt="feature-img" /></div>
                                    <div><img src="https://vcdn1-dulich.vnecdn.net/2022/04/08/dulichPhuQuoc-1649392573-9234-1649405369.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=SU6n3IvJxW1Sla0xqg31Kg" class="img-responsive" alt="feature-img" /></div>
                                    <div><img src="https://vpq.vn/dau-tu/du-an/hoang-hon-sunset-town-phu-quoc.jpg" class="img-responsive" alt="feature-img" /></div>
                                    <div><img src="https://dongbachanoi.com/wp-content/uploads/2020/11/safari-gia-lam.jpeg" class="img-responsive" alt="feature-img" /></div>
                                    <div><img src="https://www.tnktravel.com/wp-content/uploads/2016/12/Vinpearl-Safari-phu-quoc.jpg" class="img-responsive" alt="feature-img" /></div>
                                </div><!-- end feature-slider -->

                                <div class="feature-slider-nav">
                                    <div><img src="https://elitetour.com.vn/files/images/vinpearl-safari-phu-quoc(1).jpg" class="img-responsive" alt="feature-thumb" style="max-height:80px" /></div>
                                    <div><img src="https://www.centralcons.vn/wp-content/uploads/2021/12/121101678_672984973348701_1338295634941350714_o.jpg" class="img-responsive" alt="feature-thumb" style="max-height:80px" /></div>
                                    <div><img src="https://www.kkday.com/vi/blog/wp-content/uploads/Pink-and-White-Colorful-Brushstroke-Art-Education-YouTube-Thumbnail-min-2.jpg" class="img-responsive" alt="feature-thumb" style="max-height:80px" /></div>
                                    <div><img src="https://static.vinwonders.com/2022/05/grand-world-phu-quoc-2.jpg" class="img-responsive" alt="feature-thumb" style="max-height:80px" /></div>
                                    <div><img src="https://baocantho.com.vn/image/fckeditor/upload/2020/20200420/images/A1.jpg" class="img-responsive" alt="feature-thumb" style="max-height:80px" /></div>
                                </div><!-- end feature-slider-nav -->

                                <ul class="list-unstyled features tour-features">
                                    <li>
                                        <div class="f-icon"><i class="fa fa-wheelchair"></i></div>
                                        <div class="f-text">
                                            <p class="f-heading">Ghế</p>
                                            <?php
                                            // Kết nối đến cơ sở dữ liệu
                                            include 'connect.php'; // Chứa thông tin kết nối đến cơ sở dữ liệu

                                            // Truy vấn để lấy number_people từ cơ sở dữ liệu
                                            $sql = "SELECT number_people FROM tour WHERE id = $tourId"; // Thay 'tour' và 'tour_id' bằng tên bảng và điều kiện lấy dữ liệu của bạn
                                            $result = $conn->query($sql);

                                            // if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();
                                            $number_people = $row["number_people"]; // Lấy number_people từ cơ sở dữ liệu
                                            // var_dump($number_people);
                                            // Sử dụng dữ liệu number_people ở đây
                                            echo "<p class='f-data'> " . $number_people . "</p>";
                                            // Đóng kết nối
                                            $conn->close();
                                            ?>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="f-icon"><i class="fa fa-calendar"></i></div>
                                        <div class="f-text">
                                            <p class="f-heading">Thời gian</p>
                                            <?php
                                            // Kết nối đến cơ sở dữ liệu 
                                            include 'connect.php'; // Chứa thông tin kết nối đến cơ sở dữ liệu

                                            // Truy vấn để lấy end_date và start_date từ cơ sở dữ liệu
                                            $sql = "SELECT end_date, star_date FROM tour WHERE id = $tourId"; // Thay 'tour' và 'tour_id' bằng tên bảng và điều kiện lấy dữ liệu của bạn

                                            $result = $conn->query($sql); // đổi id thì nó vẫn hiện mà , rứa là do truy vẫn id của bảng tour bị sai, sửa đi :V , làm như nạy đó mà nó ko đúng :))

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $end_date_str = $row["end_date"]; // Lấy end_date từ cơ sở dữ liệu
                                                    $start_date_str = $row["star_date"]; // Lấy start_date từ cơ sở dữ liệu

                                                    // Chuyển đổi chuỗi ngày thành đối tượng DateTime nếu định dạng đúng
                                                    $end_date = DateTime::createFromFormat('Y-m-d', $end_date_str);
                                                    $start_date = DateTime::createFromFormat('Y-m-d', $start_date_str);

                                                    if ($end_date && $start_date) {
                                                        // Tính số ngày giữa hai ngày nếu chuyển đổi thành công
                                                        $interval = $end_date->diff($start_date);
                                                        $total_days = $interval->days; // Số ngày giữa hai ngày
                                                        $total_nights = $total_days - 1; // Giả sử mỗi ngày đi đều có một đêm tương ứng

                                                        echo "<p class='f-data'>" . $total_days . " ngày " . $total_nights . " đêm" . "</p>";
                                                    } else {
                                                        echo "Lỗi chuyển đổi định dạng ngày.";
                                                    }
                                                }
                                            } else {
                                                echo "Không tìm thấy thông tin tour.";
                                            }

                                            // Đóng kết nối
                                            $conn->close();
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end detail-slider -->
                            <div class="detail-tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#tour-information" data-toggle="tab">Thông tin Tour</a></li>
                                    <!-- <li><a href="#flight" data-toggle="tab">Flight</a></li> -->
                                    <li><a href="#map-overview" data-toggle="tab">Xem Map</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="tour-information" class="tab-pane in active" style="background-color:#fff7e5">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="images/hotel-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                                <p class="block-minor" style="color:orange"><i class="fa-solid fa-hotel"></i> 3 sao</p>
                                                <p class="block-minor" style="color:#649156"><i class="fa-solid fa-bus-simple"></i> Xe ghế ngồi</p>
                                            </div><!-- end columns -->

                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3 style="color:brown; font-size:20px; margin-top: -20px">Thông tin Tour <i class="fa-solid fa-pen-clip"></i></h3>
                                                <div class="form-columns">
                                                    <div class="column">
                                                        <!-- Cột 1 -->
                                                        <?php
                                                        // Đoạn mã PHP để lấy dữ liệu từ cơ sở dữ liệu và hiển thị ở cột 1
                                                        // Kết nối đến cơ sở dữ liệu (thay thế các giá trị này bằng thông tin của bạn)
                                                        include 'connect.php';

                                                        // Query để lấy thông tin từ bảng tour
                                                        $sql = "SELECT name, price_adult, price_child, number_people FROM tour WHERE id = $tourId"; // :)) đổi sao đây cho hn thành biến 

                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo 'Tour: <input type="text" class="noborder" name="name" value="' . $row["name"] . '"readonly><br>';
                                                                echo 'Người lớn: <input type="text" class="noborder" name="price_adult" value="' . $row["price_adult"] . '.000đ/người"readonly><br>';
                                                                echo 'Trẻ em: <input type="text" class="noborder" name="price_child" value="' . $row["price_child"] . '.000đ/người"readonly><br>';
                                                                echo 'Số lượng: <input type="text" class="noborder" name="number_people" value="' . $row["number_people"] . ' chỗ"readonly><br>';
                                                            }
                                                        } else {
                                                            echo "Không có dữ liệu trong bảng tour";
                                                        }

                                                        // Đóng kết nối
                                                        $conn->close();
                                                        ?>
                                                    </div>

                                                    <div class="column">
                                                        <!-- Cột 2 -->
                                                        <?php
                                                        // Đoạn mã PHP để lấy dữ liệu từ cơ sở dữ liệu và hiển thị ở cột 2
                                                        include 'connect.php';

                                                        $sql = "SELECT star_date, end_date, departure_address, destination_address FROM tour WHERE id = $tourId";

                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo 'Ngày bắt đầu: <input type="text" class="noborder" name="start_date" value="' . $row["star_date"] . '"readonly><br>';
                                                                echo 'Ngày kết thúc: <input type="text" class="noborder" name="end_date" value="' . $row["end_date"] . '"readonly><br>';
                                                                echo 'Địa điểm khởi hành: <input type="text" class="noborder" name="departure_address" value="' . $row["departure_address"] . '"readonly><br>';
                                                                echo 'Đích đến: <input type="text" class="noborder" name="destination_address" value="' . $row["destination_address"] . '"readonly><br>';
                                                            }
                                                        } else {
                                                            echo "Không có dữ liệu trong bảng tour";
                                                        }

                                                        $conn->close();
                                                        ?>
                                                    </div>
                                                </div>
                                    <?php
                                }
                            }
                        } else {
                            echo "Không có thông tin tour để hiển thị với id này.";
                        }
                                    ?>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->

                                    <div id="map-overview" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="images/hotel-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->

                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Our Map</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->

                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            <div class="row">
                                <h2 style="color:#dd830f; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">TOURS có sẵn <i class="fa-solid fa-code"></i></h2>
                                <?php
                                include 'list.php';

                                ?>
                                <div class="pages" style="margin-top : -70px">
                                    <ol class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ol>
                                </div><!-- end pages -->
                            </div>
            </div><!-- end tour-detail -->
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-slick.js"></script>
    <!-- Page Scripts Ends -->
    <!-- Input text để nhập ngày tháng dưới dạng Y-m-d -->



</body>

</html>