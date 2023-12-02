<?php
session_start();
ob_start();
include 'connect.php';
include 'user.php';
include 'header.php';

  
  if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch($act){
        case 'index':
            include 'index.php';
            break;
        case 'login':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user = $_POST['user']; // Đây là giá trị mà người dùng nhập vào, có thể là số điện thoại hoặc email
            $pass = $_POST['pass'];
            // $kq = getuserinfo($user,$pass);
            $role = $kq [0]['role'];
            if($role==1){
                $_SESSION['role']=$role;
                header ('location: login.php');

            } else {
            $_SESSION['role']=$role;
            $_SESSION['iduser']=$kq[0]['id'];
            $_SESSION['phone']=$kq[0]['phone'];
             header ('location: index.php');
            }
        }
            
            break;
        case 'registration':
            include 'registration.php';
    }

  }
  else {
    include 'index.php';
  }
?>