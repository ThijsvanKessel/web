<?php
$host = "localhost";
$user = "root";
$pass = "";
$dB   = "heroes";

$connect = mysqli_connect($host, $user, $pass, $dB) or false;
    
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>