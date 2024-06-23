<?php 

require "functions.php";

$Noid = $_GET["Noid"];
$mykomik = query("SELECT * FROM komiku WHERE Noid = $Noid")[0];
if(isset($_POST["submit"])){
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <h1>Ubah Data List Komik</h1>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mykomik["Noid"];?>">
        <ul>
          
            <li>
                <label for="Judul">Judul :</label>
                <input type="text" name="Judul" required id="Judul" value="<?= $mykomik["Judul"];?>">
            </li>
            <li>
                <label for="Genre">Genre :</label>
                <input type="text" name="Genre" required id="Genre" value="<?= $mykomik["Genre"];?>">
            </li>
            <li>
                <label for="Volume">Volume :</label>
                <input type="text" name="Volume" required id="Volume" value="<?= $mykomik["Volume"];?>">
            </li>
           
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>