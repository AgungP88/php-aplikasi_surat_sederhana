<?php
include'koneksi.php';
include'menu_bar.php';
include'header.php';
?>
<br><br>
<html>
<head>
	<title>SURAT</title>
	<link rel=stylesheet href="css/csslogin.css">
</head>
<body>
	<form action="loginproses.php" method="POST">
	<center>
	<table cellpadding="15" cellspacing="0" class="tabel">
		<tr>
			<td colspan=2 bgcolor="aqua" class="tulisan1">LOGIN</td>
		</tr>
		<tr bgcolor="blue">
			<td class="tulisan">Username</td>
			<td><input type=text name="username" placeholder="Masukan Username" required class="inputan"></td>
		</tr>
		<tr bgcolor="blue">
			<td class="tulisan">Password</td>
			<td><input type=password name="password" placeholder="Masukan Password" required class="inputan"></td>
		</tr>
		<tr bgcolor="blue">
			<td></td>
			<td><input type=submit value="LOGIN" class="submit"></td>
		</tr>
	</table>
</center>
</form>
</body>
</html>