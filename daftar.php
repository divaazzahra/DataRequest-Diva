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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
	    background-color: #1255a1;
    }
    .btn_danger{
      background-color: #DC143C;
    }
    th, td {
      border-bottom: 0px solid #ddd;
    }
    table {
      font-size: 17px;
    }
    thead {
      font-weight: bold;
      background-color: blue;
      color: white;
    }
    td {
      padding: 5px;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
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
    <label class="fa fa-bars menu-bar" for="tag-menu">
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REQUEST PERMOHONAN MAKAN SIANG / MALAM</h4>
    
    <?php session_start();?>

    <?php echo $_SESSION["username"]; ?>
    </label>
  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="tambah.php"><i class="fa fa-drivers-license-o"></i>&nbsp;&nbsp;Data Request</a></li>
        <li><a href="daftar.php"><i class="fa fa-edit"></i>&nbsp;&nbsp;Tambah User</a></li>
        <li><a href="form_reset.php"><i class="glyphicon glyphicon-refresh"></i>&nbsp; Merubah Kata Sandi</a></li>
        <li class="dropdown"><a href="#"><i class="fa fa-search"></i>&nbsp;&nbsp;Cari Data</a>
          <ul class="isi-dropdown">
            <li><a href="tanggal.php">Berdasarkan Tanggal</a></li>
            <li><a href="search.php">Berdasarkan Department</a></li>
          </ul>
        <li><a href="logout.php"onclick="return confirm('apakah anda yakin untuk logout')"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li> 
        </li>
      </ul>
    </nav>
  </div>
  </header>
<div class="content">

</div>
<body>
    <?php
	     include'koneksi.php';
	  ?>
<div id="wrapper">

</div>
<div class="kotak">
  <center><h4><b><u>TAMBAH USER</u></b></h4>
    <form method="post" action="formdaftar.php">
		  <table height ="30">
			   <tr>
				    <td><br/>Nama Lengkap</td>
				    <td><br/>:</td>
				    <td><br/><input type="text" name="nama"  placeholder="Masukan Nama Lengkap" ></td>
			   </tr>
			   <tr>
				    <td><br/>Nama Pengguna</td>
				    <td><br/>:</td>
				    <td><br/><input type="text" name="username"  placeholder="Masukkan Nama Pengguna"></td>
			   </tr>
			   <tr>
				    <td><br/>Kata Sandi</td>
				    <td><br/>:</td>
				    <td><br/><input type="password" name="password" placeholder="Masukkan Kata Sandi" id="pass">
            <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span></td>
			   </tr>
			   <tr>
				    <td><br/>Department</td>
				    <td><br/>:</td>
				    <td><br/>
              <select name="department" placeholder="Department" required>
                <option value="">Pilih Department</option>
                <option value="Produksi Solid">Produksi Solid</option>
                <option value="Liquid OBH">Liquid OBH</option>
                <option value="Liquid Ethical">Liquid Ethical</option>
                <option value="Liquid Scotts">Liquid Scott's</option>
                <option value="Produksi PHC">Produksi PHC</option>
                <option value="Quality">Quality</option>
                <option value="Enginering">Enginering</option>
                <option value="IT">IT</option>
                <option value="HCD">HCD</option>
                <option value="Validasi">Validasi</option>
                <option value="Utility">Utility</option>
                <option value="RND">RND</option>
                <option value="EHS">EHS</option>
                <option value="SCM">SCM</option>
              </select>
            </td>
			   </tr>
			   <tr>
				    <td><br/>Tipe</td>
				    <td><br/>:</td>
				    <td><br/>
              <select name="tipe"  placeholder="Tipe" required>
                <option value="">~Pilih User~</option>
                <option value="User">Requester</option>
                <option value="Atasan">Atasan</option>
                <option value="Admin">Admin</option>
              </select>	
            </td>
				 </tr>
		   </table>
		      <br/>
            <input type="submit" value="Daftar" class ="btn_a_style btn_green" onclick="return confirm('apakah anda sudah yakin dengan datanya?')">
	   </form>
  </center>
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
      </script>
</body>
</html>