<!DOCTYPE html>
<html>
<head>
	<title>Entri produk</title>
</head>
<body>
	<div>
		<h2>Entri produk baru</h2>
		<form action="produk_simpan.php" method="POST" enctype="multipart/form-data">
			<table border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td>Kode Produk</td><td>:</td>
					<td><input type="text" name="kode"></td>
				</tr>
				<tr>
					<td>Merk Produk</td><td>:</td>
					<td><input type="text" name="merk"></td>
				</tr>
				<tr>
					<td>Jenis Produk</td><td>:</td>
					<td><input type="text" name="jenis"></td>
				</tr>
				<tr>
					<td>Harga Produk</td><td>:</td>
					<td><input type="text" name="harga"></td>
				</tr>
				<tr>
					<td>Gambar Produk</td><td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr>
					<td></td><td>&nbsp;</td>
					<td align="right">
						<button type="submit" name="simpan">Simpan</button>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>