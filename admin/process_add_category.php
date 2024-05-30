<?php require('../include/check_admin.php')?>
<?php
require("../db/connect.php");
if (isset($_POST["name"])) {
    $category = $_POST['name'];
    $row = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE category_name = '$category'");
    $cate = mysqli_num_rows($row);
    if ($cate >= 1) {
        $categ = mysqli_fetch_array($row);
        if ($categ["active"] == 0) {
            $sql = "UPDATE tbl_danhmuc SET active = 1 WHERE category_name='$category'";
            $result = mysqli_query($conn, $sql);
            header("location:add_category.php?report=Thêm thành công");
            exit();
        } else {
            header("location:add_category.php?report=Danh mục sản phẩm đã tồn tại");
            exit();
        }
    } else {
        mysqli_query($conn, "INSERT INTO tbl_danhmuc (category_name) VALUES ('$category')");
        header("location:add_category.php?report=Thêm thành công");
        exit();
    }
}
?>