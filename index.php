<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<h3>DATA MAHASISWA</h3>
	<a href="tambah-data.php">+TAMBAH</a>
	<table class="table table-hover table-dark"">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama Lengkap</th>
	  <th scope="col">Kom</th>
      <th scope="col">Jurusan</th>
	  <th scope="col" colspan="2">Aksi</th>
	</tr>
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
							<th scope='row'>$no</th>
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