<?php
session_start();
$id = $_GET['id'];
include '../db/connect.php';
// Fetch product information from the database
$sql = "SELECT * FROM tbl_sanpham WHERE product_id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
$newQuantity = $product['product_quantity'] + $_SESSION['cart'][$id]['product_quantity'];
$updateSql = "UPDATE tbl_sanpham SET product_quantity = $newQuantity WHERE product_id = $id";
mysqli_query($conn, $updateSql);
unset($_SESSION['cart'][$id]);
header('location:xemgiohang.php');
?>