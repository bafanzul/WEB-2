<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "katalogpropertirumah");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * FROM properti");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar properti</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>noid</th>
            <th>aksi</th>
            <th>Type_Perumahan</th>
            <th>deskripsi</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>img</th>
            <th>category</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><?= $row['Type_Perumahan'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['harga'] ?></td>
			      <td><?= $row['jumlah'] ?></td>
			      <td>
                <img src="img/<?= $row['img'] ?>" width="50">
            </td>
			      <td><?= $row['category'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </table>

</body>
</html>