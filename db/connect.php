<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "fresh_organic";

$conn = new mysqli($server, $user, $pass, $database, 8081);
if ($conn) {
    echo "";
} else {
    echo "Tạch!";
}
?>