<?php 
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone'];
$address = $_POST['address'];

require('../db/connect.php');
$sql = "SELECT COUNT(*) FROM tbl_khachhang WHERE email = '$email'" ;
$result = mysqli_query($conn,$sql) ;
$number_rows = mysqli_fetch_array($result)['COUNT(*)'] ;

if ($number_rows == 1) {
    header('location:signup.php?error=Trùng email!!');
    exit();
}

$sql = "INSERT INTO tbl_khachhang(name,email,password,address,phone_number) VALUES ('$name', '$email', '$password', '$address', '$phone_number')";
mysqli_query($conn,$sql) ;

$sql = "SELECT id FROM tbl_khachhang WHERE email = '$email'" ;
$result = mysqli_query($conn,$sql) ;
$id = mysqli_fetch_array($result)["id"] ;
$_SESSION['id'] = $id ;
$_SESSION['name'] = $name ;
$_SESSION['address'] = $address ;
$_SESSION['phone'] = $phone_number ;

mysqli_close($conn);
header('location:signin.php?success=Tạo tài khoản thành công mời bạn đăng nhập');
?>