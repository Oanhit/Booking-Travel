

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
       $active_tab = "login";
       include 'header.php';
       ?>
        
        
        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-registration" style="background-image: url(https://cdn.reatimes.vn/mediav2/media_old/upload/Daz8bLLgWiyONlYhLXFY7g/files/Ph%E1%BB%91%20c%E1%BB%95%20H%E1%BB%99i%20An_%20Ngu%E1%BB%93n%20Photostravel.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Đăng ký</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active">Đăng ký</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields" style="background-color: #d5f2f5;;">
                                    <h3 style="color:rgb(209, 141, 52);">Đăng ký</h3>
                                    <p>Chào mừng bạn đến với trang đăng ký của chúng tôi! Hãy trở thành thành viên và khám phá những
                                         ưu đãi độc quyền của chúng tôi ngay hôm nay.</p>
                                    <form action="registration.php" method="post">
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="user" placeholder="Tên đăng nhập"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Họ tên"  required/>
                                            <span><i class="fa fa-envelope"></i></span>
                                       </div>
                                        <div class="form-group">
                                             <input type="email" class="form-control" name="email" placeholder="Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Số diện thoại"  required/>
                                            <span><i class="fa fa-phone"></i></span>
                                       </div>
                                        
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="pass" placeholder="Mật khẩu"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="passback" placeholder="Nhập lại mật khẩu"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        
                                        <input type="submit" class="btn btn-orange btn-block" value="Đăng kí" name="dangki" style="height: 40px; width: 150px; margin-left: 100px;">
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">Bạn đã có tài khoản ? <a href="login.php">Đăng nhập</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="https://media.vneconomy.vn/w800/images/upload/2022/09/05/rice-field-terrace-vietnam-shutterstock-554460046-d71ff868b1.jpeg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
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
<?php  include 'footer.php'; ?>
        
        
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