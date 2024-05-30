<?php require('../include/check_admin.php')?>
<?php 
require("../db/connect.php");
if (isset($_GET["id"])) {
    $product_id = $_GET["id"];
    $sql = "UPDATE tbl_sanpham SET active=0 WHERE product_id='$product_id'";
    $result = mysqli_query($conn,$sql);
    header("location:menu.php?report=Xóa thành công");
    exit();
}
if (isset($_GET["cate_id"])) {
    $cate_id = $_GET["cate_id"];
    $sql = "UPDATE tbl_danhmuc SET active = 0 WHERE category_id='$cate_id'";
    $result = mysqli_query($conn,$sql);
    header("location:show_all_category.php");
    exit();
}
?>