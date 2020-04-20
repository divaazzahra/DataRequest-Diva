<?php
include 'koneksi.php';
$id=$_GET['id'];
$disetujui=$_POST['disetujui'];


mysqli_query($koneksi, "UPDATE formulir SET disetujui = 'Tolak' WHERE id='$id'");
 
header("location:home1.php");
  ?>