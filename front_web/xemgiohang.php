<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location:signin.php");
    exit();
}
$cart = [''];
if (!empty($_SESSION["cart"])) {
    $cart = $_SESSION['cart'];
}

?>
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
        <?php include "../css/style.css"; ?>
    </style>
</head>

<body>
    <div class="container">
        <div>
            <a href="history_cart.php" target="_blank"><button class="btn btn-outline-primary mt-3 mr-2 ml-1">Lịch
                    sử mua hàng</button></a>
            <a href="../index.php"><button class="btn btn-outline-success mt-3">Tiếp tục mua</button></a>
        </div>
    </div>
    <div class="container mt-3">

        <table class="w-100 p-5 tb">
    
    
            <tr>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
            $total_price = 0;
            if ($cart == [""]) {
                echo "Giỏ hàng trống!";
            } else { ?>
    
                <?php foreach ($cart as $id => $product) { ?>
                    <tr>
                        <td><img height="100" width="100" src="../img/product/<?php echo $product['product_image'] ?>"
                                alt="anh_san_pham"></td>
                        <td>
                            <?php echo $product['product_name'] ?>
                        </td>
                        <td>
                            <?php echo $product['product_price'] ?>
                        </td>
                        <td>
                            <a href="update_cart_quantity.php?id=<?php echo $id ?>&type=decrease"><button>-</button></a>
                            <?php echo $product['product_quantity'] ?>
                            <a href="update_cart_quantity.php?id=<?php echo $id ?>&type=increase"><button>+</button></a>
                        </td>
                        <td>
                            <?php echo $product['product_price'] * $product['product_quantity'] . 'đ';
                            $total_price += $product['product_price'] * $product['product_quantity']; ?>
                        </td>
                        <td><a href="delete_cart.php?id=<?php echo $id ?>"><button class="btn btn-outline-danger">X</button></a></td>
                    </tr>
                <?php } ?>
    
            <?php } ?>
        </table>
        <h3>
            <?php echo $total_price ?>đ
        </h3>
        <?php
        $id = "";
        if (!empty($_SESSION['id']) && !empty($_SESSION['cart'])) {
            $id = $_SESSION['id'];
            require('../db/connect.php');
            $sql = "SELECT * FROM tbl_khachhang WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            $each = mysqli_fetch_array($result);
    
            ?>
            <div class="container mt-3 w-50">
                <h2>Thông tin người nhận</h2>
                <form action=" checkout.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" required id="name" placeholder="Enter name"
                            name="name_receiver" value="<?php echo $each['name'] ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="phone">Phone:</label>
                        <input type="phone" class="form-control" required id="phone" placeholder="Enter phone number"
                            name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" required id="address" placeholder="Enter address"
                            name="address_receiver" value="<?php echo $each['address'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Đặt hàng</button>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>