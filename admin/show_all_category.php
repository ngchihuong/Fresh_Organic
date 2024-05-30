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
        <?php include("../css/style.css") ?>
    </style>
</head>

<body class="container mt-5">
    <?php
    require("../db//connect.php");
    $sql_category = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE active = 1");
    ?>

    <table class="w-100">
        <tr>
            <th>ID</th>
            <th>Danh mục</th>
        </tr>
        <?php while ($row_category = mysqli_fetch_array($sql_category)) { ?>
            <tr>
                <td>
                    <?php echo $row_category['category_id'] ?>
                </td>
                <td>
                    <?php echo $row_category['category_name'] ?>
                </td>
                <td>
                    <a class="border" style="text-decoration: none;" href="edit.php?cate_id=<?php echo $row_category['category_id'] ?>"> <button class="btn btn-success">Sửa</button> </a>
                    <a class="border" href="delete.php?cate_id=<?php echo $row_category['category_id'] ?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        <?php } ?>

    </table>
    <br>
    <a target="_blank" href="add_category.php" ><button class="btn btn-outline-success">Thêm danh mục</button> </a>
</body>

</html>