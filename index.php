<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
	<h1>Selamat datang</h1>
	<h2>Di Aplikasi FAKTUR</h2>
	<h3> Sangat-sangat sederhana</h3>
	<br/>
	<p>Silahkan login</p>
	<form action="proses_login.php" method="POST">
		<table>
		<tr>
			<td>User name</td><td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<td colspan="2">&nbsp;</td><td><button type="sumbit" name="login">Login</button></td>
		<tr>
		</tr>	
	</table>
	</form>
</center>
</body>
</html>