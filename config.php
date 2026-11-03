<?php
$conn = new mysqli("localhost", "root", "", "condo_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!--

    PLEASE INCLUDE " include'config.php' " on every page that needs data

-->