<!DOCTYPE html>
<html>
<head>
  	<style>
		.btn_a_style{		
		  text-decoration: none;
    	  font-family: sans-serif;
    	  font-size: 13px;
    	  border: 1px solid #cecece;
    	  border-radius:5px;
    	  padding: 5px 10px;
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
		@media print{
			.td, .btn_a_style, .fa, .li, .dropdown, .isi-dropdown {
				display: none;
			}
			.content{
				position: relative;
			}
		}
	</style>
</head>
<body>
	
<div class="content">
<?php 

	$output_pencarian = "";

	$shift = isset($_POST["shift"]) ? $_POST["shift"] : "";
	$department = isset($_POST["department"]) ? $_POST["department"] : "";
	$tanggal_awal = isset($_POST["tanggal_awal"]) ? $_POST["tanggal_awal"] : "";
	$tanggal_akhir = isset($_POST["tanggal_akhir"]) ? $_POST["tanggal_akhir"] : "";
	$no=0;

	if (isset($_POST["export"]) || isset($_POST["pencarian"])) {
		include'koneksi.php';
	

		$query=mysqli_query($koneksi, "SELECT a.nama_lengkap,
						   		   a.department, 
						   		   a.shift,
						  		   a.tanggal,
						  		   a.disetujui
							FROM `formulir`as a where shift='$shift' and department = '$department' and '$tanggal_awal' and '$tanggal_akhir' ORDER BY nama_lengkap ASC"); 
		$count = mysqli_num_rows($query);

			$output_pencarian .= 
				'<table width="900" border="1" align="center" cellpadding="0" cellspacing="0">
					<tr bgcolor="#00BFFF">
						<th width="15%" height="40">Nama Lengkap</td>&nbsp;
						<th width="30%">Department</td>&nbsp;
						<th width="4%">Shift</td>&nbsp;
						<th width="4%">Tanggal</td>&nbsp;
						<th width="4%">Disetujui</td>&nbsp;
					</tr>';
			//menampilkan pencarian data
				while($row=mysqli_fetch_array($query)){
					$output_pencarian .= '
						<tr>
							<td align="center" height="30">' . $row['nama_lengkap'] . '</td>
							<td align="center">' . $row['department'] . '</td>
							<td align="center">' . $row['shift'] . '</td>
							<td align="center">' . $row['tanggal'] . '</td>
							<td align="center">' . $row['disetujui'] . '</td>
						</tr>';
					}
					$output_pencarian .= 
						'<tr>
							<td colspan="4" align="center"> ';
						//jika pencarian data tidak ditemukan
							if(mysqli_num_rows($query)==0){
								echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
							}
					$output_pencarian .= 
							'</td>
					</tr>
				</table>';
			}
	if (isset($_POST["export"])) {
		if(empty($shift) || empty($department) || empty($tanggal_awal) || empty($tanggal_akhir)){
		//jika data tanggal kosong
?>
			<script language="JavaScript">
				alert('Harap di Isi!');
				document.location='search.php';
			</script>
		<?php
	}else{

		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=data permohonan makan siang / malam.xls");
		echo $output_pencarian;
	
	}
	return;
	}else{
		?>
	<html>
		<head>
			
		</head>
			<body>
				<form action="search.php" method="post" name="postform">
					<font color="Black" size="4"><center><b>PENCARIAN DATA MAKAN BERDASARKAN DEPARTMENT DAN SHIFT</b></center></font><br/>
						<table border="0" class="td">
							<tr>
								<td width="50"><b>Shift</b></td>
								<td colspan="2" width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
									<select name="shift">
										<option value="<?php echo $shift?>"/>~Pilih Shift~</option>
   										<option value="1">1</option>
   										<option value="2">2</option>
   										<option value="3">3</option>
   										<option value="Non Shift">Non Shift</option>
					 	 			</select>
					 	 		</td> 
						</table>
						<br/>
						<table class="td">
							<td width="50"><b>Departement</b></td>
								<td colspan="2" width="400">&nbsp;&nbsp;&nbsp;: 
									<select name="department">
										<option value="<?php echo $department?>"/>~Pilih Department~</option>
   										<option value="Produksi Solid">Produksi Solid</option>
              							<option value="Produksi Liquid">Produksi Liquid</option>
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
							</td>
						</table>
						<br/>
						<table class="td">
								</td>
								<td width="50"><b>Tanggal</b></td>
								<td colspan="2" width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
									<input type="text" name="tanggal_awal" size="16" value="<?php echo $tanggal_awal?>" />
									<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.png" alt="" name="popcal" width="30" height="29" border="0" align="absmiddle" id="popcal" /></a>				
								</td>
									<td width="150"><b>Sampai Tanggal</b></td>
									<td colspan="2" width="400">: <input type="text" name="tanggal_akhir" size="16" value="<?php echo $tanggal_akhir?>" />
									<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.png" alt="" name="popcal" width="30" height="29" border="0" align="absmiddle" id="popcal" /></a>				</table>
								</td><br/>
									<td colspan="2" width="100"><input type="submit" value="Pencarian Data" name="pencarian"/class="btn_a_style btn_skyblue"></td>
									<td colspan="2" width="190"><input type="submit" value="Export" name="export"/class="btn_a_style btn_green"></td>
							</tr>
							<td colspan="2" width="50"><input type="submit" value="Reset" name="reset"/class="btn_a_style btn_danger"></td>	
				</form><br/>
			<!-- <p><a href="export.php"><button>Export Data ke Excel</button></a></p> -->
			<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['pencarian'])){
				//menangkap nilai form
				$shift=$_POST['shift'];
				$department=$_POST['department'];
				$tanggal_awal=$_POST['tanggal_awal'];
				$tanggal_akhir=$_POST['tanggal_akhir'];
				if(empty($shift) || empty($department) || empty($tanggal_awal) || empty($tanggal_akhir)){
					//jika data tanggal kosong
					?>
					<script language="JavaScript">
						alert('Harap di Isi!');
						document.location='search.php';
					</script>
					
					<?php
				}else{
					?>

					<i class="td"><b>Informasi : </b> Hasil pencarian data berdasarkan shift &nbsp;<b><?php echo $_POST['shift']?></b> dan <b><?php echo $_POST['department']?></b> dan <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
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

			<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe><br/>
				<a href="tambah.php" class="btn_a_style btn_yellow">Kembali</a>
		</div>
</body>
		
	</html>
<?php
}
  ?>