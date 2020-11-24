<?php 
	include 'konek.php';
	
	$nama=$_POST['nama'];
	$sekolah=$_POST['sekolah'];
	$kota_asal=$_POST['kota_asal'];
	$umur=$_POST['umur'];
	$telepon=$_POST['telepon'];
	$jenis_lomba=$_POST['jenis_lomba'];

	$input=mysqli_query($koneksi,"INSERT INTO peserta(nama,sekolah,kota_asal,umur,telepon,jenis_lomba) VALUES ('$nama','$sekolah','$kota_asal','$umur','$telepon','$jenis_lomba')");
	if ($input) {
		echo "<script>alert('Berhasil Tambah Data');location.href='index.php';</script>";
	} else {
		echo "<script>alert('Gagal Tambah Data');location.href='tambah.php';</script>";
	}
 ?>