<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Bookings</title>
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
    </head>
    
    
    <body id="booking">
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
<?php
$active_tab = "users";
include 'header.php';
?>
        
        
        <!--========= PAGE-COVER ==========-->
        <section class="page-cover dashboard" style="background-color: #e3cfaa;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="#" style="color: black;">Home</a></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="dashboard-heading">
                            <h2>Travel <span>Profile</span></h2>
                            <?php
                            if (isset($_SESSION['user'])) {
                                $loggedInUser = $_SESSION['user']; // Lấy tên người dùng từ session đã lưu

                                // Hiển thị tên người dùng trên thanh menu
                                echo '<p style="color:#2a82a5;"> Chào  ' . $loggedInUser . ' ! Chúc bạn có những trải nghiệm tuyệt vời khi sử dụng website của chúng tôi</p>'; // Thay đổi dòng này để phản ánh giao diện của bạn


                                // Có thể thêm các thẻ HTML để hiển thị tên người dùng vào phần menu của bạn
                            }
                            ?>
                            <!-- <p>Hi Lisa, Welcome to Star Travels!</p> -->
                            <!-- <p>All your trips booked with us will appear here and you'll be able to manage everything!</p> -->
                        </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="dashboard.php"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        	<li><a href="user-profile.php"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li  class="active"><a href="#"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                            <li><a href="wishlist.php"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                            <li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Tour bạn đã đặt <i class="fa-regular fa-circle-check"></i></h2>
                                        <div class="dashboard-listing booking-listing">
                                        	<div class="dash-listing-heading">
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio01" name="radio" checked/>
                                                    <label for="radio01"><span></span>All Types</label>
                                                </div><!-- end custom-radio -->
                                                    
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio02" name="radio" />
                                                    <label for="radio02"><span></span>Hotels</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio03" name="radio" />
                                                    <label for="radio03"><span></span>Flights</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio04" name="radio" />
                                                    <label for="radio04"><span></span>Cars</label>
                                                </div><!-- end custom-radio -->
                                            </div>
                                            
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                            <td class="dash-list-text booking-list-detail">
                                                            	<h3>Tom's Restaurant</h3>
                                                                <ul class="list-unstyled booking-info">
                                                                	<li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                    <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                    <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                                </ul>
                                                                <button class="btn btn-orange">Message</button>
                                                            </td>
                                                            <td class="dash-list-btn"><button class="btn btn-orange">Huỷ</button><button class="btn">Thanh toán</button></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                            <td class="dash-list-text booking-list-detail">
                                                            	<h3>Tom's Restaurant</h3>
                                                                <ul class="list-unstyled booking-info">
                                                                	<li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                    <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                    <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                                </ul>
                                                                <button class="btn btn-orange">Message</button>
                                                            </td>
                                                            <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">Approve</button></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                            <td class="dash-list-text booking-list-detail">
                                                            	<h3>Tom's Restaurant</h3>
                                                                <ul class="list-unstyled booking-info">
                                                                	<li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                    <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                    <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                                </ul>
                                                                <button class="btn btn-orange">Message</button>
                                                            </td>
                                                            <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">Approve</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- end table-responsive -->
                                        </div><!-- end booking-listings -->
                                        
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

        
        <!--========================= NEWSLETTER-1 ==========================-->
       <?php
include 'footer.php';
       ?>
        
        <div id="edit-profile" class="modal card-modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Edit Profile</h3>
                    </div><!-- end modal-header -->
                    
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
