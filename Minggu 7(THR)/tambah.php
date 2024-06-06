<?php

require "function.php";

if (isset($_POST["submit"])){
    if (tambah($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil disimpan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal disimpan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Properti</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="Noid">NoId :</label>
                <input type="text" nama="Noid" id="Noid" required>
            </li>
            <li>
                <label for="Judul">Judul :</label>
                <input type="text" nama="Judul" id="Judul" required>
            </li>
            <li>
                <label for="Genre">Genre :</label>
                <input type="text" nama="Genre" id="Genre" required>
            </li>
            <li>
                <label for="img">Gambar :</label>
                <input type="text" nama="img" id="img" required>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" nama="submit">Simpan</button>
            </li>
        </ul>
    </form>
    
</body>
</html>