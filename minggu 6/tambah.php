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
                <label for="noid">NoId</label>
                <input type="text" nama="noid" id="noid" required>
            </li>
            <li>
                <label for="Type_Perumahan">Type_Perumahan</label>
                <input type="text" nama="Type_Perumahan" id="Type_Perumahan" required>
            </li>
            <li>
                <label for="deskripsi">deskripsi</label>
                <input type="text" nama="deskripsi" id="deskripsi" required>
            </li>
            <li>
                <label for="harga">harga</label>
                <input type="text" nama="harga" id="harga" required>
            </li>
            <li>
                <label for="jumlah">jumlah</label>
                <input type="text" nama="jumlah" id="jumlah" required>
            </li>
            <li>
                <label for="img">img</label>
                <input type="text" nama="img" id="img" required>
            </li>
            <li>
                <label for="category">category</label>
                <input type="text" nama="category" id="category" required>
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