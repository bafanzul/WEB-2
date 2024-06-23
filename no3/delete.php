<?php 
require 'functions.php';
$Noid = $_GET["Noid"];

if(hapus($Noid) > 0){
    echo "
    <script>alert('Data berhasil dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data gagal dihapus');
    document.location.href = 'index.php';
    </script>
    ";
}
?>