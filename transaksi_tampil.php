<?php
	session_start();

	include "koneksi.php";

	$query ="SELECT
				t.id,
				t.tgl,
				k.nama,
				k.telepon,
				t.total
			 FROM
				transaksi_h AS t ,
				konsumen AS k
			 WHERE
				t.konsumen = k.id";

	$hasil = mysqli_query($koneksi,$query);
	$no = 1;	
?>

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
			<th>#</th><th>No. Faktur</th><th>Tanggal</th><th>Konsumen</th><th>Total</th><th>Aksi</th>
		</tr>
		<?php while($data = mysqli_fetch_array($hasil)){ ?>
		<tr>
			<Td align="right"><?php echo $no; ?></td>
			<Td align="right"><?php echo $data['id']; ?></Td>
			<td><?php echo $data['tgl']; ?></td>
			<td><?php echo $data['nama']; ?>
			</td><td align="right"><?php echo number_format($data['total']); ?></td>
			<td><a href="transaksi_detail.php?id=<?php echo $data['id']; ?>">Detail</a> | <a href="transaksi_hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
		</tr>

	<?php  $no++; }; ?>
	</table>
	<?php 
		$user = $_SESSION['user'];
		if($user == 'admin'){
			echo '<a href="halaman_admin.php">Kembali ke Dashboard</a>';
		}else{
			echo '<a href="halaman_user.php">Kembali ke Dashboard</a>';
		}
	?>
</body>
</html>