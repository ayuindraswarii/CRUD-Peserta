<!DOCTYPE html>
<html>
<head>
	<title>Data Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/sty-index.css">
</head>
<body>
<style type="text/css">
	table{
		width: 90%;
		border-collapse: collapse;
	}

	tr{
		margin-left: 20px;
	}

	tr.judul{
		height: 50px;
		font-size: 18px;
	}

	th{
		background-color: #4CAF50;
	}
</style>
<center>
<h2>DATA PESERTA LOMBA</h2>
<button class="tmbh"><a href="tambah.php">Tambah Data</a></button>
</center>
<br/>
<table cellpadding="10" align="center" border="1" >
	<tr class="judul">
		<th>No Peserta</th>
		<th>Nama</th>
		<th>Sekolah</th>
		<th>Kota Asal</th>
		<th>Umur</th>
		<th>Telepon</th>
		<th>Jenis Lomba</th>
		<th width="150px">Opsi</th>
	</tr>
	<?php 
		include 'konek.php';
		$data = mysqli_query($koneksi, "SELECT * from peserta");
		while ($d = mysqli_fetch_array($data)) {
		?>
		<tr>
			<td align="center"><?php echo $d['no_peserta']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['sekolah']; ?></td>
			<td><?php echo $d['kota_asal']; ?></td>
			<td><?php echo $d['umur']; ?></td>
			<td><?php echo $d['telepon']; ?></td>
			<td><?php echo $d['jenis_lomba']; ?></td>
			<td align="center">
				<button class="edt" style="margin-right: 3px;width: 60px;"><a href="edit.php?no_peserta=<?php echo $d['no_peserta'];?>">Edit</a></button>
				<button class="hps" style="width: 60px;"><a href="hapus.php?no_peserta=<?php echo $d['no_peserta'];?>">Hapus</a></button>
			</td>
		</tr>		
		<?php  
		}
		?>
</table>
</body>
</html>