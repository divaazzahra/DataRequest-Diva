<?php
include 'koneksi.php';
$_SESSION['department'] = $row['department'];
session_start();
$id=$_POST['id'];
$nama_lengkap=$_POST['nama_lengkap'];
$bagian=$_POST['bagian'];
$department=$_SESSION['department'];
$shift=$_POST['shift'];
$tanggal=$_POST['tanggal'];
$disetujui=$_POST['disetujui'];


mysqli_query($koneksi, "UPDATE formulir SET nama_lengkap='$nama_lengkap',bagian='$bagian', department='$department', shift='$shift', tanggal='$tanggal', disetujui='$disetujui' WHERE id='$id'");
 
header("location:tambah.php");
  ?>