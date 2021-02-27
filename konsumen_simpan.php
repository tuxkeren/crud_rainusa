<?php
include "koneksi.php";

$nama  		= $_POST["nama"];
$telepon 	= $_POST["telepon"];

$sql = "INSERT INTO 
			konsumen(nama,telepon) 
		VALUES
		    ('$nama','$telepon');";

if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
    header("Location:konsumen_tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
    
mysqli_close($koneksi);
