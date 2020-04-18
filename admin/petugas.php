<?php
include '../koneksi.php';
include '../proteksi.php';
include 'menu_bar_admin.php';
?>
<link rel=stylesheet href="../css/csstable.css">
<link rel=stylesheet href="../css/cssbutton.css">
	<center>
	<h2 class='namaintable' align="left">Daftar Petugas</h2>

	<table class='tblats'>
		<tr>
		<?php
		if($_SESSION['agung']['hak']=='super user'){?>
		<td align='left'><a href="petugas_tambah.php"><input type=button value="Add New" class="tmbh"></a><br><br>
		</td><?php }?>
		<td align='right'>
			<form action="petugas_search.php" method="POST">
			Cari : <input type=search name="cari" placeholder="cari" class="inputan2">
			<input type=submit value="cari" hidden class="src"><br><br></form>
		</td>
	</tr>
</table>
			<table class='table' cellpadding="10">
				<tr class="tr">
					<th>Id Petugas</th>
					<th>Nama Depan</th>
					<th>Nama Belakang</th>
					<?php
					if($_SESSION['agung']['hak']=='super user'){?>
					<th>Password</th>
					<?php } ?>
					<th>Hak</th>
					<?php
					if($_SESSION['agung']['hak']=='super user'){?>
					<th colspan=2>Action</th>
					<?php } ?>
				</tr>

			<?php	
			$asd = $koneksi -> prepare("SELECT * FROM petugas");
			$asd -> execute();
			while($data = $asd -> fetch()){
			?>

				<tr class="tr2">
					<td><?php echo $data['id']?></td>
					<td><?php echo $data['nama_depan']?></td>
					<td><?php echo $data['nama_belakang']?></td>
					<?php
						if($_SESSION['agung']['hak']=='super user'){?>
					<td><?php echo $data['password']?></td>
					<?php } ?>
					<td><?php echo $data['hak']?></td>
					<?php
						if($_SESSION['agung']['hak']=='super user'){?>
					<td>
						<a href=petugas_edit.php?agung=<?php echo $data['id'];?>>
							<input type=button value='edit' class="edit"></a>
					</td>
					<td>
						<a href=petugas_proses.php?prabowo=hapus&app=<?php echo $data['id'];?>>
							<input type=button value='hapus' class="hapus"></a>
					</td>
						<?php } ?>
				</tr>
			<?php }?>

			</table>
	</center>

<?php include 'footer_admin.php'; ?>