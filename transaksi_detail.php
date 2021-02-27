<?php
include "koneksi.php";

$id = $_GET['id'];

$query 	=  "SELECT * FROM transaksi_h WHERE id=$id";

$hasil  = mysqli_query($koneksi,$query);

while($data = mysqli_fetch_array($hasil)){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail penjualan</title>
</head>
<body>
<br>
<br>
<hr>
<table border="1" cellspacing="3" cellpadding="3">
	<tr>
		<td colspan="3" rowspan="3"><h3>Faktur No. <?php echo $id; ?></h3></td>
		<td>Tgl:</td><td><?php echo $data['tgl']; ?></td>
	<tr>
		<td>Nama:</td>
		<td>
			<?php
			$sql1 = "SELECT
						transaksi_h.id,
						transaksi_h.konsumen,
						konsumen.id,
						konsumen.nama,
						konsumen.telepon
					FROM
						transaksi_h ,
						konsumen
					WHERE
						transaksi_h.konsumen = konsumen.id AND transaksi_h.id=$id";

			$result1  = mysqli_query($koneksi,$sql1);

			while($dat = mysqli_fetch_array($result1)){
				echo $dat['nama'];
			}
 

			?>	
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<?php $gtotal = $data['total']; ?>
	<tr>
		<th>No</th><th>Produk</th><th>Qty</th><th>Harga</th><th>Sub Total</th>
		<?php } ?>
		<?php 
			$no =1;
			$sql2 	=  "SELECT *, jumlah*harga as total FROM transaksi_d WHERE id_h=$id";
			$result  = mysqli_query($koneksi,$sql2);

			while($rec = mysqli_fetch_array($result)){
		?>
	</tr>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $rec['merk']; ?></td>
		<td><?php echo number_format($rec['jumlah']); ?></td>
		<td align="right"><?php echo number_format($rec['harga']); ?></td>
		<td align="right"><?php echo number_format($rec['total']) ?></td>
	</tr>

	<?php $no++; } ?>
	<tr>
		<th colspan="4" align="right">TOTAL:</th><th align="right"><?php echo number_format($gtotal) ?></th>
	</tr>
</table>
<br/>
<br/>
<br/>
<hr>
<a href="transaksi_tampil.php">Selesai</a>
</body>
</html>