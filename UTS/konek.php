<?php 
$koneksi = mysqli_connect("localhost","root","","db_peserta");

if (mysqli_connect_error()) {
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

 ?>