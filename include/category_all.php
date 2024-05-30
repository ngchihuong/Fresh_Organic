<?php
$sql_category = mysqli_query($conn,"SELECT * FROM tbl_danhmuc WHERE active = 1");
echo '<li><a class="text-success" href="?tab=sanpham">Tất cả</a></li>';
while ($row_category = mysqli_fetch_array($sql_category)) {
?>
<li><a class="text-success" href="?category_id=<?php echo $row_category['category_id'] ?>&tab=sanpham"><?php echo $row_category['category_name'] ?></a></li> 
<?php } ?>