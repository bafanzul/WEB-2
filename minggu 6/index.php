<?php
require 'function.php';
$mykomik = query("SELECT * FROM komiku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Komik</title>
</head>
<body>
    <h1>Daftar Komik</h1>
    <a href="tambah.php">Add List Komik</a>
    <br></br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Noid</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Volume</th>
            <th>Gambar</th> 
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mykomik as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?Noid=<?= $row['Noid']; ?>">Ubah</a>
                <a href="hapus.php?Noid=<?= $row['Noid']; ?>">Hapus</a>
            </td>
            <td><?= $row['Judul'] ?></td>
            <td><?= $row['Genre'] ?></td>
            <td><?= $row['Vol'] ?></td>
			<td>
                <img src="img/<?= $row['img'] ?>" width="50">
            </td>
			
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>
</html>