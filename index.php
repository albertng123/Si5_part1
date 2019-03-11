<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<h3>DATA MAHASISWA</h3>
	<a href="tambah-data.php">+TAMBAH</a>
	<table	text="times new roman" border="1">
		<thead bgcolor="#6495ED" color="#FFFAF0">
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>KOM</th>
			<th>Jurusan</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
 
				// query sql untuk mengambil data pada tabel
				$sql = "SELECT * FROM mahasiswa ORDER BY id_mhs DESC";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
				$no = 1; // no. urut
 
				while($data = mysqli_fetch_array($query)){
					
					$id = $data["id_mhs"];
					$nim = $data["nim"];
					$nama = $data["nama"];
					$kom = $data["kom"];
					$jurusan = $data["jurusan"];
 
					echo "<tr>
							<td>$no</td>
							<td>$nim</td>
							<td>$nama</td>
							<td>$kom</td>
							<td>$jurusan</td>
							<td>
								<a href='rubah-data.php?rubah_id=$id'>Edit</a>
								<a href='hapus-data.php?hapus_id=$id'>Delete</a>
							</td>
						  </tr>";
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
 
</body>
</html>