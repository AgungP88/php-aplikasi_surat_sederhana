<?php
include '../koneksi.php';
	$proses = $_GET['prabowo'];
	if($proses=='tambah'){
		$agenda		= $_POST['agenda'];
		$id 		= $_POST['id'];
		$jenis		= $_POST['jenis'];
		$kirim		= $_POST['kirim'];
		$no_surat	= $_POST['no_surat'];
		$pengirim	= $_POST['pengirim'];
		$perihal	= $_POST['perihal'];

		$tambah = $koneksi -> prepare("INSERT INTO suratkeluar (no_agenda, id, jenis_surat, tgl_kirim, no_surat, pengirim, perihal) VALUES(?,?,?,?,?,?,?)");
		$tambah -> execute(array($agenda, $id, $jenis, $kirim, $no_surat, $pengirim, $perihal));
		$insert = $tambah -> rowCount();

		if($insert>0){
			echo "<script>
					alert('tambah berhasil')
					window.location='skeluar_admin.php'
					</script>";
		}else{
			echo "<script>
					alert('tambah gagal')
					window.locatin='skeluar_admin.php'
					</script>";
		}
	}

if ($proses=='edit') {			
		$agenda		= $_POST['agenda'];
		$id 		= $_POST['id']; 
		$jenis		= $_POST['jenis']; 
		$kirim 		= $_POST['kirim'];
		$no_surat	= $_POST['no_surat'];
		$pengirim	= $_POST['pengirim'];
		$perihal 	= $_POST['perihal'];

		$query = $koneksi -> prepare("UPDATE suratkeluar SET id = :2 , jenis_surat = :3 , tgl_kirim = :4 , no_surat = :6  ,pengirim = :7  , perihal = :8  WHERE no_agenda = :1");
			
		$query -> bindParam(':1',$agenda);
		$query -> bindParam(':2',$id);
		$query -> bindParam(':3',$jenis);
		$query -> bindParam(':4',$kirim);
		$query -> bindParam(':6',$no_surat);
		$query -> bindParam(':7',$pengirim);
		$query -> bindParam(':8',$perihal);
		$query -> execute();

		$update = $query -> rowCount();

		if($update > 0){
			echo 
			'<script>
				alert("Edit Berhasil"); 
				window.location ="skeluar_admin.php"
			</script>';

		}else{
			echo 
			'<script>
				alert("Edit Gagal"); 
				window.location ="skeluar_admin.php"
			</script>';

		}
	}
	if ($proses=='hapus') {
		$agenda = $_GET['app'];
		$hapus = $koneksi -> prepare("DELETE FROM suratkeluar WHERE no_agenda = :app");
		$hapus -> bindParam(':app',$agenda);
		$hapus -> execute();

		$delete = $hapus -> rowCount();

		if($delete > 0) {
			echo 
			'<script>
				alert("Hapus Berhasil");
				window.location = "skeluar_admin.php";
			</script>';
		}else{
			echo 
			'<script>
				alert("Hapus Gagal");
				window.location = "skeluar_admin.php";
			</script>';
		}
	}?>