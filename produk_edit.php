<?php
include "koneksi.php";
$kode = $_GET['kode'];
$no	= 1;
$query = "SELECT * FROM produk WHERE kode = $kode";
$hasil = mysqli_query($koneksi, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit produk</title>
</head>
<body>
	<div>
		<h2>Edit produk baru</h2>
		<form action="produk_update.php" method="POST">
			<table border="0" cellspacing="3" cellpadding="3">
			<?php 
				while ($data = mysqli_fetch_array($hasil)){
			?>
			 	<tr>
					<td>Kode Produk</td><td>:</td>
					<td>
						<input type="hidden" name="kode" value="<?php echo $data['kode'];?>">
						<strong><?php echo $data['kode']; ?></strong>
					</td>
				</tr>
				<tr>
					<td>Merk Produk</td><td>:</td>
					<td><input type="text" name="merk" value="<?php echo $data['merk'];?>"></td>
				</tr>
				<tr>
					<td>Jenis Produk</td><td>:</td>
					<td><input type="text" name="jenis" value="<?php echo $data['jenis'];?>"></td>
				</tr>
				<tr>
					<td>Harga Produk</td><td>:</td>
					<td><input type="text" name="harga" value="<?php echo $data['harga'];?>"></td>
				</tr>
				<tr>
					<td>Gambar Produk</td><td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr>
				<?php } ?>
					<td></td><td>&nbsp;</td>
					<td align="right"><input type="submit" name="simpan"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php mysqli_close($koneksi); ?>