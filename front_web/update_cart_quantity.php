<?php
session_start();
$id = $_GET['id'];
$type = $_GET['type'];
include '../db/connect.php';
// Fetch product information from the database
$sql = "SELECT * FROM tbl_sanpham WHERE product_id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
if ($type === 'decrease') {
    if ($_SESSION['cart'][$id]['product_quantity'] > 1) {
        $_SESSION['cart'][$id]['product_quantity']--;

        
        // Update quantity in the database
        $newQuantity = $product['product_quantity']+1;
        $updateSql = "UPDATE tbl_sanpham SET product_quantity = $newQuantity WHERE product_id = $id";
        mysqli_query($conn, $updateSql);
    } else {
        $newQuantity = $product['product_quantity']+1;
        $updateSql = "UPDATE tbl_sanpham SET product_quantity = $newQuantity WHERE product_id = $id";
        mysqli_query($conn, $updateSql);
        unset($_SESSION['cart'][$id]);
    }
} else {
  

    // Check if the quantity exceeds the limit
    if ($product['product_quantity']>=1) {
        $_SESSION['cart'][$id]['product_quantity']++;

        // Update quantity in the database
        $newQuantity = $product['product_quantity']-1;
        $updateSql = "UPDATE tbl_sanpham SET product_quantity = $newQuantity WHERE product_id = $id";
        mysqli_query($conn, $updateSql);
    }
}
header('location:xemgiohang.php');
?>