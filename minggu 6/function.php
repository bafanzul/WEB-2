<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "katalogpropertirumah");

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
    $noid = htmlspecialchars($_data["noid"]);
    $Type_Perumahan = htmlspecialchars($_data["Type_Perumahan"]);
    $deskripsi = htmlspecialchars($_data["deskripsi"]);
    $harga = htmlspecialchars($_data["harga"]);
    $jumlah = htmlspecialchars($_data["jumlah"]);
    $img = htmlspecialchars($_data["img"]);
    $category = htmlspecialchars($_data["category"]);

      //query insert ke database
      $query = "insert into properti
      VALUES
      ('','$noid','$Type_Perumahan','$deskripsi','$harga','$jumlah','$img','$category')
      ";
      
      mysqli_qeury($koneksi,$query);
      return mysqli_affected_rows($koneksi);
}

    function hapus($noid)
    {
        global $koneksi;
        mysqli_query($koneksi, "delete from properti where noid = $noid");
        return mysqli_affected_rows($koneksi);
    }