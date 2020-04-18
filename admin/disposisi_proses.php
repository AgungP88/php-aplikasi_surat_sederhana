<?php
include '../koneksi.php';
	$proses = $_GET['prabowo'];
	if($proses=='tambah'){
		$no_dsps 	= $_POST['disposisi'];
		$agenda 	= $_POST['agenda'];
		$no_surat 	= $_POST['no_surat'];
		$kpd		= $_POST['kepada'];
		$ktrg		= $_POST['keterangan'];
		$sts 		= $_POST['status'];
		$tgp		= $_POST['tanggapan'];

		$tambah = $koneksi -> prepare("INSERT INTO disposisi (no_disposisi, no_agenda, no_surat, kepada, keterangan, status_surat, tanggapan) VALUES(?,?,?,?,?,?,?)");
		$tambah -> execute(array($no_dsps, $agenda, $no_surat, $kpd, $ktrg, $sts, $tgp));
		
		$ubah = $koneksi -> prepare("UPDATE suratmasuk SET status_disposisi='$agenda' WHERE no_agenda = '$agenda'");
		$ubah -> execute(array($agenda));

			echo "<script>
					alert('tambah berhasil')
					window.location='smasuk_admin.php'
					</script>";
			}

if ($proses=='edit') {			
		$no_dsps 	= $_POST['disposisi'];
		$agenda 	= $_POST['agenda'];
		$no_surat 	= $_POST['no_surat'];
		$kpd		= $_POST['kepada'];
		$ktrg		= $_POST['keterangan'];
		$sts 		= $_POST['status'];
		$tgp		= $_POST['tanggapan'];

		$query = $koneksi -> prepare("UPDATE disposisi SET no_agenda = :2 , no_surat = :3 , kepada = :4 , keterangan = :5, status_surat = :6, tanggapan = :7  WHERE no_disposisi = :1");
			
		$query -> bindParam(':1',$no_dsps);
		$query -> bindParam(':2',$agenda);
		$query -> bindParam(':3',$no_surat);
		$query -> bindParam(':4',$kpd);
		$query -> bindParam(':5',$ktrg);
		$query -> bindParam(':6',$sts);
		$query -> bindParam(':7',$tgp);
		$query -> execute();

		$update = $query -> rowCount();

		if($update > 0){
			echo 
			'<script>
				alert("Edit Berhasil"); 
				window.location ="disposisi.php"
			</script>';

		}else{
			echo 
			'<script>
				alert("Edit Gagal"); 
				window.location ="disposisi.php"
			</script>';

		}
	}
	if ($proses=='hapus') {
		$agenda = $_GET['app'];
		$hapus = $koneksi -> prepare("DELETE FROM disposisi WHERE no_agenda = :app");
		$hapus -> bindParam(':app',$agenda);
		$hapus -> execute();

		$ubah = $koneksi -> prepare("UPDATE suratmasuk SET status_disposisi='' WHERE no_agenda = '$agenda'");
		$ubah -> execute(array($agenda));

		
			echo 
			'<script>
				alert("Hapus Berhasil");
				window.location = "smasuk_admin.php";
			</script>';
		}
	?>