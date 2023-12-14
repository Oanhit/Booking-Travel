<?php
session_start();
ob_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>User Profile</title>
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

<style>
    .profile-container {
        width: 300px;
        margin-left: 320px;
        margin-top: -240px;
        ;
        justify-content: flex-end;
        align-items: flex-start;
    }

    .form_user_profile {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: flex-end;
    }

    .name {
        display: block;
        color: orange;
        font-size: 17px;
        font-family: serif;
    }

    body {
        background: #f1f1c4;
    }
</style>

<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <?php
    // session_start();
    ?>


    <?php
    $active_tab = "users";
    include 'header.php';
    ?>

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>OTBTRAVELS</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->


    <!--========== PAGE-COVER =========-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
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
                                echo '<p style="color:#2a82a5;"> Chào  ' . $loggedInUser . ' ! Chúc bạn có những trải nghiệm tuyệt vời khi sử dụng website của chúng tôi</p>';
                            }
                            ?>
                        </div><!-- end dashboard-heading -->

                        <div class="dashboard-wrapper">
                            <div class="row">

                                <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                    <ul class="nav nav-tabs nav-stacked text-center">
                                        <li><a href="dashboard.php"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        <li class="active"><a href="#"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li><a href="mybooking.php"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                        <li><a href="wishlist.php"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                        <li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                    </ul>
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                    <h2 class="dash-content-title" style="color:#3da912">My Profile</h2>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>Profile Details</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-5 col-md-4 user-img">
                                                    <!-- ... -->
                                                    <?php

                                                    // Kiểm tra xem ảnh đã được cập nhật thành công hay chưa
                                                    if (isset($_SESSION['uploaded_image']) && $_SESSION['uploaded_image'] !== '') {
                                                        echo '<img class="img-responsive" src="' . $_SESSION['uploaded_image'] . '" alt="Ảnh người dùng" style="width: 300px; height: 300px; border-radius: 80%">';

                                                        // Sau khi hiển thị, bạn có thể xoá session để không hiển thị ảnh nữa:
                                                        // unset($_SESSION['uploaded_image']);
                                                    } else {
                                                        // Nếu không cập nhật thành công, hiển thị ảnh mặc định hoặc ảnh trước khi cập nhật
                                                        echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/800px-User-avatar.svg.png" class="img-responsive" alt="user-img" />';
                                                    }
                                                    ?>
                                                    <!-- ... -->

                                                    <div class="profile-container">
                                                        <?php
                                                        include 'connect.php';

                                                        if (isset($_SESSION['dangnhap']) && $_SESSION['dangnhap'] === true) {
                                                            $username = $_SESSION['user'];
                                                            // $password = $_SESSION['pass'];

                                                            // Truy vấn để lấy ID từ cơ sở dữ liệu
                                                            $query = "SELECT id FROM user WHERE username='$username'";
                                                            $result = $conn->query($query);

                                                            if ($result) {
                                                                if ($result->num_rows > 0) {
                                                                    // Đăng nhập thành công, lấy ID người dùng từ kết quả truy vấn
                                                                    $row = $result->fetch_assoc();
                                                                    $userID = $row['id'];

                                                                    // Truy vấn để lấy thông tin còn lại từ cơ sở dữ liệu
                                                                    $sql = "SELECT birthday, email, phone, password, address, name FROM user WHERE id='$userID'";
                                                                    $result_data = $conn->query($sql);

                                                                    if ($result_data) {
                                                                        if ($result_data->num_rows > 0) {
                                                                            // Lấy thông tin từ kết quả truy vấn
                                                                            $row_data = $result_data->fetch_assoc();
                                                                            $dateOfBirth = $row_data['birthday'];
                                                                            $email = $row_data['email'];
                                                                            $phone = $row_data['phone'];
                                                                            $password = $row_data['password'];
                                                                            $address = $row_data['address'];
                                                                            $name = $row_data['name'];

                                                                            // Form để hiển thị thông tin người dùng 
                                                                            echo "<form class='form_user_profile' action='update-profile.php' method='post'>";
                                                                            echo "<input class='name'  type='hidden' name='user' value='$username'>";
                                                                            echo "<input class='name'  type='hidden' name='name' value='$name'>";
                                                                            echo "<input class='name' type='hidden' name='birthday' value='$dateOfBirth'>";
                                                                            echo "<input class='name' type='hidden' name='email' value='$email'>";
                                                                            echo "<input class='name' type='hidden' name='phone' value='$phone'>";
                                                                            echo "<input class='name' type='hidden' name='address' value='$address'>";
                                                                            echo "</form>";

                                                                            // Hiển thị thông tin người dùng
                                                                            echo "<span class='name'><strong>Tên đăng nhập:</strong> $username</span><br>";
                                                                            echo "<span class='name'><strong>Họ tên:</strong> $name</span><br>";
                                                                            echo "<span class='name'><strong>Ngày sinh:</strong> $dateOfBirth</span><br>";
                                                                            echo "<span class='name'><strong>Email:</strong> $email</span><br>";
                                                                            echo "<span class='name'><strong>Số điện thoại:</strong> $phone</span><br>";
                                                                            echo "<span class='name'><strong>Địa chỉ:</strong> $address</span><br>";
                                                                        } else {
                                                                            // Không tìm thấy thông tin người dùng
                                                                            echo "Không tìm thấy thông tin người dùng.";
                                                                        }
                                                                    } else {
                                                                        // Lỗi truy vấn SQL
                                                                        echo "Lỗi khi truy vấn cơ sở dữ liệu: " . $conn->error;
                                                                    }
                                                                } else {
                                                                    // Thông tin đăng nhập không chính xác
                                                                    echo "Thông tin đăng nhập không chính xác.";
                                                                }
                                                            } else {
                                                                // Lỗi truy vấn SQL
                                                                echo "Lỗi khi truy vấn cơ sở dữ liệu: " . $conn->error;
                                                            }
                                                        } else {
                                                            echo "Vui lòng đăng nhập để xem thông tin.";
                                                        }
                                                        ?>

                                                    </div>
                                                    <button class="btn" data-toggle="modal" data-target="#edit-profile" style="margin-top:10px; background-color: #b3eff1; color:black;">Edit Profile</button>
                                                </div><!-- end columns -->

                                                <div class="col-sm-12 user-desc">
                                                    <h4 style="color: olivedrab"><i class="fa-solid fa-palette" style="font-size: 30px"></i></h4>
                                                    <p style="color:#149325; font-size: 14px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Sự cố gắng không bao giờ là vô ích, nó là nền tảng cho mọi thành công."

                                                        Sự cố gắng là yếu tố không thể thiếu trong hành trình đạt được mục tiêu. Nó không chỉ mang lại kết quả tốt đẹp mà còn là điều kiện tiên quyết cho sự thành công. Khi chúng ta cố gắng hết mình, dù kết quả có như
                                                        mong đợi hay không, chính quá trình đó cũng mang lại kinh nghiệm, sự học hỏi và sức mạnh để vươn lên.</p>

                                                </div><!-- end columns -->
                                            </div><!-- end row -->

                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-detault -->
                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->


    <!-- footer -->
    <?php
    include 'footer.php';
    ?>


    <div id="edit-profile" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="color: #b3592c">Edit Profile <i class="fa-solid fa-user-pen fa-flip"></i></h3>
                </div><!-- end modal-header -->

                <div class="modal-body">

                    <form action="update-profile.php" method="post" enctype="multipart/form-data">
                        <!-- <label class="form-group" for="user">Tên đăng nhập:</label>
                        <input class="form-control" type="text" name="username" id="username" value="<?php echo $username ?>">
                        <br> -->
                        <label class="form-group" for="name">Họ tên:</label>
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $name ?>">
                        <br>
                        <label class="form-group" for="birthday">Ngày sinh:</label>
                        <input class="form-control" type="text" name="birthday" id="birthday" value="<?php echo $dateOfBirth ?>" placeholder="yyyy/mm/dd" >
                        <br>
                        <label class="form-group" for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" value="<?php echo $password ?>">
                        <br>
                        <label class="form-group" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $email ?>">
                        <br>
                        <label class="form-group" for="phone">Số điện thoại:</label>
                        <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $phone ?>">
                        <br>
                        <label class="form-group" for="address">Địa chỉ:</label>
                        <input class="form-control" type="text" name="address" id="address" value="<?php echo $address ?>">
                        <br>
                        <label class="form-group" for="user_image">Ảnh người dùng:</label>
                        <input class="form-control" type="file" name="user_image" id="user_image" onchange="previewImage(event)">
                        <br>
                        <img id="preview" src="#" alt="Ảnh xem trước" style="display: none; max-width: 200px;">
                        <br>
                        <!-- <input type="submit" value="Gửi thông tin"> -->

                        <button class="btn btn-orange" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Lưu</button>
                    </form>
                </div><!-- end modal-bpdy -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end edit-profile -->

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>