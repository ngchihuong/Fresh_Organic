<?php
require('../db/connect.php');
$page;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$row_per_page = 3;
$per_row = ($page - 1) * $row_per_page;
include "../include/product.php";
$result = mysqli_query($conn, $sql);
$total_record = $total_record->num_rows;
$total_page = ceil($total_record / $row_per_page);
?>
<table class="w-100">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Danh mục</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Mô tả</th>
    </tr>
    <?php

    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <th>
                <?php echo $row['product_name'] ?>
            </th>
            <th>
                <?php
                $category_id = $row['category_id']; 
                $category_id_query = "SELECT * FROM tbl_danhmuc WHERE category_id =  $category_id AND active = 1";
                $category_id_result = mysqli_query($conn, $category_id_query);
                $this_category = mysqli_fetch_array($category_id_result);
                echo $this_category['category_name'];
                ?>
            </th>
            <th><img src="../img/product/<?php echo $row['product_image'] ?>" width="100px" height="100px" alt="image"></th>
            <th>
                <?php echo $row['product_price'] ?>
            </th>
            <th>
                <?php echo $row['product_quantity'] ?>
            </th>
            <th>
                <?php echo $row['detail'] ?>
            </th>
            <th>
                <a href="edit.php?id=<?php echo $row['product_id']?>"><button class="btn btn-outline-success">Sửa</button></a>
                <a onclick="return Del('<?php echo $row['product_name']?>')"  href="delete.php?id=<?php echo $row['product_id']?>"><button class="btn btn-outline-danger">Xóa</button></a>
            </th>
        </tr>
    <?php } ?>

</table>
<?php

include "../include/pagination.php"; ?>

<script>
function Del(name) {
    return confirm("Bạn có chắc muốn xóa : " + name + "?");
}
</script>