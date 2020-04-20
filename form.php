<?php
include 'koneksi.php';
$_SESSION['department'] = $row['department'];
session_start();

$id=$_POST['id'];
$nama_lengkap=$_POST ['nama_lengkap'];
$bagian=$_POST['bagian'];
$department=$_SESSION['department'];
$shift=$_POST['shift'];
$tanggal=$_POST['tanggal'];
$disetujui=$_POST['disetujui'];

mysqli_query($koneksi, "INSERT INTO formulir VALUES('', '$nama_lengkap','$bagian','$department','$shift' ,'$tanggal', '$disetujui') ");
 
header("location:home2.php");
?>