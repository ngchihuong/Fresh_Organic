<?php
require(__DIR__ .'/../db/connect.php');

$sql = "SELECT * FROM tbl_order_product GROUP BY product_id ORDER BY quantity DESC LIMIT 4";
$result = mysqli_query($conn, $sql);
while ($product = mysqli_fetch_array($result)) {
    $product_id = $product["product_id"];
    $sql = "SELECT * FROM tbl_sanpham WHERE product_id = $product_id";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    ?>
    <?php include "product_detail.php";?>
    
<?php }
mysqli_close($conn);
?>