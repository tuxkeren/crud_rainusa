<?php
include "koneksi.php";

$id 		= $_POST["id"];
$nama  		= $_POST["nama"];
$telepon 	= $_POST["telepon"];

$sql = "UPDATE konsumen SET nama='$nama',telepon='$telepon' WHERE id='$id';";

if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
    header("Location:konsumen_tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
    
mysqli_close($koneksi);