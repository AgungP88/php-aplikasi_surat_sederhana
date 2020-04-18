<?php
include'../koneksi.php';
include'../proteksi.php';
include'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
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
					<th>No Agenda</th>
					<th>ID</th>
					<th>Jenis Surat</th>
					<th>Tanggal Kirim</th>
					<th>Nomor Surat</th>
					<th>Pengirim</th>
					<th>Perihal</th>
					<th colspan=3>Aksi</th>
				</tr>

			<?php
			$asd = $koneksi ->prepare('SELECT * FROM suratkeluar');
			$asd -> execute();
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