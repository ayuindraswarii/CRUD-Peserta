<?php 
	include 'konek.php';

	$no_peserta = $_POST['no_peserta'];
	$nama = $_POST['nama'];
	$sekolah = $_POST['sekolah'];
	$kota_asal = $_POST['kota_asal'];
	$umur = $_POST['umur'];
	$telepon = $_POST['telepon'];
	$jenis_lomba = $_POST['jenis_lomba'];


	$edit = mysqli_query($koneksi,"UPDATE peserta set nama='$nama',sekolah='$sekolah',kota_asal='$kota_asal',umur='$umur',telepon='$telepon',jenis_lomba='$jenis_lomba' where no_peserta='$no_peserta'");

	if ($edit) {
		echo "<script>alert('Sukses Update');location.href='index.php';</script>";
	} else {
		echo "<script>alert('Gagal Update');location.href='edit.php';</script>";
	}
 ?>
