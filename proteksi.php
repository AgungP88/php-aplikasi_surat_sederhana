<?php
session_start();
if(!isset($_SESSION["agung"])) {
	echo 
	"<script> 
			alert ('anda harus login dulu');
			window.location = '../login.php';
	</script>";
}
?>