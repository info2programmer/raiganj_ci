<?php
require("../../../connection.php");


$admno=$_REQUEST['admno'];
$select_for_stu="select * from student where admissionno='$admno'";
$res_stu=mysql_query($select_for_stu) or die(mysql_error());
$former_student=mysql_fetch_array($res_stu);
$bid=$former_student['course'];

$sub=mysql_fetch_array(mysql_query("select * from  subjects where id='$bid'"));

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];





$html='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.school_name {font-family:Verdana, Geneva, sans-serif;
font-size:18px;
font-weight:bold;
color:#990000;
}
.school_add {font-family:Verdana;
font-size:16px;
font-weight:bold;
color:#000000;
padding-top:15px;
}
.transfer {font-family:Verdana, Geneva, sans-serif;
font-size:22px;
font-weight:bold;
color:#000000;
}
.table_border {font-family:Verdana, Geneva, sans-serif;
font-size:14px;
color:#333;
font-weight:bold;
letter-spacing:0.5px;
border:solid #999 2px;

}
.table_left_col {border-bottom:solid #999 2px;
border-right:solid #999 2px;
background:#EFEFEF;
padding-left:15px;
}
.table_right_col {border-bottom:solid #999 2px;
background:#EFEFEF;
padding-left:15px;
}
.white_left_col {border-bottom:solid #999 2px;
border-right:solid #999 2px;
background:#FFFFFF;
padding-left:15px;
}
.white_right_col {border-bottom:solid #999 2px;
background:#FFFFFF;
padding-left:15px;
}
</style>
<head>
<title>Transfer Certificate</title>
</head>

<body>
<table width="234" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><span style="float:left; width:125px; height:125px; border: 8px solid #EFEFEF;"><img src="../../configuration/upload_logo/'.$image.'" alt="" width="125" height="125" /></span></td>
    <td><span class="school_name"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

 require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>