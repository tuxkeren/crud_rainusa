<!DOCTYPE html>
<html>
<head>
	<title>New transaksi</title>
</head>
<body>
	<h3>Transaksi baru</h3>
	<form action="transaksi_simpan.php" method="POST">
		<table border="1">
			<tr>
				<td>Tanggal</td><td>:</td>
				<td><input type="text" name="tgl" value="<?php echo date('Y-m-d'); ?>"></td>
			</tr>
			<tr>
				<td>Konsumen</td><td>:</td>
				<td>
					<select name="konsumen">
					<?php
						include "koneksi.php";
						$query = "SELECT * FROM konsumen";
						$hasil = mysqli_query($koneksi, $query);
						while ($data = mysqli_fetch_array($hasil)){
					?>
							<option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
						
					<?php 
					}
					mysqli_close($koneksi); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right"><button type="submit" name="proses">Detail transaksi</button></td>
			</tr>
		</table>
	</form>
	<a href="transaksi_tampil.php">Selesai</a>
</body>
</html>