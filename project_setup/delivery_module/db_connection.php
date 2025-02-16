<?php
$servername = "147.93.106.209";
$username = "root";
$password = "";
$dbname = "product_portfolio_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
