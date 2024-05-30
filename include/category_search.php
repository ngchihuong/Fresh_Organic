<?php
$category_this_id = "";
$category_product_query = "";
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $category_product_query = "&&category_id =" . $category_id;
    $category_this_id = "&category_id=" . $category_id;
}
?>