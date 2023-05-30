<?php

if (isset($_POST['edit'])) {
    
    include("koneksi.php");

    
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $hal = $_POST['hal'];

    
    $query = "UPDATE literasi SET judul = '$judul', penulis = '$penulis', hal = '$hal'";

    $result = mysqli_query($conn, $query);
    
    if(!$result) {
        die("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}


header("location:home.php");
?>