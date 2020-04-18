<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<center>
	<h2 class='namaintable' align="left">Tambah Surat Keluar</h2>
<table class="tblats">
		<tr>
			<td align="left"><input type=button value="Kembali" class="back" onclick='history.back(-1)'></td>
			<td align="right">
			</td>
		</tr>
	</table>
</center>
<center>
<form action="skeluar_proses.php?prabowo=tambah" method="POST">
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
			<tr>
				<td align="right" class="asd">NO Agenda</td>
				<td align="left"><input type=text name='agenda' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">ID</td>
				<td align="left">
				<input readonly name='id' required value="<?php echo $_SESSION['agung']['id'];?>" class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Jenis Surat</td>
				<td align="left"><input type=text name='jenis' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Tanggal Kirim</td>
				<td align="left"><input type=date name='kirim' required class="date"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Nomor Surat</td>
				<td align="left"><input type=text name='no_surat' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">pengirim</td>
				<td align="left"><input type=text name='pengirim' required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">perihal</td>
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
</center>