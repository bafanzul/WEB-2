<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "mykomik");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $Noid = htmlspecialchars($_data["Noid"]);
    $Judul = htmlspecialchars($_data["Judul"]);
    $Genre = htmlspecialchars($_data["Genre"]);
    $Vol = htmlspecialchars($_data["Vol"]);
    

      //query insert ke database
      $query = "insert into komiku
      VALUES
      ('','$Noid','$Judul','$Genre','$Vol')
      ";
      
      mysqli_qeury($koneksi,$query);
      return mysqli_affected_rows($koneksi);
}

    function hapus($noid)
    {
        global $koneksi;
        mysqli_query($koneksi, "delete from komiku where Noid = $Noid");
        return mysqli_affected_rows($koneksi);
    }