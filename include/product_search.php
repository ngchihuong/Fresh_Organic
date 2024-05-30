<?php 
$search_product_query = "";
$search_product = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $search_product_query = "&&product_name LIKE '%" . $search. "%'";
    $search_product = "&search=" . $search;
}
?>