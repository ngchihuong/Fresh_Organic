<?php 
$email = $_POST['email'];
$password = $_POST['password'];

require('../db/connect.php');
$sql = "SELECT * FROM tbl_khachhang WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$sql) ;
$number_rows = mysqli_num_rows($result) ;

if ($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];

    if ($each['permission']== 1) {
        header('location:../admin/menu.php');
        exit();
    }
    header("location:../index.php");
    exit();
}
header("location:signin.php?error=Tài khoản hoặc mật khẩu không chính xác!");
exit();
?>