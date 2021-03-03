<?php
# beberapa variabel kubutuhan koneksi ke database
$hostname = "localhost";
$username = "atha";
$password = "atha";
$database = "faktur";
$koneksi = mysqli_connect($hostname,$username,$password);

#membuat koneksi ke database
if(!$koneksi){
	die("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}


# membuat database faktur jika belum ada.
$query_db = "CREATE DATABASE IF NOT EXISTS {$database}";
$hasil_db = mysqli_query($koneksi, $query_db);

if(!$hasil_db){
	die("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else{
	echo "Database <strong>{$database}</strong> berhasil dibuat...<br>";
}

# memilih database $database
$hasil_pilih = mysqli_select_db($koneksi, $database);
if(!$hasil_pilih){
	die("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else{
	echo "Database <strong>{$database}</strong> berhasil dipilih...<br>";
}

#membuat tabel-tabel yang diperlukan
$query_tbl = "CREATE TABLE produk (kode CHAR(5) NOT NULL, merk VARCHAR(30), ";
$query_tbl .= "jenis VARCHAR(20), harga DECIMAL(5,2),";
$query_tbl .= "gambar TEXT,";
$query_tbl .= "PRIMARY KEY (kode))";

$hasil_produk =  mysqli_query($koneksi, $query_tbl);
if(!$hasil_produk){
	die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
	echo "Tabel <b>'produk'</b> berhasil dibuat... <br>";
}	

$query_tbl = "CREATE TABLE transaksi_h (id INT NOT NULL AUTO_INCREMENT, tgl DATE, ";
$query_tbl .= "konsumen INT, total DECIMAL(5,2),";
$query_tbl .= "PRIMARY KEY (id))";

$hasil_produk =  mysqli_query($koneksi, $query_tbl);
if(!$hasil_produk){
	die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
	echo "Tabel <b>'transaksi_h'</b> berhasil dibuat... <br>";
}	

$query_tbl = "CREATE TABLE transaksi_d (id INT NOT NULL AUTO_INCREMENT, merk VARCHAR(30), ";
$query_tbl .= "jumlah INT, harga DECIMAL(5,2),";
$query_tbl .= "id_h INT, PRIMARY KEY (id))";

$hasil_produk =  mysqli_query($koneksi, $query_tbl);
if(!$hasil_produk){
	die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
	echo "Tabel <b>'transaksi_d'</b> berhasil dibuat... <br>";
}	

$query_tbl = "CREATE TABLE konsumen (id INT NOT NULL AUTO_INCREMENT, nama VARCHAR(3), ";
$query_tbl .= "telepon VARCHAR(20),";
$query_tbl .= "PRIMARY KEY (id))";

$hasil_produk =  mysqli_query($koneksi, $query_tbl);
if(!$hasil_produk){
	die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
	echo "Tabel <b>'konsumen'</b> berhasil dibuat... <br>";
}	
