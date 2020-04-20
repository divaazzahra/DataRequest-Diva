<?php  
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi, "DELETE FROM formulir WHERE id='$id'")or die(mysqli_error());
 
header("location:tambah.php");
?>