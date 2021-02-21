<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "faktur";
$koneksi = mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi)
{
	die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
