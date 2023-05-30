<?php

$host = "localhost";
$dbname = "db_uas";
$user = "root";
$paswd = "";

$conn = mysqli_connect($host, $user, $paswd, $dbname);


if (!$conn) {
    die("Koneksi gagal : ".mysqli_connect_error());
} 

?>
