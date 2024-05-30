

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="?detail=1&tab=hoadon"><button class="btn btn-outline-info">Chờ giao</button> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?detail=2&tab=hoadon"><button class="btn btn-outline-info">Đang giao</button> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?detail=3&tab=hoadon"><button class="btn btn-outline-info">Đã giao</button> </a>
            </li>
        </ul>
        <?php require("../db/connect.php");
        $detail = "";
        if (isset($_GET["detail"])) {
            $detail = $_GET["detail"];
        } else {
            $detail = "1";
        }

        if ($detail == "1") {
            require "./delivery_detail/cho_giao.php";
        } else if ($detail == "2") {
            require "./delivery_detail/dang_giao.php";
        } else {
            require "./delivery_detail/da_giao.php";
        }

        ?>
        <ul class="pagination">
            <?php
            if ($page > 1) {
                $prev_page = $page - 1;
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $prev_page;?>&detail=<?php echo $detail;?>&tab=hoadon">
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
                            <a class="page-link" href="?page= <?php echo $num_page; ?>&detail=<?php echo $detail;?>&tab=hoadon">
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
                    <a class="page-link" href="?page= <?php echo $next_page; ?>&detail=<?php echo $detail;?>&tab=hoadon">
                        Next
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    </div>
    <?php mysqli_close($conn); ?>
