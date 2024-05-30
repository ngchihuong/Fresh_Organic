<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include "./css/style.css"; ?>
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div>
        <?php
        $param = "";
        if (isset($_GET["page"])) {
            $page1 = ($_GET["page"]);
            $param = "&page=" . $page1;
        }
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
            $param .= "&url=" . $url;
        }
        include("../db/connect.php");
        $product = mysqli_query($conn, "SELECT * FROM tbl_sanpham where product_id =" . $_GET['pro_id']);
        $result = mysqli_fetch_assoc($product);
        ?>
        <div class="row">
            <div style="position:fixed;"><a href="../index.php"><button class="btn btn-success"> << Về trang chủ</button> </a></div>
            <div class="col-sm-8 text-center ml-0" style="height:100vh">
                <img src="../img/product/<?php echo $result['product_image'] ?>" width="100%" height="100%" alt="image">
            </div>
            <div class="col-sm-4 mt-5 pl-3">
                <h3>
                    <?php echo $result['product_name'] ?>
                </h3><br>
                <div style="border-top: solid 1px;border-bottom: solid 1px;padding: 15px 0px;">
                    <p><span style="color: red;font-size: 30px;">
                            <?php echo $result['product_price'] ?>₫
                        </span>
                    </p>
                    <p>Số lượng : <?php echo $result['product_quantity'];?></p>
                </div><br>
                <div class="text-center">
                    <?php
                    if ($result['product_quantity'] <= 0) {
                        echo "Hết hàng";
                    } else { ?>
                        <?php if (empty($_SESSION['id'])) { ?>
                            <a href="./signin.php"><button class="btn btn-outline-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 239 180"
                                        fill="none">
                                        <path
                                            d="M12.7377 0.0606206C8.77599 0.694496 5.22834 2.8762 2.8752 6.12577C0.522057 9.37535 -0.443817 13.4266 0.190058 17.3883C0.823933 21.3501 3.00563 24.8977 6.25521 27.2509C9.50479 29.604 13.5561 30.5699 17.5178 29.936H62.3308L65.0196 37.4048L77.2685 74.7491L89.5174 112.093C90.7124 115.977 95.7913 119.562 99.6751 119.562H204.239C208.421 119.562 213.201 115.977 214.397 112.093L238.596 37.4048C239.791 33.521 237.998 29.936 233.815 29.936H101.169L89.8162 8.42573C88.607 5.9568 86.74 3.86945 84.4207 2.39352C82.1013 0.917581 79.4197 0.110319 76.671 0.0606206L16.9203 0.0606206C16.0258 -0.0202069 15.1259 -0.0202069 14.2315 0.0606206C13.6345 0.0247379 13.0359 0.0247379 12.439 0.0606206L12.7377 0.0606206ZM107.144 149.437C98.7788 149.437 92.2062 156.01 92.2062 164.375C92.2062 172.74 98.7788 179.313 107.144 179.313C115.509 179.313 122.082 172.74 122.082 164.375C122.082 156.01 115.509 149.437 107.144 149.437ZM196.77 149.437C188.405 149.437 181.832 156.01 181.832 164.375C181.832 172.74 188.405 179.313 196.77 179.313C205.135 179.313 211.708 172.74 211.708 164.375C211.708 156.01 205.135 149.437 196.77 149.437Z"
                                            fill="black" />
                                    </svg></button></a>

                        <?php } else { ?>
                            <a href="themgiohang.php?pro_id=<?php echo $result['product_id'] ?><?php echo $param; ?>">
                                <button class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 239 180" fill="none">
                                        <path
                                            d="M12.7377 0.0606206C8.77599 0.694496 5.22834 2.8762 2.8752 6.12577C0.522057 9.37535 -0.443817 13.4266 0.190058 17.3883C0.823933 21.3501 3.00563 24.8977 6.25521 27.2509C9.50479 29.604 13.5561 30.5699 17.5178 29.936H62.3308L65.0196 37.4048L77.2685 74.7491L89.5174 112.093C90.7124 115.977 95.7913 119.562 99.6751 119.562H204.239C208.421 119.562 213.201 115.977 214.397 112.093L238.596 37.4048C239.791 33.521 237.998 29.936 233.815 29.936H101.169L89.8162 8.42573C88.607 5.9568 86.74 3.86945 84.4207 2.39352C82.1013 0.917581 79.4197 0.110319 76.671 0.0606206L16.9203 0.0606206C16.0258 -0.0202069 15.1259 -0.0202069 14.2315 0.0606206C13.6345 0.0247379 13.0359 0.0247379 12.439 0.0606206L12.7377 0.0606206ZM107.144 149.437C98.7788 149.437 92.2062 156.01 92.2062 164.375C92.2062 172.74 98.7788 179.313 107.144 179.313C115.509 179.313 122.082 172.74 122.082 164.375C122.082 156.01 115.509 149.437 107.144 149.437ZM196.77 149.437C188.405 149.437 181.832 156.01 181.832 164.375C181.832 172.74 188.405 179.313 196.77 179.313C205.135 179.313 211.708 172.74 211.708 164.375C211.708 156.01 205.135 149.437 196.77 149.437Z"
                                            fill="black" />
                                    </svg></button>
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>

                <h4>Mô tả</h4>
                <?php echo $result['detail'] ?>
            </div>
        </div>
    </div>

</body>

</html>