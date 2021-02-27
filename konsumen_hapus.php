<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM konsumen WHERE id = $id";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
	echo "Data Produk berhasil dihapus!";
}

mysqli_close($koneksi);
header("Location:konsumen_tampil.php");