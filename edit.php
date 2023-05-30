<?php 
    
    include 'koneksi.php';
    
    if (isset($_GET['id'])) { 
        
        $id = ($_GET["id"]);

        $query = "SELECT * FROM literasi WHERE id='$id'"; 
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            die ("Query Error: ".mysqli_errno ($conn)." - ".mysqli_error($conn));
        }
        
        $data =  mysqli_fetch_assoc($result);
        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $penulis = htmlspecialchars($data["penulis"]);
    } else {
        
        header("location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
<h1>Edit Data</h1>
    <div class="container">
        <form action="prosesedit.php" method="post">
            <fieldset>
                <legend>Edit Data</legend>
                
                <p>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" value="<?php echo $judul ?>">
                </p>
                <p>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis" value="<?php echo $penulis ?>">
                    </p>
                <p>
                    <label for="hal">Halaman : </label>
                    <input type="text" name="hal" id="hal" value="<?php echo $hal ?>">
                </p>
            </fieldset>
            <input type="submit" name="edit" value="Update Data">
        </form>
    </div>
</body>
</html>