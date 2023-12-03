<?php
// session_start();
?>


<div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>Phường Hòa Quý - Quận Ngũ Hành Sơn - TP.Đà Nẵng</li>
                                <li><span><i class="fa fa-phone"></i></span>+84 702 579 654</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Đăng Nhập</a></li>
                                <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Đăng Ký</a></li>
                                <li style="display: none;"><a href="#"><span><i class="fa fa-plus"></i></span>Đăng Xuất</a></li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->				
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container" style="padding-left:0px; padding-right: 0px">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                    	<a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="index.php" class="navbar-brand" style="font-size: 28px; margin-left: -60px" ><span><i class="fa-solid fa-map-location"></i> OTB</span>TRAVELS</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1"  style="margin-right: -20px;">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown <?php if($active_tab =='home') echo 'active' ?>"><a href="index.php" style="font-size: 14px;"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
                    
                        <li class="dropdown <?php if($active_tab =='tour') echo 'active' ?>"><a href="tour-list.php" style="font-size: 14px;"><i class="fa-solid fa-globe"></i> Tours</a></li>
                        
                        <li class="dropdown <?php if($active_tab =='hotel') echo 'active' ?>"><a href="hotel-list.php" style="font-size: 14px;"><i class="fa-solid fa-hotel"></i> Khách sạn</a></li>

                        <li class="dropdown <?php if($active_tab =='blog') echo 'active' ?>"><a href="blog-list.php" style="font-size: 14px;"><i class="fa-brands fa-blogger-b"></i> Blogs</a></li>

                        <li class="dropdown <?php if($active_tab =='our') echo 'active' ?>"><a href="about-us.php" style="font-size: 14px;"><i class="fa-solid fa-paper-plane"></i> Giới thiệu</a></li>

                        <li class="dropdown <?php if($active_tab =='contact') echo 'active' ?>"><a href="contact-us.php" style="font-size: 14px;"><i class="fa-solid fa-phone"></i> Liên hệ</a></li>

 <?php
// session_start(); // Bắt đầu session để sử dụng thông tin đã lưu trữ khi đăng nhập

// Kiểm tra nếu người dùng đã đăng nhập bằng cách kiểm tra một biến session
if(isset($_SESSION['user'])) {
    $loggedInUser = $_SESSION['user']; // Lấy tên người dùng từ session đã lưu

    // Hiển thị tên người dùng trên thanh menu
    echo '<li class="dropdown' . ($active_tab == 'users' ? ' active' : '') . '"><a href="user-profile.php" style="color:brown; font-size:14px;"><i class="fa-solid fa-user"></i> ' . $loggedInUser . '</a></li>';
    // Thay đổi dòng này để phản ánh giao diện của bạn
    echo '<li class= "dropdown"><a href="login.php" style="color:#1c1ca3; font-size:14px;">Log Out <i class="fa-solid fa-right-from-bracket fa-bounce"></i></a></li>';
   
    // Có thể thêm các thẻ HTML để hiển thị tên người dùng vào phần menu của bạn
} else {
    // Nếu người dùng chưa đăng nhập, có thể hiển thị một nút hoặc liên kết để đăng nhập
    // echo '<a href="login.php">Đăng nhập</a>';

?>


                        <li class="dropdown <?php if($active_tab =='login') echo 'active' ?>" style="color:brown;"><a href="#" class="dropdown-toggle" data-toggle="dropdown">User<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Đăng nhập</a></li>
                                <li><a href="registration.html">Đăng ký</a></li>
                                <li><a href="#">Đổi mật khẩu</a></li>
                                <li><a href="#">Tour đã đặt</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Đăng xuất</a></li>
                            </ul>			
                        </li>
                            	<?php
}
?>	
                        </li>
                		<li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->        
        
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>OTBTRAVELS</h2>

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->