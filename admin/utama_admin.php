<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssunknow.css">
<center>
<h3 class="namaintable" align="left">Selamat Datang</h3>
</center><br><br><br>
	<?php
	$petugas = $koneksi -> prepare("SELECT * FROM petugas");
	$petugas -> execute();
	$jumpetugas = $petugas -> rowCount();

	$smasuk = $koneksi -> prepare("SELECT * FROM suratmasuk");
	$smasuk -> execute();
	$jumsmasuk = $smasuk -> rowCount();

	$skeluar = $koneksi -> prepare("SELECT * FROM suratkeluar");
	$skeluar -> execute();
	$jumskeluar = $skeluar -> rowCount();	

	$dispo = $koneksi -> prepare("SELECT * FROM disposisi");
	$dispo -> execute();
	$jumdispo = $dispo -> rowCount();
	?>
	<center>
	<div class="info">
	<table align="center" cellpadding="10" cellspacing="10" >
		<tr>
			<td>
				<div class="box">
					Jumlah Petugas : <?php echo "$jumpetugas";?>
				</div>
			</td>
			<td>
				<div class="box">
					Jumlah Surat Masuk : <?php echo "$jumsmasuk";?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="box">
					Jumlah Surat Keluar : <?php echo "$jumskeluar";?>
				</div>
			</td>
			<td>
				<div class="box">
					Jumlah Disposisi : <?php echo "$jumdispo";?>
				</div>
			</td>
		</tr>	
	</table></div></center><br><br>

