<?php  
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi, "DELETE FROM login WHERE id='$id'")or die(mysqli_error());
 
header("location:form_reset.php");
?>