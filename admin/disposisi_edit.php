<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<?php
$metode = $_GET['agung'];
$edit = $koneksi -> prepare("SELECT * FROM disposisi WHERE no_agenda = :agenda");
$edit -> bindParam(':agenda', $metode);
$edit -> execute();
$hasil = $edit -> fetch();
?>
<center>
	<h2 class='namaintable' align="left">Edit Disposisi</h2>
<table class="tblats">
		<tr>
			<td align="left"><input type=button value="Kembali" class="back" onclick='history.back(-1)'></td>
			<td align="right">
			</td>
		</tr>
	</table>
</center>
<center>
<form action="disposisi_proses.php?prabowo=edit" method="POST">
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
			<tr>
				<td align="right" class="asd">No Disposisi</td>
				<td align="left"><input readonly name="disposisi" value="<?php echo $hasil['no_disposisi'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">No Agenda</td>
				<td align="left"><input readonly name="agenda" value="<?php echo $hasil['no_agenda'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">No Surat</td>
				<td align="left"><input readonly name="no_surat" value="<?php echo $hasil['no_surat'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Kepada</td>
				<td align="left"><input type=text name='kepada' value="<?php echo $hasil['kepada'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Keterangan</td>
				<td align="left"><input type=text name='keterangan' value="<?php echo $hasil['keterangan'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Status Surat</td>
				<td align="left"><input type=text name='status' value="<?php echo $hasil['status_surat'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Tanggapan</td>
				<td align="left"><input type=text name='tanggapan' value="<?php echo $hasil['tanggapan'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan=2>
					<input type=submit value='Edit' class='btninput'>
				</td>
			</tr>
		</table>
	</form>
</center>