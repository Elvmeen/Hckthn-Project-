<?php
$host = "localhost";
$username = "amimuh92_elanodb";
$password = "Alameenu@111";
$dbname = "amimuh92_elanodb";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>