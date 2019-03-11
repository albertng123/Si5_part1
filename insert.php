	<?php
	include "koneksi.php";
	//menangkap data dari form
	$kode = $_POST["nim"];
	$nm = $_POST["nama"];
	$km = $_POST["kom"];
	$jur = $_POST["jurusan"];
	
 	// query sql
	$sql = "INSERT INTO mahasiswa VALUES('','$kode','$nm','$km','$jur')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	// mengalihkan halaman kembali ke index.php
	header("location:index.php");
?>