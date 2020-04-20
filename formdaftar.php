<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$tipe = $_POST['tipe'];

if (empty($nama))
	{
		echo "<script>alert('Nama belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}else 
		if(empty($username))
		{
				echo "<script>alert('Username belum diisi')</script>";
				echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
			}else 
				if (empty($password))
				{
						echo "<script>alert('Password belum diisi')</script>";
						echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
					}else 
						if (empty($department))
						{
								echo "<script>alert('department belum diisi')</script>";
								echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
							}else 
								if (empty($tipe))
								{
										echo "<script>alert('Tipe belum diisi')</script>";
										echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
									}else{
											$daftar = mysqli_query($koneksi, "INSERT INTO login (nama,username,password,department,tipe) values ('$nama','$username','$password','$department','$tipe')");
if ($daftar)
{
		echo "<script>alert('Berhasil Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}else{
		echo "<script>alert('Gagal Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
}

?>
