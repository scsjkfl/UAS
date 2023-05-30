<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Input data</h1>
    <div class="container">
        <form action="prosesinput.php" method="post">
            <fieldset>
                <legend>Input</legend>
                <p>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul">
                </p>
                <p>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis">
                </p>
                <p>
                    <label for="hal">Halaman : </label>
                    <input type="text" name="hal" id="hal">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="simpan">
            </p>
        </form>
    </div>
</body>
</html>