<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "appointment_system";

$conn = new mysqli('localhost', 'root', '123', 'phongkham');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8");
?>
