<?php
include '../koneksi.php';
	$proses = $_GET['prabowo'];
	if ($proses=='tambah'){
			$id 	= $_POST ['id'];
			$dpn	= $_POST ['depan'];
			$blkg	= $_POST ['belakang'];
			$pw		= $_POST ['pw'];
			$hak	= $_POST ['hak'];

			$tambah = $koneksi -> prepare("INSERT INTO petugas (id, nama_depan, nama_belakang, password, hak)VALUES (?,?,?,?,?)");
			$tambah -> execute(array($id, $dpn, $blkg, $pw, $hak));	

			$insert = $tambah -> rowCount();

			if($insert>0){
				echo "<script>
					alert('tambah berhasil')
					window.location='petugas.php'
					</script>";
			}else{
				echo "<script>
					alert('tammbah gagal')
					window.location='petugas.php,
					</script>";
			}
	}

else if ($proses=='edit') {
			$id				= $_POST['id'];
			$dpn 			= $_POST['depan']; 
			$blkng 			= $_POST['belakang']; 
			$pw 			= $_POST['pw'];
			$hak 			= $_POST['hak']; 

			$query = $koneksi -> prepare("UPDATE petugas SET nama_depan = :depan , nama_belakang = :belakang , password = :pw , hak = :hak WHERE id = :id_ptgs");
			$query -> bindParam(':id_ptgs',$id);
			$query -> bindParam(':depan',$dpn);
			$query -> bindParam(':belakang',$blkng);
			$query -> bindParam(':pw',$pw);
			$query -> bindParam(':hak',$hak);
			$query -> execute();

			$update = $query -> rowCount();

			if($update > 0){
				echo 
				'<script>
					alert("Edit Berhasil"); 
					window.location ="petugas.php"
				</script>';

			}else{
				echo 
				'<script>
					alert("Edit Gagal"); 
					window.location ="petugas.php"
				</script>';

			}
	}

	else if($proses=='hapus') {
			$id = $_GET['app'];
			$hapus = $koneksi -> prepare("DELETE FROM petugas WHERE id = :id;");
			$hapus -> bindParam(':id',$id);
			$hapus -> execute();
			
			$delete = $hapus -> rowCount();

			if($delete > 0) {
				echo 
				'<script>
					alert("Hapus Berhasil");
					window.location = "petugas.php";
				</script>';
			}else{
				echo 
				'<script>
					alert("Hapus Gagal");
					window.location = "petugas.php";
				</script>';
			}
	}
?>