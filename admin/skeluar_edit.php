<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<?php
$metode = $_GET['agung'];
$edit = $koneksi -> prepare("SELECT * FROM suratkeluar WHERE no_agenda = :agenda");
$edit -> bindParam(':agenda', $metode);
$edit -> execute();
$hasil = $edit -> fetch();
?>
<center>
	<h2 class='namaintable' align="left">Edit Surat Keluar</h2>
<table class="tblats">
		<tr>
			<td align="left"><input type=button value="Kembali" class="back" onclick='history.back(-1)'></td>
			<td align="right">
			</td>
		</tr>
	</table>
</center>
<center>
<form action="skeluar_proses.php?prabowo=edit" method="POST">
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
				<input type=hidden name="agenda" value="<?php echo $hasil['no_agenda'];?>">
			<tr>
				<td align="right" class="asd">ID</td>
				<td align="left"><input readonly name="id" value="<?php echo $hasil['id'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Jenis Surat</td>
				<td align="left"><input type=text name="jenis" value="<?php echo $hasil['jenis_surat'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Tanggal Kirim</td>
				<td align="left"><input type=date name="kirim" value="<?php echo $hasil['tgl_kirim'];?>" required class="date"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Nomor Surat</td>
				<td align="left"><input type=text name="no_surat" value="<?php echo $hasil['no_surat'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Pengirim</td>
				<td align="left"><input type=text name="pengirim" value="<?php echo $hasil['pengirim'];?>" required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">perihal</td>
				<td align="left"><input type=text name="perihal" value="<?php echo $hasil['perihal'];?>" required class="inputantbl"></td>
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