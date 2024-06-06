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

    function hapus($Noid)
    {
        global $koneksi;
        mysqli_query($koneksi, "delete from komiku where Noid = $Noid");
        return mysqli_affected_rows($koneksi);
    }

    function cari($keyword)
    {
        $query = "SELECT * FROM komiku
                    WHERE 
                    Judul LIKE '%$keyword%' OR
                    Genre LIKE '%$keyword%' OR
                    Vol LIKE '%$keyword%'            
        ";
        return query($query);
    }
    
    function ubah($data)
    {
        global $koneksi;
        $Noid = $data["Noid"];
        $Judul = htmlspecialchars($_data["Judul"]);
        $Genre = htmlspecialchars($_data["Genre"]);
        $Vol = htmlspecialchars($_data["Vol"]);
        $img = htmlspecialchars($_data["img"]);
    
          //query insert ke database
        $query = "UPDATE komiku SET
                    Noid = '$Noid',
                    Judul = '$Judul',
                    Genre = '$Genre',
                    Vol = '$Vol',
                    img = '$img',
                WHERE Noid = $Noid
            ";
    
        mysqli_qeury($koneksi,$query);
        return mysqli_affected_rows($koneksi);
     }
?>    