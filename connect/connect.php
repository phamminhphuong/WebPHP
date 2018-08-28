<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "webphp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>