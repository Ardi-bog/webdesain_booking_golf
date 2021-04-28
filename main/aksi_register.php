<?php
	$email = $_POST['email'];
    $password = $_POST['password'];
    $password1 = $_POST['pass1'];
	$username = $_POST['nama'];
    $level = $_POST['level'];
    $telp = $_POST['telp'];
	
	if($password == $password1){
		
	include "koneksi.php";
	
	$pengacak= "p3ng4c4k";
	
	$passmd = md5($pengacak . md5($password));
	
	$query = "INSERT INTO tabel_user VALUES('','$nama', '$email', '$telp', '', '$passmd','$level')";
	$hasil = mysqli_query($koneksi,$query);
	
	if($hasil) echo "<script>alert('Berhasil Register');window.location= 'form_login.php';</script>";
	else echo "Username sudah ada yang memiliki";
	}
	else echo "Password yang dimasukkan tidak sama";
?>