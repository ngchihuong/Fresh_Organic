<?php session_start(); ?>
<?php
if (empty($_SESSION['id'])) {
    header('location:signin.php');
    exit();
}
$id = $_GET['pro_id'];
include '../db/connect.php';
$sql = "SELECT * FROM tbl_sanpham WHERE active = '1'&&product_id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_array($result);
if (empty($_SESSION['cart'][$id])) {

    $_SESSION['cart'][$id]['product_name'] = $product['product_name'];
    $_SESSION['cart'][$id]['product_image'] = $product['product_image'];
    $_SESSION['cart'][$id]['product_price'] = $product['product_price'];
    $_SESSION['cart'][$id]['product_quantity'] = 1;
} else {
    $_SESSION['cart'][$id]['product_quantity']++;
}
$newQuantity = $product['product_quantity'] - 1;
$updateSql = "UPDATE tbl_sanpham SET product_quantity = $newQuantity WHERE product_id = $id";


$url = "trangchu.php";
if (isset($_GET["url"])) {
    $url = $_GET["url"];
}
echo $url;
mysqli_query($conn, $updateSql);
header("Location:$url#$id");
?>