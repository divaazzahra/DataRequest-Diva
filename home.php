<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link rel="shortcut icon" href="icon.jpg"/>
    <link href="daftar-style.css" rel="stylesheet" type="text/css" />
    <style>
	   @charset "utf-8";
      body {
        background:url(Desktop-Wallpaper2.jpg)repeat;
        background-size: cover;
        margin:0;
        padding:0;
        background-position:top;
      }
      h4 {
        font-family: Arial;
        font-size: 30px;
        position: fixed;
        top: 10px;
        color: white;
      }
      #wrapper {
        margin:0 auto;
        width:650px;
        min-height:350px;
        background:#C0C0C0;
        box-shadow:2px 2px 8px #000;
        opacity:0.2;
        filter:alpha(opacity=100);
        position:fixed;
        top:100px;
        left:400px;
        border-left:4px solid #000;
        border-right:3px solid #000;
        border-top:5px solid #000;
        border-bottom:8px solid #000;
      }
      p {
        font-family:"Arial", cursive;
        font-size:30px;
        color:#fff;
        position:fixed;
        top:90px;
        left:680px;
        line-height:70px;
      }
      .btn_a_style{		
	      text-decoration: none;
        font-family: sans-serif;
        font-size: 13px;
        border: 1px solid #cecece;
        border-radius:5px;
        padding: 10px 30px;
        color: white;
      }
      .btn_skyblue{
  	    background-color: #006faa;
      }
      .kotak {
        position:fixed;
        top:200px;
        left:588px;
      }
      .button {
        padding:3px;
        height:30px;
        width:250px;
        text-align:center;
        font-family:"Arial", cursive;
      }
      .Login {
        position:fixed;
        top:370px;
        left:588px;
        padding:3px;
        height:30px;
        width:260px;
        background:#006faa;
        color:#fff;
        cursor:pointer;
      }
      .Login:hover {
        background:#5C5C5C;
        color:#fff;
      }
      h3 {
        position:fixed;
        top:365px;
        left:615px;
        font-family:"Arial", cursive;
        font-size:13px;
        color:#fff;
      } 
      h2{
        right: 700px;
      }
    </style>
  </head>
<body>
  <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FORM REQUEST KARYAWAN SHIFT</h4>
	<h2><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><font color="blue"><center>
    <?php 
	   if(isset($_GET['pesan'])){
		    if($_GET['pesan'] == "gagal"){
			   echo "Login gagal! username dan password salah!";
		    }else if($_GET['pesan'] == "logout"){
			   echo "Anda telah berhasil logout";
		    }else if($_GET['pesan'] == "belum_login"){
			   echo "Anda harus login untuk mengakses halaman admin";
		    }
	   }
	?>
  </h2></center></font>

<div id="wrapper">
</div>
  <center><p><b>Login </b></p></center>
<div class="kotak">
    <form name="username" class="username" action="login_check.php" method="post" >
      <input type="text" name="username" class="button" placeholder="Nama Pengguna" />
      <div style="margin-top:20px;"></div>
      <input type="password" name="password" class="button" placeholder="Kata Sandi" id="pass">
      <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open" style="font-size:15px;color:white"></i></span>
      <br/><br/>
      <select name="tipe" class="button" placeholder="Tipe" required>
        <option value="">~Pilih User~</option>
        <option value="User">Requester</option>
        <option value="Atasan">Atasan</option>
        <option value="Admin">Admin</option>
      </select><br>		
      <input type="submit" name="Login" class="Login" value="Login" />
        <br/><br/><br/><br/><br/><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td colspan="2" width="100"></a></td></center>
    </form>
</div>
      <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close" style="font-size:15px;color:white"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open" style="font-size:15px;color:white"></i>';
            }
         }
      </script>
</body>
</html> 