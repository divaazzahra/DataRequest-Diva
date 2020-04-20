<?php  
include 'koneksi.php';

mysqli_query($koneksi, "DELETE FROM formulir")or die(mysqli_error());
 
header("location:tambah.php");
?>