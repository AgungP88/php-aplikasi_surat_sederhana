<?php
include '../koneksi.php';
include '../proteksi.php';
?>
<html>
<head>
	<title>Surat Masuk</title>
	<link rel=stylesheet href="../css/cssunknow.css">
</head>
<body>
<script type="text/javascript">window.print()</script>
<table border=1 class='table'>
				<tr class="atas"> 
					<th>No Agenda</th>
					<th>ID</th>
					<th>Jenis Surat</th>
					<th>Tanggal Kirim</th>
					<th>Tanggal Terima</th>
					<th>No Surat</th>
					<th>Pengirim</th>
					<th>Perihal</th>
				</tr>

			<?php
			$asd = $koneksi -> prepare("SELECT * FROM suratmasuk");
			$asd -> execute();
			while($data = $asd -> fetch()){
				?>

				<tr class="atas">
					<td><?php echo $data['no_agenda'];?></td>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['jenis_surat'];?></td>
					<td><?php echo $data['tgl_kirim'];?></td>
					<td><?php echo $data['tgl_terima'];?></td>
					<td><?php echo $data['no_surat'];?></td>
					<td><?php echo $data['pengirim'];?></td>
					<td><?php echo $data['perihal'];?></td>
				</tr>
				<?php }?>
			</table>
		</body>
		</html>