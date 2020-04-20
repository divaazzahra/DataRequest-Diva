<?php
	include 'koneksi.php';
	if (isset($_POST['btnReset'])) 
	{
		session_start();
		$id=$_POST['id'];
		$username = $_POST ['username'];
		$cek = mysqli_query($koneksi, "SELECT username FROM login WHERE username = '$username' AND id='$id' ");
		if (mysqli_num_rows($cek) == 1 ) 
		{
			$password   = $_POST['password'];
			if($password != $password)
			{
				?>
					<script>
						alert("Inputan Kata Sandi tidak sama");
						window.location.href = 'reset_admin.php';
					</script>
				<?php
			}else
			{
				$pwd = ($password);
				$sql = mysqli_query($koneksi, "UPDATE login SET password = '$pwd' WHERE username = '$username' AND id='$id' ");
				if ($sql) 
				{
					?>
						<script>
							alert("Kata Sandi telah di perbarui");
							window.location.href = 'form_reset.php';
						</script>
					<?php
				}else
				{
					?>
						<script>
							alert("Kata Sandi gagal diperbaharui");
							window.location.href = 'reset_admin.php';
						</script>
					<?php
				}
			}
		}else
		{
			?>
				<script>
					alert("Pastikan Nama Pengguna yang anda masukan benar!");
					window.location.href = 'reset_admin.php';
				</script>
			<?php
		}
	}
?>