<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
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

	td.bwh{
		text-align: center;
	}

</style>
<form action="simpan_tambah.php" method="post">
<table cellpadding="10" align="center">
	<tr class="judul">
		<th colspan="2">Tambah Data Peserta</th>
	</tr>
	<tr>
		<td>Nama</td>
		<td class="bwh"><input type="text" required name="nama" value=""></td>
	</tr>
	<tr>
		<td>Sekolah</td>
		<td class="bwh"><input type="text" required name="sekolah" value=""></td>
	</tr>
	<tr>
		<td>Kota Asal</td>
		<td class="bwh"><input type="text" required name="kota_asal" value=""></td>
	</tr>
	<tr>
		<td>Umur</td>
		<td class="bwh"><input type="text" required name="umur" value="" maxlength="2"></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td class="bwh"><input type="text" required name="telepon" value="" maxlength="13"></td>
	</tr>
	<tr>
		<td>Jenis Lomba</td>
		<td class="bwh">
			<select name="jenis_lomba" required>
				<option>Pilih Lomba</option>
				<option value="Olimpiade Matematika">Olimpiade Matematika</option>
				<option value="Olimpiade Sains">Olimpiade Sains</option>
				<option value="Olimpiade Bahasa Inggris">Olimpiade Bahasa Inggris</option>
				<option value="Lomba Mewarnai">Lomba Mewarnai</option>
				<option value="Talent Competition">Talent Competition</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<button class="tmbh" type="submit" class="button" href="index.php">Tambah</button>
			<button class="kmbl"><a href="index.php">Kembali</a></button>
		</td>
	</tr>
</table>
</form>
</body>


</html>