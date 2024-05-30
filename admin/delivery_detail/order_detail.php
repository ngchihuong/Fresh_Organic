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
        <?php include "../../css/style.css";?>
    </style>
</head>

<body class="container mt-5" style="background-color: rgba(0, 5, 0, 0.2);">
<?php
require_once "../../db/connect.php";
$order_id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM tbl_order_product Where order_id = $order_id");
?>

    <table class="">
        <tr>
            <th>Order ID</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
        </tr>
        <?php while ($orders = mysqli_fetch_array($sql)) { ?>
        <tr>
            <?php 
            $prod_id = $orders['product_id'];
            $prod_qr = mysqli_query($conn,"SELECT product_name,product_price FROM tbl_sanpham Where product_id = $prod_id");
            $prod = mysqli_fetch_array($prod_qr);
            ?>
            <td>
                <?php echo $orders['order_id'] ;?>
            </td>
            <td>
                <?php echo $prod['product_name']; ?>
            </td>
            <td>
                <?php echo $orders['quantity'] ;?>
            </td>
            <td>
                <?php echo $prod['product_price'];?>
            </td>
            <td>
                <?php echo $prod['product_price'] * $orders['quantity']; ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>

</html>