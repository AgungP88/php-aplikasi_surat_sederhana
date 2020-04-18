<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<center>
	<h2 class='namaintable' align="left">Tambah Surat Masuk</h2>
<table class="tblats">
		<tr>
			<td align="left"><input type=button value="Kembali" class="back" onclick='history.back(-1)'></td>
			<td align="right">
			</td>
		</tr>
	</table>
</center>

<center>
<form action='smasuk_proses.php?prabowo=tambah' method='POST'>
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
			<tr>
				<td align="right" class="asd">No Agenda : </td>
				<td align="left"><input type=text name='agenda' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">ID : </td>
				<td align="left"><input readonly name='id' value="<?php echo $_SESSION['agung']['id'];?>" required class="inputantbl"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">Jenis Surat : </td>
				<td align="left"><input type=text name='jenis' required class="inputantbl"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">Tanggal Kirim : </td>
				<td align="left"><input type='date' name='kirim' required class="date"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">Tanggal Terima : </td>
				<td align="left"><input type='date' name='terima' required class="date"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">No Surat : </td>
				<td align="left"><input type=text name='no_surat' required class="inputantbl"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">Pengirim : </td>
				<td align="left"><input type=text name='pengirim' required class="inputantbl"></td>
			</tr>
			<tr> 
				<td align="right" class="asd">Perihal : </td>
				<td align="left"><input type=text name='perihal' required class="inputantbl"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan=2>
					<input type=submit value='Tambah' class='btninput'>
				</td>
			</tr>
		</table>
	</form>