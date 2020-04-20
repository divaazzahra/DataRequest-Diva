<!DOCTYPE html>
<?php function fetch_data(){

		$output_pencarian = "";

		$shift = isset($_POST["shift"]) ? $_POST["shift"] : "";
		$department = isset($_POST["department"]) ? $_POST["department"] : "";
		$tanggal_awal = isset($_POST["tanggal_awal"]) ? $_POST["tanggal_awal"] : "";
		$tanggal_akhir = isset($_POST["tanggal_akhir"]) ? $_POST["tanggal_akhir"] : "";
		$no=0;

    $output='';
   			$conn= mysqli_connect("localhost", "req", "","request");
    		$query="SELECT a.nama_lengkap,
						   a.department, 
						   a.shift,
						   a.tanggal,
						   a.disetujui 
                    FROM `formulir`as a where shift='$shift' and department = '$department' and '$tanggal_awal' and '$tanggal_akhir'"; 
  			$result= mysqli_query ($conn, $query);
	           while($row= mysqli_fetch_array($result)){
				$output_pencarian .= '
				 <tr>
						<td align="center" height="30">' . $row['nama_lengkap'] . '</td>
						<td align="center">' . $row['department'] . '</td>
						<td align="center">' . $row['shift'] . '</td>
						<td align="center">' . $row['tanggal'] . '</td>
						<td align="center">' . $row['disetujui'] . '</td>
					</tr>';
					}
    return $output_pencarian;
}
if (isset($_POST["generate_pdf"])) {
    require_once('tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf ->SetCreator (PDF_CREATOR);
    $obj_pdf ->SetTitle ("Data Request Makan Siang/Malam");
    $obj_pdf ->SetHeaderData ('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf ->SetHeaderFont (Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf ->SetFooterFont (Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf ->SetDefaultMonospacedFont('helvetica');
    $obj_pdf ->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf ->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf ->SetPrintHeader(false);
    $obj_pdf ->SetPrintFooter(false);
    $obj_pdf ->SetAutoPageBreak(TRUE, 10);
    $obj_pdf ->SetFont('helvetica', '', 11);
    $obj_pdf ->AddPage();
    $content= '';
    $content .= '
      <h4 align="center"> DATA REQUEST MAKAN SIANG/MALAM</h4> <br/>
      <table border="1" cellspacing="0" cellpadding="3">
      <tr>
            <th width= "30%">nama_lengkap</th>
            <th width= "30%">department</th>
            <th width= "10%">shift</th>
            <th width= "15%">tanggal</th>
            <th width= "15%">disetujui</th>
     </tr>
     </table>
     ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf ->writeHTML($content);
    $obj_pdf ->Output('file.pdf', 'I');
}
?>
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
    padding: 10px 20px;
    color: white;
  }
  .btn_skyblue{
    background-color: #4682B4;
  }
</style>
</head>
<body>
        <br/>
        <div class="container">
            <h4 align="center">DATA REQUEST MAKAN SIANG/MALAM</h4>
            <div class="table-responsive">
                <div class="col-md-12" align="right">
                    <form method="post">
                        <input type="submit" name="generate_pdf" class="btn_a_style btn_skyblue" value="Generate PDF"/>
                    </form>
                </div>
                <br/>
                <br/>
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Nama Lengkap</th>
                        <th width="30%">Department</th>
                        <th width="10%">Shift</th>
                        <th width="15%">Tanggal</th>
                        <th width="15%">Disetujui</th>
                    </tr>
                    <?php

                    echo fetch_data();
					?>
				</table>
            </div>
        </div>
</body>
</html>