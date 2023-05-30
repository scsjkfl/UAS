<?php
require 'koneksi.php';

if (isset($_POST['daftar'])) {
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO tb_uas (email, password) 
                VALUES ('$email', '$password')";
$result =  mysqli_query($conn, $query);
    
if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno ($conn).
    " - ".mysqli_error ($conn));
}
}

header("LOcation: index.php");