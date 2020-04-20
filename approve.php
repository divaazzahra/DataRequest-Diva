<?php
include 'koneksi.php';
session_start();
$disetujui = $_SESSION ['disetujui'];
$disetujui=$_POST['disetujui'];


mysqli_query($koneksi, "UPDATE formulir SET disetujui = 'Setuju'");
 
header("location:home1.php");
  ?>