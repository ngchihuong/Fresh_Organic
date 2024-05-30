<?php 
session_start();
$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];


require('../db/connect.php');


$cart = $_SESSION['cart'];

$total_price = 0;
foreach ($cart as $each) {
    $total_price += $each['product_quantity'] * $each['product_price'];
}
$cus_id = $_SESSION['id'];
$status = 0;
$sql = "INSERT INTO  tbl_order (cus_id ,receiver_name ,address ,phone,total ,status )
VALUES ('$cus_id', '$name_receiver', '$address_receiver', '$phone_receiver', '$total_price', '$status')";
$result = mysqli_query($conn,$sql);

$sql = "SELECT MAX(id) FROM tbl_order WHERE cus_id = '$cus_id'";
$result = mysqli_query($conn,$sql);
$order_id = intval(mysqli_fetch_array($result)['MAX(id)']);

foreach ($cart as $product_id => $each) {
    $quantity = intval($each['product_quantity']);
    $product_id = intval($product_id);
    $price = intval($each['product_price'] * $each['product_quantity']);
    mysqli_query($conn,"insert into tbl_order_product (order_id,product_id,quantity,price) values ('$order_id', '$product_id', '$quantity', '$price')");
}
mysqli_close($conn);
unset($_SESSION['cart']);
header('location:xemgiohang.php');
?>