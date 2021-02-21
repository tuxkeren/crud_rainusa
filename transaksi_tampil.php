<!DOCTYPE html>
<html>
<head>
	<title>Daftar transaksi</title>
</head>
<body>
	<h3>Daftar transaksi</h3>
	<a href="transaksi_entri.php">Transaksi baru</a>
	<table border="1" cellpadding="3" cellspacing="3">
		<tr>
			<th>ID</th><th>Tanggal</th><th>Konsumen</th><th>Total</th><th>Aksi</th>
		</tr>
		<tr>
			<Td align="right">1</Td><td>13-02-2021</td><td>Konsumen 1</td><td align="right">950.000,-</td>
			<td><a href="transaksi_detail.php?id=">Detail</a> | <a href="transaksi_edit.php?id=">Edit</a> | <a href="transaksi_hapus.php?id=">Hapus</a></td>
		</tr>
		<tr>
			<Td align="right">2</Td><td>15-02-2021</td><td>Konsumen 2</td><td align="right">2.950.000,-</td>
			<td><a href="transaksi_detail.php?id=">Detail</a> | <a href="transaksi_edit.php?id=">Edit</a> | <a href="transaksi_hapus.php?id=">Hapus</a></td>
		</tr>
		<tr>
			<Td align="right">3</Td><td>01-01-2021</td><td>Konsumen 0</td><td align="right">10.950.000,-</td>
			<td><a href="transaksi_detail.php?id=">Detail</a> | <a href="transaksi_edit.php?id=">Edit</a> | <a href="transaksi_hapus.php?id=">Hapus</a></td>
		</tr>
	</table>
</body>
</html>