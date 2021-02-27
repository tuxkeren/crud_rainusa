<!DOCTYPE html>
<html>
<head>
	<title>Daftar produk</title>
</head>
<body>
	<h3>Daftar Produk</h3>
	<a href="produk_entri.php">Tambah Produk</a>
	<table border="1" cellpadding="3" cellspacing="3">
		<tr>
			<th>Kode</th><th>Merk</th><th>Jenis</th><th>Harga</th><th>Gambar<th>Aksi</th>
		</tr>

		<?php
		include "koneksi.php";
		$no		= 1;
		$query 	= "SELECT * FROM produk";
		$hasil 	= mysqli_query($koneksi, $query);

		foreach($hasil as $produk){
		?>
			<tr>
			<td><?php echo$produk['kode'] ?></td>
			<td><?php echo $produk['merk'] ?></td>
			<td><?php echo $produk['jenis'] ?></td>
			<td align="right"><?php echo $produk['harga'] ?></td>
			<td><img src="<?php echo $produk['gambar'] ?>" width="100" height="100"></td>
			<td>
				<a href="produk_edit.php?kode=<?php echo $produk['kode']; ?>">Edit</a> 
			    | <a href="produk_hapus.php?kode=<?php echo $produk['kode']; ?>">Hapus</a>
			</td>
			</tr>
		<?php } ?>

	</table>
	<br/>
	<hr>
	<a href="halaman_admin.php">Kembali ke Dashboard</a>
</body>
</html>

<?php mysqli_close($koneksi); ?>