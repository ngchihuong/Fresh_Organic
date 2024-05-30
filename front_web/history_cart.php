<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php include "../css/style.css"; ?>
    </style>
</head>

<body class="container mt-5">
    <?php require('../db/connect.php'); ?>
    <div class="container mt-3">
        <h2>Lịch sử mua hàng</h2>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#menu0"><button class="btn btn-primary">Đã mua</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1"><button class="btn btn-primary">Đã nhận</button> </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="menu0" class="container tab-pane active"><br>
                <?php

                $customer_id = $_SESSION['id'];
                $sql = "SELECT * FROM tbl_order WHERE cus_id = $customer_id && status = 0 || status = 1 ORDER BY created_at DESC LIMIT 0,10";
                $result = mysqli_query($conn, $sql);


                ?>
                <table>
                    <tr>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại người nhận</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                    </tr>
                    <?php while ($orders = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $orders['receiver_name'] ?>
                            </td>
                            <td>
                                <?php echo $orders['address'] ?>
                            </td>
                            <td>
                                <?php echo $orders['phone'] ?>
                            </td>
                            <td>
                                <?php echo $orders['created_at'] ?>
                            </td>
                            <td>
                                <?php echo $orders['total'] ?>
                            </td>
                            <td>
                                <?php
                                if ($orders['status'] == 0) {
                                    echo "Đang chờ xử lý";
                                } elseif ($orders["status"] == 1) {
                                    echo "Đang giao";?>
                                    <a  href="checked.php?id=<?php echo $orders['id']?>" class="border"><button class="btn btn-success">Đã nhận</button></a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <?php

                $customer_id = $_SESSION['id'];
                $sql = "SELECT * FROM tbl_order WHERE cus_id = $customer_id && status = 2 ORDER BY created_at DESC LIMIT 0,10";
                $result = mysqli_query($conn, $sql);


                ?>
                <table>
                    <tr>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại người nhận</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                    </tr>
                    <?php while ($orders = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $orders['receiver_name'] ?>
                            </td>
                            <td>
                                <?php echo $orders['address'] ?>
                            </td>
                            <td>
                                <?php echo $orders['phone'] ?>
                            </td>
                            <td>
                                <?php echo $orders['created_at'] ?>
                            </td>
                            <td>
                                <?php echo $orders['total'] ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>



    <script>

    </script>
</body>

</html>