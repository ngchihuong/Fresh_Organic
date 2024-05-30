<?php require('../include/check_admin.php') ?>
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
        <?php include('../css/style.css'); ?>
    </style>
</head>

<body>

    <div class="container-fluid mt-3 d-flex justify-content-between">
        <p>Xin chào
            <span style="color:blue;"><?php echo $_SESSION['name'] ?></span>
        </p>
        <a href="../front_web/signout.php"><button class="btn btn-success mb-2">Đăng xuất</button></a>
    </div>
    <div class="row" style="height: 100vh;">
        <?php
        $tab = "sanpham";
        if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
        }
        ?>
        <div class="col-2 border pt-3" style="background-color: rgba(0, 0, 0, 0.8);">
            <ul class="nav flex-column">
                <li class="nav-item <?php
                if ($tab == "sanpham") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link text-light" href="?tab=sanpham">
                        Sản phẩm
                    </a>
                </li>
                <li class="nav-item <?php
                if ($tab == "khachhang") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link text-light" href="?tab=khachhang">
                        Khách hàng
                    </a>
                </li>
                <li class="nav-item <?php
                if ($tab == "hoadon") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link text-light" href="?tab=hoadon">
                        Hóa đơn
                    </a>
                </li>
                <li class="nav-item <?php
                if ($tab == "doanhthu") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link text-light" href="?tab=doanhthu">
                        Doanh thu
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-10 border" style="background-color: rgba(50, 50, 50, 0.02);">
            <?php
            $tab = "sanpham";
            if (isset($_GET['tab'])) {
                $tab = $_GET['tab'];
            }
            switch ($tab) {
                case 'sanpham':
                    include "./show_all_product.php";
                    break;
                case 'khachhang':
                    include "./show_all_customer.php";
                    break;
                case 'hoadon':
                    include "./delivery.php";
                    break;
                case 'doanhthu':
                    include "./sanphambanchay.php";
                    break;
                default:
                    include "./show_all_product.php";
                    break;
            }

            ?>
        </div>
    </div>


</body>

</html>