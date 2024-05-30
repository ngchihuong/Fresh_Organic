<?php
include(__DIR__ . "/../db/connect.php");
$new_product = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE active = '1'  ORDER BY product_id DESC LIMIT 4");
while ($row = mysqli_fetch_array($new_product)) {
    ?>
    <?php
    include "product_detail.php";
?>
<?php } ?>