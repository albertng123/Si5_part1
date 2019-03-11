<?php
	include "koneksi.php";
 
	$idh = $_GET["hapus_id"];
 
	// query sql
	$sql = "DELETE FROM mahasiswa WHERE id_mhs='$idh'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
	// mengalihkan halaman kembali ke index.php
		header("location:index.php");
?>