<?php

include "konek.php";
$no_peserta = $_GET['no_peserta'];
$hapus=mysqli_query($koneksi,"DELETE from peserta where no_peserta='$no_peserta'");

if($hapus)
{
	echo "<script>alert('Sukses Menghapus Data');
	location.href='index.php';</script>";
}
else 
{
	echo "<script>alert('Data Belum Terhapus');
	location.href='index.php';</script>";
}
?>