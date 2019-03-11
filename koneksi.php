<?php 
 
	$server = "localhost";//nama server
	$user = "root"; //username server
	$pass = "";  //password
	$dbase = "mahasiswa"; // database yang dipakai
 
	//Membuat koneksi
	$koneksi = mysqli_connect($server, $user, $pass, $dbase);
 
?>