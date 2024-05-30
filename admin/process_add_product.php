<?php require('../include/check_admin.php')?>
<?php
require("../db/connect.php");

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $category = $_POST["loai"];
    $result_category = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE category_name = '$category'");
    $this_category = mysqli_fetch_array($result_category);
    $category_id = $this_category['category_id'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $price = $_POST["price"];
    $product_quantity = $_POST['product_quantity'];
    $quantity = $_POST["quantity"];
    $detail = $_POST['detail'];
    // if (!isset($_POST['detail'])) {
    //     $detail = "chưa có";
    // }
    $sql = "INSERT INTO tbl_sanpham (category_id,product_image, product_name, product_price,product_quantity, detail) VALUES ('$category_id','$image','$name','$price','$product_quantity','$detail')";
    // $sql = "INSERT INTO tbl_sanpham (category_id,product_image, product_name, product_price, product_quantity, detail) VALUES ('$category_id','$image','$name','$price','$quantity','$detail')";
    $result = mysqli_query($conn, $sql);
    move_uploaded_file($tmp_image, '../img/product/' . $image);
    header('location:./menu.php?tab=sanpham');
}
?>