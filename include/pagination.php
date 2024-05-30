<ul class="pagination">
    <?php
    $tab_name="";
    if (isset($_GET['tab'])) {
        $tab=$_GET['tab'];
        $tab_name = "tab=".$tab."&";
    }
    if ($page > 1) {
        $prev_page = $page - 1;
        ?>
        <li class="page-item">
            <a class="page-link" href="?<?php echo $tab_name;?>page= <?php echo $prev_page ?><?php include 'category_search.php' ?>">
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
                    <a class="page-link" href="?<?php echo $tab_name;?>page= <?php echo $num_page . $category_this_id . $search_product;?>">
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
            <a class="page-link" href="?<?php echo $tab_name;?>page= <?php echo $next_page ?><?php include 'category_search.php' ?>">
                Next
            </a>
        </li>
    <?php } ?>
</ul>