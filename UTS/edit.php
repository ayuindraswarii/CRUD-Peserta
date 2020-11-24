<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/sty-semua.css">
</head>
<body>
<style type="text/css">
	table{
		border: 1px solid black;
		border-radius: 5px;
		width:25%;
		margin-top: 9%;
	}

	tr{
		margin-left: 20px;
	}

	tr.judul{
		height: 50px;
		font-size: 20px;
	}

	th{
		background-color: #4CAF50;
	}
</style>

<?php
$no_peserta=$_GET['no_peserta'];
include "konek.php";
$datapst=mysqli_query($koneksi,"select * from peserta where no_peserta='$no_peserta'");
$d=mysqli_fetch_array($datapst);
?>

<form action="proses_ubah.php" method="post">
<table cellpadding="10" align="center">
	<tr class="judul">
		<th colspan="2">Edit Data Peserta</th>
	</tr>
	<input type="hidden" name="no_peserta" value="<?php echo $d['no_peserta'];?>">
	<tr>
		<td>Nama</td>
		<td><input type="text" required name="nama" value="<?php echo $d['nama'];?>"></td>
	</tr>
	<tr>
		<td>Sekolah</td>
		<td><input type="text" required name="sekolah" value="<?php echo $d['sekolah'];?>"></td>
	</tr>
	<tr>
		<td>Kota Asal</td>
		<td><input type="text" required name="kota_asal" value="<?php echo $d['kota_asal'];?>"></td>
	</tr>
	<tr>
		<td>Umur</td>
		<td><input type="text" required name="umur" maxlength="2" value="<?php echo $d['umur'];?>"></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td><input type="text" required name="telepon" maxlength="13" value="<?php echo $d['telepon'];?>"></td>
	</tr>
	<tr>
		<td>Jenis Lomba</td>
		<td>
		<select name="jenis_lomba" required>
        	<?php
			 if ($d['jenis_lomba']=='Olimpiade Matematika'){
			 	echo "
			 	<option value='Olimpiade Matematika' selected>Olimpiade Matematika</option>
				<option value='Olimpiade Sains'>Olimpiade Sains</option>
				<option value='Olimpiade Bahasa Inggris'>Olimpiade Bahasa Inggris</option>
				<option value='Lomba Mewarnai'>Lomba Mewarnai</option>
				<option value='Talent Competition'>Talent Competition</option>";
			 } elseif ($d['jenis_lomba']=='Olimpiade Sains') {
			 	echo "
			 	<option value='Olimpiade Sains' selected>Olimpiade Sains</option>
			 	<option value='Olimpiade Matematika'>Olimpiade Matematika</option>
				<option value='Olimpiade Bahasa Inggris'>Olimpiade Bahasa Inggris</option>
				<option value='Lomba Mewarnai'>Lomba Mewarnai</option>
				<option value='Talent Competition'>Talent Competition</option>";
			 } elseif ($d['jenis_lomba']=='Olimpiade Bahasa Inggris') {
			 	echo "
			 	<option value='Olimpiade Bahasa Inggris' selected>Olimpiade Bahasa Inggris</option>
			 	<option value='Olimpiade Matematika'>Olimpiade Matematika</option>
				<option value='Olimpiade Sains'>Olimpiade Sains</option>
				<option value='Lomba Mewarnai'>Lomba Mewarnai</option>
				<option value='Talent Competition'>Talent Competition</option>";	
			} elseif ($d['jenis_lomba']=='Lomba Mewarnai') {
			 	echo "
				<option value='Lomba Mewarnai' selected>Lomba Mewarnai</option>
				<option value='Olimpiade Matematika'>Olimpiade Matematika</option>
			 	<option value='Olimpiade Sains'>Olimpiade Sains</option>
				<option value='Olimpiade Bahasa Inggris'>Olimpiade Bahasa Inggris</option>
				<option value='Talent Competition'>Talent Competition</option>";
			 } else {
			 	echo "
				<option value='Talent Competition' selected>Talent Competition</option>
				<option value='Olimpiade Matematika'>Olimpiade Matematika</option>
				<option value='Olimpiade Sains'>Olimpiade Sains</option>
				<option value='Olimpiade Bahasa Inggris'>Olimpiade Bahasa Inggris</option>
				<option value='Lomba Mewarnai'>Lomba Mewarnai</option>";
			 }
           ?>
       </select>
		</td>
	</tr>
	<tr align="center">
		<td colspan="2">
		<input class="smpn" type="submit" name="simpan" value="Simpan" style="width: 30%;border:none;
	border-radius: 3px;padding: 10px;">
		</td>
	</tr>
</table>
</form>
</body>
</html>