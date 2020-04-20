<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Tutorial cara membuat sliding menu dengan CSS dan HTML | Drawer menu atau biasa dikenal dengan menu tersembunyi dengan hamburger menu"/>
  <meta name="keywords" content="jurnalweb. jurnal web indonesia, sliding menu, css, sliding menu, slide menu, hamburger menu, css menu"/>
    <link rel="shortcut icon" href="icon.jpg"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .kotak {
  color: #000000;
  padding: 7px;
  margin: 10px;
  box-shadow: 0px 0px 3px #000000;
}
.bulat {
  border-radius: 10px;
}
.btn_a_style{		
	text-decoration: none;
    font-family: sans-serif;
    font-size: 13px;
    border: 1px solid #cecece;
    border-radius:5px;
    padding: 10px 20px;
    color: white;
  }
  .btn_skyblue{
  	background-color: #4682B4;
  }
.btn_green{
	background-color: #3CB371;
}
.btn_yellow{
  background-color: #FFA500;
}
li.dropdown {
    display: inline-block;
  }

  .dropdown:hover .isi-dropdown {
    display: block;
  }

  .isi-dropdown a:hover {
    color: #fff !important;
  }

  .isi-dropdown {
    position: absolute;
    display: none;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    background-color: #4682B4;
    font-family: Arial;
  }

  .isi-dropdown a {
    color: #3c3c3c !important;
  }

  .isi-dropdown a:hover {
    color: #232323 !important;
    background: #f3f3f3 !important;
  }
  h4{
    font-family: Arial;
  }

	</style>
</head>
<body>
<header>
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REQUEST PERMOHONAN MAKAN SIANG / MALAM</h4></label>
  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="tambah.php"><i class="fa fa-drivers-license-o"></i>&nbsp;&nbsp;Data</a></li>
        <li><a href="daftar.php"><i class="fa fa-edit"></i>&nbsp;&nbsp;Tambah User</a></li>
        <li><a href="form_reset.php"><i class="glyphicon glyphicon-refresh"></i>Merubah Kata Sandi</a></li>
       <li class="dropdown"><a href="#"><i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data</a>
        <ul class="isi-dropdown">
          <li><a href="tanggal.php">Berdasarkan Tanggal</a></li>
          <li><a href="search.php">Berdasarkan Department</a></li>
        </ul>
        <li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li> 
    </li>
      </ul>
    </nav>
  </div>
</header>

<div class="content">
	</div>
  <?php
  session_start();
  ?>
	<center>
<h3> Atur Ulang Kata Sandi </h3>
<br/>
<?php 
	include "koneksi.php";
	$id=$_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM login WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="proses_admin.php" method="post">		
		<table>
      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
			<tr>
				<td>Nama Pengguna</td>
          <td>: &nbsp; <input type="text" name="username" value="<?php echo $data["username"]; ?>"></td>    			
			</tr>	
			<tr>
				<td><br/>Kata Sandi Lama</td>
				<td> &nbsp;<br/> :&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="<?php echo $data["password"]; ?>" required="" id="passs">
        <span id="mybuttonn" onclick="rubah()"><i class="glyphicon glyphicon-eye-open"></i></span>
        </td>			
			</tr>
			<tr>
				<td><br/>Kata Sandi Baru&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><br/> :&nbsp;&nbsp;&nbsp;<input type="password" name="password" required="" id="pass">
        <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span></td>
			</tr>	

			<tr>
				<td></td>
				<td><br/><input type="submit" name="btnReset" value="Atur Ulang" class="btn_a_style btn_skyblue"onclick="return confirm ('Apakah anda yakin ingin mengubah kata sandi ini?')"></td>					
			</tr>				
		</table>
	</form></center>
<br/>
	<?php } ?>
</div>
<script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
         }
           function rubah()
         {
            var x = document.getElementById('passs').type;
 
            if (x == 'password')
            {
               document.getElementById('passs').type = 'text';
               document.getElementById('mybuttonn').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            }
            else
            {
               document.getElementById('passs').type = 'password';
               document.getElementById('mybuttonn').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
         }
      </script>
</body>
</html>