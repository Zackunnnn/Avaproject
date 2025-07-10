<?php
if(!isset($_SESSION)){
 session_start();
}

if(!isset($_SESSION["role"])){
	echo "<script> alert('Silakan Login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
}
else
{
	if($_SESSION["role"]!='client'){
		echo "<script> alert('Hanya client yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
?>