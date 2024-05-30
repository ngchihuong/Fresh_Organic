<?php require('../include/check_admin.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <style>
        <?php include("../css/style.css"); ?>
    </style>
</head>

<body class="container" style="background-color: wheat;">
    <?php
    require("../db/connect.php");
    if (isset($_GET['id'])) { 
        $id = $_GET["id"];
        $product_result = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE product_id = $id AND active = 1");
        $this_product = mysqli_fetch_array($product_result);?>

        <form action="process_edit.php?id=<?php echo $id; ?>" method="post" class="w-25" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                    value="<?php echo $this_product['product_name'] ?>">
            </div>
            <label for="loai" class="form-label">Loại sản phẩm:</label>
            <a href="add_category.php" class="border">Thêm loại sản phẩm</a>
            <select class="form-select" id="loai" name="loai">
                <?php

                $sql = "SELECT * FROM tbl_danhmuc WHERE active = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['category_id'] == $this_product['category_id']) {
                        ?>
                        <option selected>
                            <?php echo $row['category_name'] ?>
                        </option>
                    <?php } ?>
                    <option>
                        <?php echo $row['category_name'] ?>
                    </option>
                <?php } ?>
            </select>
            <div class="mb-3">
                <img src="../img/product/<?php echo $this_product['product_image'] ?>" width="100px" height="100px" alt="">
                <label for="image" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <input type="hidden" name="old_image" value="<?php echo $this_product['product_image'] ?>">
            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Giá:</label>
                <input type="number" min="1000" step="1000" class="form-control" id="price" placeholder="Enter price"
                    name="price" value="<?php echo $this_product['product_price'] ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" min="1" step="1" class="form-control" id="quantity" placeholder="Enter quantity"
                    name="product_quantity" value="<?php echo $this_product['product_quantity'] ?>" >
            </div>
            <div class="mb-3 mt-3">
                <label for="detail">Mô tả:</label>
                <textarea class="form-control" rows="5" id="comment" name="detail"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Gửi</button>
        </form>
    <?php } ?>
    <?php if (isset($_GET['cate_id'])) {
        $cate_id = $_GET['cate_id'];
        $cate_result = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE category_id = $cate_id AND active = 1");
        $this_cate = mysqli_fetch_array($cate_result);
        ?>
        <form action="process_edit.php?cate_id=<?php echo $cate_id?>" method="post" >
            <div class="mb-3 mt-3">
                <label for="cate_name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="cate_name" placeholder="Enter name" name="cate_name"
                    value="<?php echo $this_cate['category_name'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Gửi</button>
        </form>
    <?php } ?>

</body>

</html>