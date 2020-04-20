<?php

$host = "localhost";
$user = "req";
$pass = "";
$db = "request";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error()){
	echo "koneksi database gagal :". mysqli_connect_error (); 
}
?>