<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
<?php
$metode = $_GET['agung'];
$edit = $koneksi -> prepare("select * from petugas where id=:id");
$edit -> bindParam(':id',$metode);
$edit -> execute();
$hasil = $edit -> fetch();
?>

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
<form action='petugas_proses.php?prabowo=edit' method='POST'>
		<table class="tblinput" cellpadding="10" cellspacing="0">
			<tr class="jdltbl">
				<td colspan="2">Masukan Detailnya Dibawah</td>
			</tr>
				<input type="hidden" name="id" value="<?php echo $hasil['id'];?>">
			<tr>
				<td align="right" class="asd">Nama Depan</td>
				<td align="left"><input type=text name='depan' value="<?php echo $hasil['nama_depan'];?>" size=30 maxlength=25 required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Nama Belakang</td>
				<td align="left"><input type=text name='belakang' value="<?php echo $hasil['nama_belakang'];?>" size=30 maxlength=25 required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Password</td>
				<td align="left"><input type=password name='pw' value="<?php echo $hasil['password'];?>" size=30 maxlength=25 required class="inputantbl"></td>
			</tr>
			<tr>
				<td align="right" class="asd">Hak</td>
				<td align="left"><select name='hak' value="<?php echo $hasil['hak'];?>" required class="date">	
						<option></option>
						<option>Admin</option>
						<option>User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan=2>
					<input type=submit class='btninput' value='Edit'>
				</td>
			</tr>
		</table>
	</form>
</center>