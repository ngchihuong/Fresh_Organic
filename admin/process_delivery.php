<?php require('../include/check_admin.php')?>
<?php 
require("../db/connect.php");
$id = $_GET["id"];
$sql = "UPDATE tbl_order SET status=1 WHERE id = $id";

$result = mysqli_query($conn,$sql);
header("location:menu.php?tab=hoadon");
?>