<!DOCTYPE html>
<html>
<head>
	<title>Daftar Konsumen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<!-- Mulai NAVBAR dari Bootstrap -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="#">Faktur - Admin</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="konsumen_tampil.php">Data Konsumen</a>
	        <a class="nav-link" href="produk_tampil.php">Data Produk</a>
	        <a class="nav-link" href="transaksi_tampil.php">Transaksi</a>
	      </div>
	    </div>
	  </div>
	</nav>
	<!-- Akhir navbar dari bootstrap -->
	<div class="container">
	<h3>Daftar Konsumen</h3>
	<a class="btn btn-lg btn-primary" href="konsumen_entri.php">Tambah Konsumen</a>
	<br><br>
	<table class="table" border="1" cellpadding="3" cellspacing="3">
		<tr>
			<th>Kode</th><th>Nama</th><th>Telepon</th><th>Aksi</th>
		</tr>

		<?php
		include "koneksi.php";
		$no		= 1;
		$query 	= "SELECT * FROM konsumen";
		$hasil 	= mysqli_query($koneksi, $query);

		foreach($hasil as $konsumen){
		?>
			<tr>
			<td><?php echo$konsumen['id'] ?></td>
			<td><?php echo $konsumen['nama'] ?></td>
			<td><?php echo $konsumen['telepon'] ?></td>
			<td>
				<a class="btn btn-sm btn-warning" href="konsumen_edit.php?id=<?php echo $konsumen['id']; ?>">Edit</a> 
			    | <a class="btn btn-sm btn-danger" href="konsumen_hapus.php?id=<?php echo $konsumen['id']; ?>">Hapus</a>
			</td>
			</tr>
		<?php } ?>

	</table>
	<a class="btn btn-sm btn-primary" href="halaman_admin.php">Kembali ke Awal</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</div>
</body>
</html>

<?php mysqli_close($koneksi); ?>