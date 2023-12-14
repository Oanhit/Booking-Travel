<!DOCTYPE html>
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
    <div id="tour-grid" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <?php
                // Kết nối đến cơ sở dữ liệu
                include 'connect.php';
                // Thực hiện truy vấn sử dụng INNER JOIN để lấy thông tin từ cả hai bảng
                $sql = "SELECT DISTINCT tour_category.id, tour_category.name, tour_category.status   
                             FROM tour_category 
                             INNER JOIN tour ON tour_categoryid = tour.id
                             ORDER BY tour_category.id DESC LIMIT 7";

                $result = $conn->query($sql);
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $tourId = $row['id'];
                            $tourName = $row['name'];
                            $tourStatus = $row['status'];
                            // $starDate = $row['star_date'];

                ?>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                                <div class="list-block main-block t-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img t-list-img">
                                            <?php
                                            $url = "tour-detail.php?id=" . $tourId;
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

    </div><!-- end row -->
</body>

</html>