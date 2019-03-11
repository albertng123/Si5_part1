<!DOCTYPE html>
<html>
<head>
	<title>Rubah Data</title>
</head>
<body>
	<h3>Rubah Data</h3>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<?php
		include "koneksi.php";
 
		$ide = $_GET["rubah_id"];
 
		$sql = "SELECT * FROM mahasiswa WHERE id_mhs='$ide'";
		$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);
		}
	?>
 
	<form action="update.php" method="POST">
 
		<input type="hidden" name="id" value="<?php echo $data["id_mhs"];?>">
 
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $data["nim"];?>"></td>
			</tr>
			
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data["nama"];?>"></td>
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
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="Edit">
				</td>
			</tr>
		</table>
	</form>
 
</body>
</html>