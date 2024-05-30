<?php 
require("../db/connect.php");
$id = $_GET["id"];
$sql = "UPDATE tbl_order SET status=2 WHERE id = $id";

$result = mysqli_query($conn,$sql);
header("location:history_cart.php");
?>