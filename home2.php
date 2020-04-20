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
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
      background-color: #006faa;
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
    <label class="fa fa-bars menu-bar" for="tag-menu"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REQUEST PERMOHONAN MAKAN SIANG / MALAM</h4>
      <?php session_start();?>
      <?php echo $_SESSION["username"]; ?></label>
  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="home2.php"><i class="fa fa-drivers-license-o"></i>&nbsp;&nbsp;Tambah Data</a></li>
        <li><a href="resett.php"><i class="fa fa-edit"></i>&nbsp; Merubah Kata Sandi</a></li>
         <li><a href="logout.php" onclick="return confirm('apakah anda yakin untuk logout')"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>   
        </li>
      </ul>
    </nav>
  </div>
</header>
<center><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Halaman Requester</b></center>
<div class="content"> 
</div>
<center>
  <h4><b>Tambah Data Request</b></h4>
<br/> 
  <form action="form.php" method="post">
	 <table width="500" height="300">
		<tr>
			<td> Nama Lengkap </td>
			<td> : &nbsp; <input type="text" name="nama_lengkap" ></td>
		</tr>
		<tr> 
			<td> Posisi </td>
			<td> : &nbsp; <input type="text" name="bagian"></td>
		</tr>
		<tr> 
			<td> Department </td>
			<td> : &nbsp;<?php echo $_SESSION["department"]; ?></td>
		</tr>
		<tr>
			<td> Shift </td>
			<td> : &nbsp; 
        <select name="shift" required>
				<option value="">Pilih Shift</option>
   			<option value="1">1</option>
   			<option value="2">2</option>
   			<option value="3">3</option>
   			<option value="Non Shift">Non Shift</option>
				</select></td>
		</tr>
		<tr>
			<td> Tanggal </td>
			<td> : &nbsp; <input type="date" name="tanggal"></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input type="submit" value="Kirim" class="btn_a_style btn_skyblue" onclick="return confirm('apakah anda yakin ingin menyimpan data ini')"></td>
		</tr>	
   </table>
  </form>
</center>
</div>
</body>
</html>