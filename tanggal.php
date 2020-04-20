 <head>
 	
	<style>
		.btn_a_style{
  			text-decoration: none;
  			font-family: sans-serif;
  			font-size: 13px;
  			border: 1px solid #cecece;
  			border-radius:5px;
  			padding:5px 10px;
  			color: white;
  		}
		.btn_skyblue{
  			background-color: #4682B4;
		}
		.btn_green{				
  			background-color: #3CB371; 
		}
		.btn_danger{
 	 		background-color: #FF0000;
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
    		font-family: Times New Roman;
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
  		
	</header>
<div class="content">
<?php
	$output_pencarian = "";
	$tanggal_awal = isset($_POST["tanggal_awal"]) ? $_POST["tanggal_awal"] : "";
	$tanggal_akhir = isset($_POST["tanggal_akhir"]) ? $_POST["tanggal_akhir"] : "";
	$no=0;
if (isset($_POST["export"]) || isset($_POST["pencarian"])) {
	include 'koneksi.php';
	$query=mysqli_query($koneksi, "SELECT
						   a.nama_lengkap,
						   a.department,
					       a.shift,
					       a.tanggal
						FROM `formulir`as a where tanggal between '$tanggal_awal' and '$tanggal_akhir'ORDER BY nama_lengkap ASC"); 
	$count = mysqli_num_rows($query);
	$output_pencarian .= '
			<table width="900" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr bgcolor="#00BFFF">
					<th width="15%" height="40">Nama Lengkap</td>&nbsp;
					<th width="30%">Department</td>&nbsp;
					<th width="4%">Shift</td>&nbsp;
					<th width="4%">Tanggal</td>&nbsp;
				</tr>';
			//menampilkan pencarian data
				while($row=mysqli_fetch_array($query)){
					$output_pencarian .= '
					<tr>
						<td align="center" height="30">' . $row['nama_lengkap'] . '</td>
						<td align="center">' . $row['department'] . '</td>
						<td align="center">' . $row['shift'] . '</td>
						<td align="center">' . $row['tanggal'] . '</td>
					</tr>';
				}

				$output_pencarian .= '
					<tr>
						<td colspan="4" align="center"> ';
						//jika pencarian data tidak ditemukan
						if(mysqli_num_rows($query)==0){
							echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
						}
				$output_pencarian .= '</td>
					</tr>
			</table>';

}
if (isset($_POST["export"])) {
	if(empty($tanggal_awal) || empty($tanggal_akhir)){
		//jika data tanggal kosong
		?>
		<script language="JavaScript">
			alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
			document.location='tanggal.php';
		
		</script>
		<?php
	}else{
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Makan Siang / Malam.xls");
		echo $output_pencarian;
	}

	return;
}else{
?>
<html>
	<body>
		<form action="tanggal.php" method="post" name="postform">
			<p align="center"><font color="Black" size="4"><b>PENCARIAN DATA BERDASARKAN PERIODE TANGGAL</b></font></p><br /><br/>
				<table border="0">
					<tr>
						<td width="125"><b>Dari Tanggal</b></td>
						<td colspan="2" width="250">: 
						<input type="text" name="tanggal_awal" size="16" value="<?php echo $tanggal_awal?>" />
						<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.png" alt="" name="popcal" width="30" height="29" border="0" align="absmiddle" id="popcal" /></a>				
						</td>
						<td width="150"><b>Sampai Tanggal</b></td>
						<td colspan="2" width="250">: <input type="text" name="tanggal_akhir" size="16" value="<?php echo $tanggal_akhir?>" />
						<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.png" alt="" name="popcal" width="30" height="29" border="0" align="absmiddle" id="popcal" /></a>				
						</td>
						<td colspan="2" width="100"><input type="submit" value="Pencarian Data" name="pencarian"/class="btn_a_style btn_skyblue"></td>
						<td colspan="2" width="190"><input type="submit" value="Export" name="export"/class="btn_a_style btn_green"></td>
					</tr>
				</table>
					<td colspan="2" width="50"><input type="submit" value="Reset" name="reset"/class="btn_a_style btn_danger"></td>			
		</form><br />
			
			<!-- <p><a href="export.php"><button>Export Data ke Excel</button></a></p> -->
			<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['pencarian'])){
				//menangkap nilai form
				$tanggal_awal=$_POST['tanggal_awal'];
				$tanggal_akhir=$_POST['tanggal_akhir'];
				if(empty($tanggal_awal) || empty($tanggal_akhir)){
					//jika data tanggal kosong
					?>
					<script language="JavaScript">
						alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
						document.location='tanggal.php';
					</script>
					<?php
				}else{
					?>

					<i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
					<br/>
					<br/>
					<b><font color="red">
						<?php echo "Jumlah data : $count <br/>";?></font></b>
				
					<?php
					echo $output_pencarian;
				}
				?>
			
			<?php
			}
			else{
				unset($_POST['pencarian']);
			}
			?>

			<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
			<br/>
			<a href="tambah.php" class="btn_a_style btn_yellow">Kembali</a>
</div>
	</body>
</html>
</body>		
</html>
<?php
}
?>