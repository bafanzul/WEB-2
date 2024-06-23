<?php 
require'functions.php';
$mykomik = query("SELECT * FROM komiku");

if(isset($_POST["cari"])){
    $mykomik = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Komik</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Daftar List Komik</h1>
    <div class="add">
        <a href="create.php">Tambah Data List Komik</a>
    </div>
    <br><br>

    <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Noid</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Volume</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($mykomik as $row ): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="update.php?Noid=<?= $row['Noid'];?>">Ubah</a> |
                <a href="delete.php?Noid=<?= $row['Noid'];?>">Hapus</a>
            </td>
            <td><?= $row['Judul']?></td>
            <td><?= $row['Genre']?></td>
            <td><?= $row['Vol']?></td>
            <td>
                <img src="img/<?= $row['img'] ?>" width="50">
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>

</body>
</html>