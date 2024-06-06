<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "mykomik");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * FROM komiku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List Komik</title>
</head>
<body>
    <h1>Daftar Komik</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Noid</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Vol</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><?= $row['Judul'] ?></td>
            <td><?= $row['Genre'] ?></td>
            <td><?= $row['Volume'] ?></td>
			<td>
            <img src="img/<?= $row['img'] ?>" width="50">
            </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </table>

</body>
</html>