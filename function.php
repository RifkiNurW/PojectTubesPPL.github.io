<?php
require 'koneksi.php';
$namabarang = $_POST["namabarang"];
$kondisi = $_POST["kondisi"];
$stok = $_POST["stok"];

$quary_sql = "INSERT INTO tbl_stok (namabarang, kondisi, stok)
            VALUE ('$namabarang', '$kondisi', '$stok')";

if(mysqli_query($conn, $quary_sql)) {
    header("location: stokbarang.php");
} else {
    echo "pendaftaran Gagal : " . mysqli_error($conn);
}
?>