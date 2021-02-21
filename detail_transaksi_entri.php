<?php
include "koneksi.php";
$query 	=  "SELECT
				trans.id,
				trans.tgl,
				kons.nama
			FROM
				transaksi_h AS trans ,
				konsumen AS kons
			WHERE
				trans.konsumen = kons.id
			ORDER BY
				trans.id DESC
			LIMIT 1";

$hasil  = mysqli_query($koneksi,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Entry detail penjualan</title>
</head>
<body>
<h3>Entry detail penjualan</h3>
<table border="1" cellspacing="3" cellpadding="3">
	<tr><th>Nomor Faktur</th><th>Tgl. Penjualan</th><th>Konsumen</th></tr>
	<tr>
		<?php 
			while($data = mysqli_fetch_array($hasil)){
				$id_h = $data['id'];
				echo "<td>".$id_h."</td>";
				echo "<td>".$data['tgl']. "</td>";
				echo "<td>".$data['nama']."</td>";
			}
		?>
	</tr>
</table>
<hr>

<form method="POST" action="detail_transaksi_simpan.php">
	<table border="0" cellspacing="3" cellpadding="3">
		<tr>
			<td>Merk:<input list="produk" name="merk" id="produk"></td>
			<!-- Mengisi data dalam list -->
			<?php 
				$query ="SELECT * FROM produk";
				$hasil = mysqli_query($koneksi, $query);
			?>
			<datalist id="produk">
				<?php 
					while($data = mysqli_fetch_array($hasil)){
						echo  '<option value="'.$data['merk'].'">';
					}
				?>
			</datalist>
			<!-- <td>Harga:<input type="text" name="harga"></td> -->
			<td>Qty:<input type="text" name="jumlah"></td>
			<td><input type="hidden" name="id_h" value="<?php echo $id_h; ?>"></td>
			<td><button type="submit" name="proses">Proses</button></td>
		</tr>
	</table>	
</form>

<table border="1" cellspacing="3" cellpadding="3">
		<tr>
			<th>No.</th><th>Produk</th><th>Jumlah</th><th>Harga</th><th>Sub Total</th>
		</tr>
		<?php		
		$sql = "SELECT
					transaksi_d.id,
					transaksi_d.merk,
					transaksi_d.jumlah,
					transaksi_d.harga,
					jumlah*harga as total
				FROM
					transaksi_d
				 WHERE id_h = $id_h";

		# memanggil kembali detail transaksi terkini.
		$no = 1;
		$gtotal = 0;
		$hasil = mysqli_query($koneksi, $sql);
		while($data = mysqli_fetch_array($hasil)){
			$gtotal = $gtotal+$data['total'];
			echo "<tr>";
			echo '<td align="right">'.number_format($no).'</td>';
			echo "<td>".$data['merk']."</td>";
			echo '<td align="right">'.number_format($data['jumlah']).'</td>';
			echo '<td align="right">'.number_format($data['harga']).'</td>';
			echo '<td align="right">'.number_format($data['total']).'</td>';
			echo '</tr>';
			$no++;
		}
			# menampilkan jumlah grant total dari total penjualan.
			echo '<tr>';
			echo '<td colspan="4" align="right"><strong>Grant Total:</strong></td>';
			echo '<td align="right">'.number_format($gtotal).'</td>';
			echo "</tr>";

			# update total di tabel transaksi_h
			$query = "UPDATE transaksi_h SET total=$gtotal WHERE id=$id_h";
			mysqli_query($koneksi, $query);

			mysqli_close($koneksi);
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<a href="transaksi_entri.php">Selesai</a>
</body>
</html>