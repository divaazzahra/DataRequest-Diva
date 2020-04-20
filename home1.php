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
	      background-color: #1255a1;
      }
      .btn_danger{
        background-color: #DC143C;
      }
      th, td {
        border-bottom: 1px solid #ddd;
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
    <label class="fa fa-bars menu-bar" for="tag-menu"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REQUEST PERMOHONAN MAKAN SIANG / MALAM</h4>
      <?php session_start();?>
      <?php echo $_SESSION["username"]; ?></label>
    <div class="jw-drawer">
      <nav>
        <ul>
          <li><a href="home1.php"><i class="fa fa-drivers-license-o"></i>&nbsp;&nbsp;Data Request</a></li>
          <li><a href="reset_atasan.php"><i class="fa fa-edit"></i>&nbsp;Merubah Kata Sandi</a></li>
          <li><a href="logout.php" onclick="return confirm('apakah anda yakin untuk logout')"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li> 
          </li>
        </ul>
       </nav>
    </div>
  </header>
<center><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Halaman Atasan</b></center>

<div class="content">
  <?php
      $department= $_SESSION["department"];  
    ?>
</div>
<center>
  <H3>DATA REQUEST MAKAN SIANG / MALAM</H3>
  <table>
	<br/>
	  <tr bgcolor='white' align='center'>
			<th><h4>Nama Lengkap</h4></th>
			<th><h4>Posisi</h4></th>
			<th><h4>Department</h4></th>
			<th><h4>&nbsp;Shift</h4></th>
			<th><h4>Tanggal</h4></th>
      <th><h4>Di Setujui</h4></th>
      <th><h4>Opsi</h4></th>
		</tr>
		<?php 
		include 'koneksi.php';
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM formulir WHERE department='$department'ORDER BY nama_lengkap ASC")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><center><?php echo $data['nama_lengkap']; ?></center></td>
			<td><center><?php echo $data['bagian']; ?></center></td>
			<td><center><?php echo $data['department']; ?></center></td>
			<td><center><?php echo $data['shift']; ?></center></td>
			<td><center><?php echo $data['tanggal']; ?></center></td>
      <td><center><?php echo $data['disetujui']; ?></center></td>
			<td><br/>
<center>
        <a href="setuju.php?id=<?php echo $data['id']; ?>"onclick="return confirm ('Apakah anda yakin ingin menyetujui permohonan ini')" > <i class="fa fa-check-circle" style="font-size:36px;"></i></a> |
        <a href="tolak.php?id=<?php echo $data['id']; ?>" onclick="return confirm('apakah anda yakin ingin menolak permohonan ini')"><i class="fa fa-close" style="font-size:36px"></i></a> </center>   <br/>    
      </td>
		</tr>
		<?php } ?>
	</table>
    <br/><center><a href="approve.php"onclick="return confirm ('Mohon di periksa kembali, Apakah anda yakin ingin menyetujui semua permohonan ini')" > <button style="font-size:20px;color:blue">Setujui Semua <i class="fa fa-check-circle"></i></button></a></center>
</body>
</html>