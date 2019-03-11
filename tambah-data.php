<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data</h3>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form action="insert.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			
			<tr>
				<td>KOM</td>
				<td>:</td>
				<td>
					<select name="kom" required>
						<option value=""> Pilih KOM </option>
						<option value="A"> A </option>
						<option value="B"> B </option>
						<option value="C"> C </option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value=""> Pilih Jurusan </option>
						<option value="Ilmu Komputer"> Ilmu Komputer </option>
						<option value="Teknologi Informasi"> Teknologi Informasi </option>
					</select>
				</td></tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<input type="reset" name="clear" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
 
</body>
</html>