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
			$asd = $koneksi -> prepare("SELECT * FROM suratkeluar WHERE no_agenda LIKE '%$cari%' OR id LIKE '%$cari%'");
			$asd -> execute();
			?>
<center>
<h3 class="namaintable" align="left">Tabel Surat Keluar</h3>

	<table class="tblats">
		<tr>
			<td align="left"><a href="skeluar_tambah.php"><input type=button value="Tambah Surat Keluar" class="tmbh"></a></td>
			<td align="right"><form action="skeluar_search.php" method="POST">
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
					<td>No Agenda</td>
					<td>ID</td>
					<td>Jenis Surat</td>
					<td>Tanggal Kirim</td>
					<td>Nomor Surat</td>
					<td>Pengirim</td>
					<td>Perihal</td>
					<td colspan=3>Aksi</td>
				</tr>

			<?php
			while($data = $asd -> fetch()){
			?>

				<tr class="tr2">
					<td><?php echo $data['no_agenda'];?></td>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['jenis_surat'];?></td>
					<td><?php echo $data['tgl_kirim'];?></td>
					<td><?php echo $data['no_surat'];?></td>
					<td><?php echo $data['pengirim'];?></td>
					<td><?php echo $data['perihal'];?></td>
					<td>
						<a href=skeluar_edit.php?agung=<?php echo $data['no_agenda'];?>>
							<input type=button value='Edit' class="edit"></a>
					</td>
						<td>
						<a href=skeluar_pcs_print.php?agung=<?php echo $data['no_agenda'];?>>
							<input type=button value='Print' class="prnt"></a>
					</td>
					<td>
						<a href=skeluar_proses.php?prabowo=hapus&app=<?php echo $data['no_agenda'];?> onclick="return confirm('yakin hapus')">
							<input type=button value='Hapus' class="hapus"></a>
					</td>
				</tr>
				<?php }?>
			</table>

		</div>

		<a href=skeluar_print.php>
			<input type=button value="Print Surat Keluar" class="print"></a>
		
	</center>

<?php include'footer_admin.php';?>