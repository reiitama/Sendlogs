<?php 
 
$server = "localhost";
$user = "admin";
$pass = "123456";
$database = "sendlogs";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>