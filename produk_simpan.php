<?php
include "koneksi.php";

$kode  		= $_POST["kode"];
$merk  		= $_POST["merk"];
$jenis 		= $_POST["jenis"];
$harga 		= $_POST["harga"];
$folderName	= "./images"; 
$fileGambar = (object) @$_FILES['gambar'];
$url 		= "{$folderName}/{$fileGambar->name}";

$uploadGambar = move_uploaded_file(
	$fileGambar->tmp_name, "{$folderName}/{$fileGambar->name}"
);

$sql = "INSERT INTO produk(kode,merk,jenis,harga,gambar) VALUES('$kode','$merk','$jenis',$harga,'$url');";

if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
    header("Location:produk_tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
    
mysqli_close($koneksi);
