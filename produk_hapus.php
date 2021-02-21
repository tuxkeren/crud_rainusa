<?php
include "koneksi.php";
$kode = $_GET['kode'];
$query = "DELETE FROM produk WHERE kode = $kode";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
	echo "Data Produk berhasil dihapus!";
}

mysqli_close($koneksi);
header("Location:produk_tampil.php");