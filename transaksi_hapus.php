<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM transaksi_h WHERE id = $id";
$query2 = "DELETE FROM transaksi_d WHERE id_h = $id";		 
$hasil = mysqli_query($koneksi, $query);
$hasil2 = mysqli_query($koneksi, $query2);

if($hasil){
	echo "Data Produk berhasil dihapus!";
}

mysqli_close($koneksi);
header("Location:transaksi_tampil.php");