
    <?php
    require("../db//connect.php");
    $page;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $row_per_page = 5;
    $per_row = ($page - 1) * $row_per_page;
    $sql = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE permission = 0 LIMIT " . $per_row . "," . $row_per_page);
    $total_record = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE permission = 0");
    $total_record = $total_record->num_rows;
    $total_page = ceil($total_record / $row_per_page);
    ?>

    <table class="w-100">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>
        <?php while ($row_cus = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td>
                    <?php echo $row_cus['id'] ?>
                </td>
                <td>
                    <?php echo $row_cus['name'] ?>
                </td>
                <td>
                    <?php echo $row_cus['email'] ?>
                </td>
                <td>
                    <?php echo $row_cus['password'] ?>
                </td>
                <td>
                    <?php echo $row_cus['address'] ?>
                </td>
                <td>
                    <?php echo $row_cus['phone_number'] ?>
                </td>
            </tr>
        <?php } ?>

    </table>
    <ul class="pagination">
        <?php
        if ($page > 1) {
            $prev_page = $page - 1;
            ?>
            <li class="page-item">
                <a class="page-link" href="?page= <?php echo $prev_page ?>&tab=khachhang">
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
                        <a class="page-link" href="?page= <?php echo $num_page; ?>&tab=khachhang">
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
                <a class="page-link" href="?page= <?php echo $next_page ?>&tab=khachhang">
                    Next
                </a>
            </li>
        <?php } ?>
    </ul>
