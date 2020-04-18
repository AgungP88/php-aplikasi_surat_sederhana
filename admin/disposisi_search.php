<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
?>
			<?php
			$cari = $_POST['cari'];
			$asd = $koneksi -> prepare("SELECT * FROM disposisi WHERE no_disposisi LIKE '%$cari%' OR no_agenda LIKE '%$cari%'");
			$asd -> execute();
			?>
<center>
<h3 class="namaintable" align="left">Tabel Disposisi</h3>

	<table class="tblats">
		<tr>
			<td align="left"></td>
			<td align="right"><form action="smasuk_search.php" method="POST">
				Cari : <input type=search name="cari" placeholder="cari" class="inputan2">
				<input type=submit value="cari" class="src" hidden></form>
			</td>
		</tr>
	</table>
</center>

<center>
<div class="outable">
	<table class='table' cellpadding="10">
				<tr class="tr"> 
					<th>No Disposisi</th>
					<th>No Agenda</th>
					<th>No Surat</th>
					<th>Kepada</th>
					<th>Keterangan</th>
					<th>Status Surat</th>
					<th>Tanggapan</th>
					<th colspan=2>Aksi</th>
				</tr>

			<?php
			while($data = $asd -> fetch()){
				?>

				<tr class="tr2">
					<td><?php echo $data['no_disposisi'];?></td>
					<td><?php echo $data['no_agenda'];?></td>
					<td><?php echo $data['no_surat'];?></td>
					<td><?php echo $data['kepada'];?></td>
					<td><?php echo $data['keterangan'];?></td>
					<td><?php echo $data['status_surat'];?></td>
					<td><?php echo $data['tanggapan'];?></td>
					
					<td>
						<a href=disposisi_edit.php?agung=<?php echo $data['no_agenda'];?>>
							<input type=button value='edit' class="edit"></a>
					</td>
					<td>
						<a href=disposisi_proses.php?prabowo=hapus&app=<?php echo $data['no_agenda'];?> onclick="return confirm('yakin hapus')">
						<input type=button value='hapus' class="hapus"></a>
					</td>
				</tr>
				<?php	}?>
			</table>
		</div>
		
			<a href=disposisi_print.php>
			<input type=button value="Print Disposisi" class="print"></a>
	</center>

<?php include'footer_admin.php';?>