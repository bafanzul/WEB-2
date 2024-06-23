<?php 
require "functions.php";

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
        <script>alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal ditambahkan";
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <h1>Tambah Data List Komik</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="Judul">Judul :</label>
                <input type="text" name="Judul" required id="Judul">
            </li>
            <li>
                <label for="Genre">Genre :</label>
                <input type="text" name="Genre" required id="Genre">
            </li>
            <li>
                <label for="Volume">Volume :</label>
                <input type="text" name="Volume" required id="Volume">
            </li>
            <li>
                <label for="img">Gambar :</label>
                <input type="text" nama="img" id="img" required>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>