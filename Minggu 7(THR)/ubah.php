<?php 
// koneksi DBMS 
require "function.php";

//ambil data di URL
$Noid = $_GET["Noid"];
// query data mahasiswa berdasarkan id
$mykomik = query("SELECT * FROM properti WHERE Noid = $Noid")[0];
/// cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    // cek apakah data berhasil diubah atau tidak?
    if(ubah($_POST) > 0){
        echo "
        <script>alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal diubah";
    }

}
// source gambar google.com
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="hias.css">  
</head>
<body>
    <h1>Ubah Data Komik</h1>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $komiku["Noid"];?>">
        <ul>

            <li>
                <label for="Judul">Judul :</label>
                <input type="text" name="Judul" required id="Judul" value="<?= $komiku["Judul"];?>">
            </li>
            <li>
                <label for="deskripsi">deskripsi :</label>
                <input type="text" name="deskripsi" required id="deskripsi" value="<?= $properti["deskripsi"];?>">
            </li>
            <li>
                <label for="harga">harga :</label>
                <input type="text" name="harga" required id="harga" value="<?= $properti["deskripsi"];?>">
            </li>
            <li>
                <label for="jumlah">jumlah :</label>
                <input type="text" name="jumlah" required id="jumlah" value="<?= $properti["jumlah"];?>">
            </li>
            <li>
                <label for="img">img :</label>
                <input type="text" name="img" required id="img" value="<?= $properti["img"];?>">
            </li>
            <li>
                <label for="category">category :</label>
                <input type="text" name="category" required id="category" value="<?= $properti["category"];?>">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>