<?php

$koneksi = mysqli_connect("localhost","root","","mykomik");
function query ($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $koneksi;
    $Noid = htmlspecialchars($data["Noid"]);
    $Judul = htmlspecialchars($data["Judul"]);
    $Genre = htmlspecialchars($data["Genre"]);
    $Vol = htmlspecialchars($data["Vol"]);

     
       $query = "INSERT INTO komiku VALUES(DEFAULT,'$Noid','$Judul','$Genre','$Vol')";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM komiku WHERE Noid = $Noid");
    return mysqli_affected_rows($koneksi);
}


function cari($keyword){
    $query = "SELECT * FROM komiku
                WHERE 
                Judul LIKE '%$keyword%' OR
                Genre LIKE '%$keyword%' OR
                Vol LIKE '%$keyword%'
               
    ";
    return query($query);
}

function ubah($data){
    global $koneksi;
    $Noid = $data["Noid"];
    $Judul = htmlspecialchars($data["Judul"]);
    $Genre = htmlspecialchars($data["Genre"]);
    $Vol = htmlspecialchars($data["Vol"]);
    $img = htmlspecialchars($data["img"]);


       $query = "UPDATE komiku SET 
       Noid ='$Noid',
       Judul = '$Judul',
       Genre = '$Genre',
       Vol = '$Vol',
       img = '$img' 
       WHERE id = $id
       ";

       mysqli_query($koneksi,$query);
       return mysqli_affected_rows($koneksi);
}
?>