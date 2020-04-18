<?php
require'koneksi.php';

	$user = $_POST['username'];
	$pw = $_POST['password'];

	$row = $koneksi -> prepare('SELECT * FROM petugas WHERE id = :id AND password = :pw');
	$row -> bindParam(':id', $user);
	$row -> bindParam(':pw', $pw);
	$row -> execute();

	$JumRow = $row -> rowCount();

	if ($JumRow>0){
		session_start();
		$_SESSION["agung"] = $row -> fetch();
		echo "<script>
			alert('Login Berhasil')</script>
			<script>window.location = 'admin/beranda_admin.php'
			</script>";
	}

	else{
		echo "<script>
			alert('Login Gagal')</script>
			<script>window.location = 'login.php'
			</script>";
	}
?>