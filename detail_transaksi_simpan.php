<?php
include "koneksi.php";

$merk 	= $_POST['merk'];
$jumlah = $_POST['jumlah'];
// $harga 	= $_POST['harga'];
$sql ="SELECT harga FROM produk WHERE merk=$merk");
$hasil = mysqli_query($koneksi,$sql);
$harga 	= 
echo $harga;

$id_h	= $_POST['id_h'];

$query = "INSERT INTO transaksi_d (merk,jumlah,harga,id_h) VALUES 
		 ('$merk',$jumlah,$harga,$id_h);";
echo $query;
// if (mysqli_query($koneksi, $query)) {
//     header("Location:detail_transaksi_entri.php");
// } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
// }

mysqli_close($koneksi);