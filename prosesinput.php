<?php

include 'koneksi.php';

if (isset($_POST['input'])) {
    
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $hal = $_POST['hal'];
    
    $query = "INSERT INTO literasi VALUES ('$judul', '$penulis', '$hal')";
    $result =  mysqli_query($conn, $query);
    
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno ($conn).
        " - ".mysqli_error ($conn));
    }
}

header("location: home.php");
?>