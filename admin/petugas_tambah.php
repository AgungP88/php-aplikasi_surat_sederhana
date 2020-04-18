<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<center>
	<h2 class='namaintable' align="left">Tambah Petugas</h2>
<table class="tblats">
		<tr>
			<td align="left"><input type=button value="Kembali" class="back" onclick='history.back(-1)'></td>
			<td align="right">
			</td>
		</tr>
	</table>
</center>
<center>
<form action='petugas_proses.php?prabowo=tambah' method='POST'>
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
			<tr>
				<td align="right" class="asd">ID</td>
				<td align="left"><input type=text name='id' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Nama Depan</td>
				<td align="left"><input type=text name="depan" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Nama Belakang</td>
				<td align="left"><input type=text name="belakang" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Password</td>
				<td align="left"><input type=password name="pw" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Hak</td>
				<td align="left"><select name="hak" required class="date">
						<option></option>
						<option>Admin</option>
						<option>User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan=2>
					<input type=submit class='btninput' value='Tambah'>
				</td>
			</tr>
		</table>
	</form>
</center>