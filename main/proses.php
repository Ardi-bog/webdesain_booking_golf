<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$hp = $_POST['hp'];
$kirim = $_POST['kirim'];
 
if($kirim){
	$query = "INSERT INTO jadwal(id,nama,tanggal,jam,hp ) VALUES ('','$nama','$tanggal', '$jam', '$hp')";
 
echo "Data Berhasil Di Simpan..<br>";
}else{
    echo "Gagal";
}
?>