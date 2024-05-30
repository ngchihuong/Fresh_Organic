<?php
$category_this_id = "";
include("product_search.php");
include("category_search.php");
$price="";
$price2="";
if (isset($_GET['price'])) {
    $price = "&&".$_GET['price'];
}
if (isset($_GET['price2'])) {
    $price2 = "&&".$_GET['price2'];
}
// if (isset($_GET['category_id'])) {
//     $category_id = $_GET['category_id'];
//     $sql = "SELECT * FROM tbl_sanpham WHERE category_id='$category_id'&&active = '1'" . $search_product_query . " ORDER BY product_id DESC LIMIT " . $per_row . "," . $row_per_page;
//     $total_record = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE category_id='$category_id'&&active = '1'". $search_product_query);
//     $category_this_id = $category_id;
// } else {
//     $sql = "SELECT * FROM tbl_sanpham WHERE active = '1'" . $search_product_query . "  ORDER BY product_id DESC LIMIT " . $per_row . "," . $row_per_page;
//     $total_record = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE active = '1'" . $search_product_query );
// }
$sql = "SELECT * FROM tbl_sanpham WHERE active = '1'". $price . $price2 . $search_product_query . $category_product_query ." ORDER BY product_id DESC LIMIT " . $per_row . "," . $row_per_page;
$total_record = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE active = '1'". $search_product_query . $category_product_query);
?>