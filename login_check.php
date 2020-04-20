<?php
	include 'mysqlconnect.php';

	session_start();

	// Check connection
	if (!$connect_db) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$tipe = $_POST['tipe'];

	if(empty($username)){
		echo "<script>alert('Username harus diisi')</script>";
		echo "<meta http-equiv='refresh' content='0 url=home.php'>";
	} elseif (empty($password)){
		echo "<script>alert('Password harus diisi')</script>";
		echo "<meta http-equiv='refresh' content='0 url=home.php'>";
	} else{
		$sql = "SELECT * FROM login 
				WHERE username   = '$username' 
		  	   	AND password 	 = '$password' 
		  	   	AND tipe 		 = '$tipe'
		  	   ";

		$result = mysqli_query($connect_db, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_array($result)) {
			//store query result to be used on another page
	        	$_SESSION['department'] = $row['department'];
	        	$_SESSION['username'] = $row['username'];
    		}
			if ($tipe=='Atasan') {
				echo "<script>alert('Login berhasil')</script>";
				echo "<meta http-equiv='refresh' content='0 url=home1.php'>";
			}else if ($tipe=='Admin') {
				echo "<script>alert('Login berhasil')</script>";
				echo "<meta http-equiv='refresh' content='0 url=tambah.php'>";
			}else{
				echo "<script>alert('Login berhasil')</script>";
				echo "<meta http-equiv='refresh' content='0 url=home2.php'>";
			}
		}else {
			echo "<script>alert('Data login tidak ditemukan!')</script>";
			echo "<meta http-equiv='refresh' content='0 url=home.php'>";
		}
	}
?>