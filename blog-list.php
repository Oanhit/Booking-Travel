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
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    $active_tab = "blog";
    include 'header.php';
    ?>

    <!--================= PAGE-COVER ================-->
    <section class="page-cover" id="cover-hotel-detail" style="background-image: url(https://solopracticeuniversity.com/files/2015/12/Blog.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Blogs</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="blog-listings" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar left-side-bar">
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/poster3.png" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Blog</h2>
                                                    <span>Write</span>
                                                </div><!-- end ad-text -->
                                            </div><!-- end columns -->
                                        </a>
                                    </div><!-- end ad-img -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block instagram">
                                    <h2 class="side-bar-heading">Instagram</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#"><img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/07/tour-du-lich-tang-nao-nhiet.jpg" class="img-responsive" alt="insta-img" width="85px" height="155px" /></a></li>
                                        <li><a href="#"><img src="https://www.wowweekend.vn/document_root/upload/articles/image/BrowseContent/LifeStyle/202109/Travel%20Blogger/3.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://ik.imagekit.io/tvlk/blog/2021/12/blog-du-lich-2.jpg?tr=dpr-2,w-675" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://www.kkday.com/vi/blog/wp-content/uploads/%C4%83n-g%C3%AC-%E1%BB%9F-Ph%C3%BA-Qu%E1%BB%91c.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://www.kkday.com/vi/blog/wp-content/uploads/an-gi-o-phu-quoc-1.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://ats.vietnamtourism.gov.vn/wp-content/uploads/2022/12/CatCatVillage12.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://www.vietiso.com/images/content/blog/blog-t-9/travel-bloggers1_jpg.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://www.dulichrongachau.vn/image/cache/catalog/2018/Tin-tuc/mien-tay/cho-noi-cai-rang/cho-noi-cai-rang-4-cr-500x350.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                        <li><a href="#"><img src="https://phucan-hinata.vn/wp-content/uploads/2023/03/word-image-29-1-940x529.png" class="img-responsive" alt="insta-img" /></a></li>
                                    </ul>
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block contact">
                                    <h2 class="side-bar-heading">Contact Us</h2>
                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                        <div class="text">
                                            <p>oanhltk.22it@vku.udn.vn</p>
                                        </div>
                                    </div><!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                        <div class="text">
                                            <p>+222 – 5548 656</p>
                                        </div>
                                    </div><!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                        <div class="text">
                                            <p> Hoà Quý - Ngũ Hành Sơn - Đà Nẵng</p>
                                        </div>
                                    </div><!-- end c-list -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block recent-post">
                                    <h2 class="side-bar-heading">Recent Post</h2>

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-left-sidebar.html"><img src="images/recent-post-1.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div><!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-left-sidebar.html">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2017</span>
                                        </div><!-- end recent-text -->
                                    </div><!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-left-sidebar.html"><img src="images/recent-post-2.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div><!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-left-sidebar.html">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2017</span>
                                        </div><!-- end recent-text -->
                                    </div><!-- end recent-block -->

                                    <div class="recent-block">
                                        <div class="recent-img">
                                            <a href="blog-detail-left-sidebar.html"><img src="images/recent-post-3.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                        </div><!-- end recent-img -->

                                        <div class="recent-text">
                                            <a href="blog-detail-left-sidebar.html">
                                                <h5>Host a Family Party</h5>
                                            </a>
                                            <span class="date">27 May, 2017</span>
                                        </div><!-- end recent-text -->
                                    </div><!-- end recent-block -->

                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block follow-us">
                                    <h2 class="side-bar-heading">Follow Us</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#" style="color:blue"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                                        <li><a href="#" style="color:blue"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                        <li><a href="#" style="color:blue"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                                        <li><a href="#" style="color:orange"><span><i class="fa-brands fa-google-plus"></i></span></a></li>

                                    </ul>
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block tags">
                                    <h2 class="side-bar-heading">Tags</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#" class="btn btn-g-border">SPA</a></li>
                                        <li><a href="#" class="btn btn-g-border">Restaurant</a></li>
                                        <li><a href="#" class="btn btn-g-border">Searvices</a></li>
                                        <li><a href="#" class="btn btn-g-border">Wifi</a></li>
                                        <li><a href="#" class="btn btn-g-border">Tv</a></li>
                                        <li><a href="#" class="btn btn-g-border">Rooms</a></li>
                                        <li><a href="#" class="btn btn-g-border">Pools</a></li>
                                        <li><a href="#" class="btn btn-g-border">Work</a></li>
                                        <li><a href="#" class="btn btn-g-border">Sports</a></li>
                                    </ul>
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="space-right">

                            <div class="main-block blog-post blog-list">
                                <div class="main-img blog-post-img">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img src="https://res.klook.com/image/upload/q_85/c_fill,w_750/v1673946866/blog/raf9qqakoa71f4tnkxel.jpg" class="img-responsive" alt="blog-post-image" />
                                    </a>
                                    <div class="main-mask blog-post-info">
                                        <ul class="list-inline list-unstyled blog-post-info">
                                            <li><span><i class="fa fa-calendar"></i></span>28/12/2023</li>
                                            <li><span><i class="fa fa-user"></i></span>By: <a href="#">ADMIN</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end blog-post-img -->

                                <div class="blog-post-detail">
                                    <h2 class="blog-post-title"><a href="blog-detail-left-sidebar.html">Những địa điểm thú vị khám phá trên đất Việt</a></h2>
                                    <p>Từ những bãi biển trải dài bờ biển, những khu rừng nguyên sinh bí ẩn đến những di sản văn hóa lâu đời, chúng tôi sẽ dẫn bạn đi qua một hành trình khám phá đầy thú vị và đa chiều. Từ miền Bắc tới miền Nam, từ những thành phố sôi động đến những vùng quê yên bình, mỗi địa điểm đều có câu chuyện riêng và đẹp đẽ của nó.</p>
                                    <a href="blog-detail-left-sidebar.html" class="btn btn-orange">Chi tiết</a>
                                </div><!-- end blog-post-detail -->
                            </div><!-- end blog-post -->

                            <div class="main-block blog-post blog-list">
                                <div class="main-img blog-post-img">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img src="https://hnm.1cdn.vn/2020/03/19/hanoimoi.com.vn-uploads-images-phananh-2020-03-19-_ninhbinh.jpg" class="img-responsive" alt="blog-post-image" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-inline list-unstyled blog-post-info">
                                            <li><span><i class="fa fa-calendar"></i></span>18/12/2023</li>
                                            <li><span><i class="fa fa-user"></i></span>By: <a href="#">ADMIN</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end blog-post-img -->

                                <div class="blog-post-detail">
                                    <h2 class="blog-post-title"><a href="blog-detail-left-sidebar.html">Thế Giới Dưới Góc Nhìn Khác: Du Lịch Tự Nhiên và Môi Trường</a></h2>
                                    <p>Du lịch tự nhiên và sự cân nhắc về môi trường! Blog này không chỉ đưa bạn đến những điểm đến tuyệt vời trên thế giới mà còn nhấn mạnh về tầm quan trọng của việc bảo vệ và tôn trọng môi trường khi du lịch.</p>
                                    <a href="blog-detail-left-sidebar.html" class="btn btn-orange">Chi tiết</a>
                                </div><!-- end blog-post-detail -->
                            </div><!-- end blog-post -->

                            <div class="main-block blog-post blog-list">
                                <div class="main-img blog-post-img">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img src="https://vinapad.com/wp-content/uploads/2020/12/backpacker-la-gi.jpg" class="img-responsive" alt="blog-post-image" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-inline list-unstyled blog-post-info">
                                            <li><span><i class="fa fa-calendar"></i></span>25/12/2023</li>
                                            <li><span><i class="fa fa-user"></i></span>By: <a href="#">ADMIN</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end blog-post-img -->

                                <div class="blog-post-detail">
                                    <h2 class="blog-post-title"><a href="blog-detail-left-sidebar.html">Lên Kế Hoạch Cho Chuyến Du Lịch Backpacking Đầu Tiên Của Bạn</a></h2>
                                    <p>Từ việc chọn lựa điểm đến, chuẩn bị balo, lên kế hoạch tài chính, đến những gợi ý về lịch trình và giao tiếp với người địa phương, chúng tôi sẽ cung cấp cho bạn mọi thông tin cần thiết để bạn có một chuyến hành trình không chỉ thú vị mà còn an toàn và đầy trải nghiệm.</p>
                                    <a href="blog-detail-left-sidebar.html" class="btn btn-orange">Chi tiết</a>
                                </div><!-- end blog-post-detail -->
                            </div><!-- end blog-post -->

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

                        </div><!-- end space-right -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end blog-listings -->
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
    <section id="newsletter-1" class="section-padding back-size newsletter">
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