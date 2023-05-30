<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            width: 840px;
            margin: auto;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabel Literasi</h1>
    <center><a href="input.php">Input Data</a></center>
    <br>
    <table border="1">
        <tr>
        <th>Judul buku</th>
            <th>Penulis</th>
            <th>Hal. Terakhir Dibaca</th>
            <th>Pilihan</th>
        </tr>
        <?php
        
        $query = "SELECT * FROM literasi";
        $result = mysqli_query($conn, $query);

        
        if(!$result){
            die("Query Error : ".mysqli_errno($link))." - ".mysqli_error(($link));
        }
        
        while($data = mysqli_fetch_assoc($result)) {
            
            echo "</tr>";
            echo "<td>$data[judul]</td>"; 
            echo "<td>$data[penulis]</td>"; 
            echo "<td>$data[hal]</td>"; 
            
            echo '<td>
            <a href="edit.php?">Edit</a> /
            <a href="hapus.php?" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
            </td>';
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>