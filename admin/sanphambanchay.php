

    <?php
    require("../db/connect.php");
    $page;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $row_per_page = 5;
    $per_row = ($page - 1) * $row_per_page;
    $sql = "SELECT * FROM tbl_order_product GROUP BY product_id DESC LIMIT " . $per_row . "," . $row_per_page;
    $total_record = mysqli_query($conn, "SELECT * FROM tbl_order_product GROUP BY product_id");
    $result = mysqli_query($conn, $sql);
    $total_record = $total_record->num_rows;
    $total_page = ceil($total_record / $row_per_page);
    ?>
    <div class="container border p-2">
        <legend>Doanh số sản phẩm</legend>
        <div class="d-flex border justify-content-center" style="gap:200px;">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $product_id = $row['product_id'];
                $name_query = "SELECT * FROM tbl_sanpham WHERE product_id = $product_id";
                $name = mysqli_query($conn, $name_query);
                $pro_name = mysqli_fetch_assoc($name);
                ?>
                <div class="align-self-end">
                    <div>
                        <?php echo $row['quantity'] . "/" . $row['price']*$row['quantity'] . "đ" ?>
                    </div>
                    <div class="bg-dark" style="width:30px;height:<?php echo $row['quantity'] * 10 ?>px;"></div>
                    <div>
                        <?php echo $pro_name['product_name'] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul class="pagination mt-3">
            <?php
            if ($page > 1) {
                $prev_page = $page - 1;
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page= <?php echo $prev_page ?>&tab=doanhthu">
                        Prev
                    </a>
                </li>
            <?php } ?>
            <?php
            for ($num_page = 1; $num_page <= $total_page; $num_page++) { ?>
                <?php if ($num_page != $page) { ?>
                    <?php if ($num_page > $page - 3 && $num_page < $page + 3) {
                        ?>
                        <li class="page-item">
                            <a class="page-link" href="?page= <?php echo $num_page; ?>&tab=doanhthu">
                                <?php echo $num_page;
                                ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <li class="page-item">
                        <a class="page-link bg-dark">
                            <?php echo $num_page ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
            <?php
            if ($page < $total_page) {
                $next_page = $page + 1;
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page= <?php echo $next_page ?>&tab=doanhthu">
                        Next
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
