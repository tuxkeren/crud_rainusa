<?php

include "koneksi.php";

$tgl  		= $_POST["tgl"];
$konsumen  	= $_POST["konsumen"];

$sql = "INSERT INTO transaksi_h(tgl,konsumen) VALUES('$tgl','$konsumen');";

if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
    header("Location:detail_transaksi_entri.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
    
mysqli_close($koneksi);
