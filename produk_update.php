<?php
include "koneksi.php";

$kode 		= $_POST["kode"];
$merk  		= $_POST["merk"];
$jenis 		= $_POST["jenis"];
$harga 		= $_POST["harga"];

$sql = "UPDATE produk SET merk='$merk',jenis='$jenis',harga=$harga WHERE kode='$kode';";

if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
    header("Location:produk_tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
    
mysqli_close($koneksi);