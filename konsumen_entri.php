<!DOCTYPE html>
<html>
<head>
	<title>Entri Konsumen</title>
</head>
<body>
	<div>
		<h2>Entri Konsumen baru</h2>
		<form action="konsumen_simpan.php" method="POST">
			<table border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td>Nama Konsumen</td><td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Telepon</td><td>:</td>
					<td><input type="text" name="telepon"></td>
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