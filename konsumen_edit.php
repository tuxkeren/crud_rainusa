<?php
include "koneksi.php";
$id = $_GET['id'];
$no	= 1;
$query = "SELECT * FROM konsumen WHERE id = $id";
$hasil = mysqli_query($koneksi, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Konsumen</title>
</head>
<body>
	<div>
		<h2>Edit Konsumen</h2>
		<form action="konsumen_update.php" method="POST">
			<table border="0" cellspacing="3" cellpadding="3">
			<?php 
				while ($data = mysqli_fetch_array($hasil)){
			?>
			 	<tr>
					<td>Kode Kosumen</td><td>:</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'];?>">
						<strong><?php echo $data['id']; ?></strong>
					</td>
				</tr>
				<tr>
					<td>Nama Konsumen</td><td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
				</tr>
				<tr>
					<td>Telepon</td><td>:</td>
					<td><input type="text" name="telepon" value="<?php echo $data['telepon'];?>"></td>
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