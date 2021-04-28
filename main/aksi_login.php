<?php
	session_start();
	include "koneksi.php";
	$email = $_POST['email'];	
	$password = $_POST['password'];
	
	$query = "SELECT * FROM tabel_user WHERE email = '$email'";
	$hasil = mysqli_query($koneksi,$query);
	$data = mysqli_fetch_array($hasil);
	
	$pengacak = "p3ng4c4k";
	
	$passmd = md5($pengacak . md5($password));
	if ($passmd == $data['password'])
	{
		$_SESSION['level'] = $data['level'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['email'] = $data['email'];
		echo "<script>alert('Berhasil Login');window.location= '..';</script>";
	}
	
?>