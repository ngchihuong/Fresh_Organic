<?php
session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    require("../db//connect.php");
    $cus = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE id = '$id'");
    $this_cus = mysqli_fetch_array($cus);
    if ($this_cus['permission'] != 1) {
        mysqli_close($conn);
        header('Location:../front_web/trangchu.php');
        exit();
    }
}
?>