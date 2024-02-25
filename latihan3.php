<?php

$katalog_hewan = array (
                 array ("Singa", "Mamalia", "Karnivora"),
                 array ("Gajah", "Mamalia", "Herbavora"),
                 array ("Ular", "Reptil", "Karnivora"),
                 array ("Kura-Kura", "Reptil", "Herbivora"),
                 array ("Kanguru", "Mamalia", "Herbivora"),
);

foreach ($katalog_hewan as $hewan) {
    $nama = $hewan[0];
    $kelas = $hewan[1];
    $makanan = $hewan[2];
    echo "Nama: $nama, kelas: $kelas, Makanan: $makanan <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Hewan</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .hewan {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Katalog Hewan</h1>

    <div class="hewan">
        <h2>Singa</h2>
        <img src="img/singa.jpg" alt="singa">
        <h3>"Singga" tidak memiliki makna umum atau konsep yang jelas dalam konteks umum bahasa Indonesia atau bahasa Inggris. Kemungkinan besar, "singga" adalah kata atau istilah khusus yang dapat merujuk pada sesuatu yang spesifik dalam suatu konteks tertentu.</h3>
    </div>

    <div class="hewan">
        <h2>Gajah</h2>
        <img src="img/gajah.jpg" alt="gajah">
        <h3>Gajah adalah hewan mamalia yang besar, terkenal dengan ciri khasnya yang mencolok seperti belalai panjang.</h3>
    </div>

    <div class="hewan">
        <h2>Ular</h2>
        <img src="img/ular.jpg" alt="ular">
        <h3>Ular adalah kelompok hewan reptil yang termasuk dalam ordo Squamata. Mereka memiliki beberapa ciri khas yang membedakan mereka dari kelompok hewan lain.</h3>
    </div>

    <div class="hewan">
        <h2>Kura-Kura</h2>
        <img src="img/kura-kura.jpg" alt="kura-kura">
        <h3>Kura-kura adalah reptil yang memiliki ciri khas berupa cangkang keras yang melindungi tubuhnya.</h3>
    </div>
    
    <div class="hewanx">
        <h2>Kanguru</h2>
        <img src="img/kanguru.jpg" alt="kanguru">
        <h3>Kanguru adalah mamalia marsupial yang berasal dari Australia. Marsupial adalah kelompok mamalia yang ditandai dengan adanya kantung atau kantong marsupium.</h3>
    </div>

</body>
</html>
