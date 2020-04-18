<?php
include '../koneksi.php';
include '../proteksi.php';
?>

<?php
$metode = $_GET['agung'];
$edit = $koneksi -> prepare("SELECT * FROM suratmasuk WHERE no_agenda = :agenda");
$edit -> bindParam(':agenda', $metode);
$edit -> execute();
$hasil = $edit -> fetch();

$dispo = $koneksi -> prepare("SELECT * FROM disposisi WHERE no_agenda = :agenda");
$dispo -> bindParam(':agenda', $metode);
$dispo -> execute();
$disposisi = $dispo -> fetch();
?>

<html>
<head>
	<title>Surat Masuk</title>
	<link rel=stylesheet href="../css/cssunknow.css">
</head>
<body>
<script type="text/javascript">window.print()</script>
		<center>
		<table cellpadding="5" class="tblprnt">
			<tr>
				<td align="center" colspan="2">Petugas</td>
			</tr>
			<tr>
				<td class="td">ID</td>
				<td>: <?php echo $_SESSION['agung']['id'];?></td>
			</tr>
			<tr>
				<td class="td">Nama Depan</td>
				<td>: <?php echo $_SESSION['agung']['nama_depan'];?></td>
			</tr>
			<tr>
				<td class="td">Nama Belakang</td>
				<td>: <?php echo $_SESSION['agung']['nama_belakang'];?></td>
			</tr>
			<tr>
				<td class="td">Hak</td>
				<td>: <?php echo $_SESSION['agung']['hak'];?></td>
			</tr>
		</table><br>

		<table cellpadding="5" class="tblprnt">
			<tr>
				<td align="center" colspan="2">Surat Masuk</td>
			</tr>
			<tr>
				<td class="td">No Agenda</td>
				<td>: <?php echo $hasil['no_agenda'];?></td>
			</tr>
			<tr>
				<td class="td">ID</td>
				<td>: <?php echo $hasil['id'];?></td>
			</tr>
			<tr>
				<td class="td">Jenis Surat</td>
				<td>: <?php echo $hasil['jenis_surat'];?></td>
			</tr>
			<tr>
				<td class="td">Tanggal Kirim</td>
				<td>: <?php echo $hasil['tgl_kirim'];?></td>
			</tr>
			<tr>
				<td class="td">Tanggal Terima</td>
				<td>: <?php echo $hasil['tgl_terima'];?></td>
			</tr>	
			<tr>
				<td class="td">No Surat</td>
				<td>: <?php echo $hasil['no_surat'];?></td>
			</tr>
			<tr>
				<td class="td">Pengirim</td>
				<td>: <?php echo $hasil['pengirim'];?></td>
			</tr>
			<tr>
				<td class="td">Perihal</td>	
				<td>: <?php echo $hasil['perihal'];?></td>
			</tr>
			<tr>
				<td class="td">Status Disposisi</td>
				<td>: <?php echo $hasil['status_disposisi'];?></td>
			</tr>
		</table><br>

		<table cellpadding="5" class="tblprnt">
			<tr>
				<td align="center" colspan="2">Disposisi</td>
			</tr>
			<tr>
				<td class="td">No Disposisi</td>
				<td>: <?php echo $disposisi['no_disposisi'];?></td>
			</tr>
			<tr>
				<td class="td">No Agenda</td>
				<td>: <?php echo $disposisi['no_agenda'];?></td>
			</tr>
			<tr>
				<td class="td">No Surat</td>
				<td>: <?php echo $disposisi['no_surat'];?></td>
			</tr>
			<tr>
				<td class="td">Kepada</td>
				<td>: <?php echo $disposisi['kepada'];?></td>
			</tr>
			<tr>
				<td class="td">Keterangan</td>
				<td>: <?php echo $disposisi['keterangan'];?></td>
			</tr>
			<tr>
				<td class="td">Status Surat</td>	
				<td>: <?php echo $disposisi['status_surat'];?></td>
			</tr>
			<tr>
				<td class="td">Tanggapan</td>
				<td>: <?php echo $disposisi['tanggapan'];?></td>
			</tr>
		</table>
	</center>
	</body>
</html>