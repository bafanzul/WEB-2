<?php
require 'function.php';
$katalogpropertirumah = query("SELECT * FROM properti");
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
    <a href="tambah.php">Tambah Data Properti</a>
    <br></br>

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
        <?php foreach ($katalogpropertirumah as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?noid=<?= $row['noid']; ?>">Ubah</a>
                <a href="hapus.php?noid=<?= $row['noid']; ?>">Hapus</a>
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
        <?php endforeach; ?>
    </table>

</body>
</html>