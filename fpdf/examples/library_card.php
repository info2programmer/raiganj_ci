<?php
require("../../../includes/connection.php");
$id_student=mysql_fetch_array(mysql_query("select * from `student` where `id`='".$_REQUEST['id']."'"));
$FetchMerit=mysql_fetch_array(mysql_query("select * from merit_list where `form_no`='".$id_student['form_no']."'"));
$sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `table_name`='".$FetchMerit['stream']."'"));
$FetchMerit['id'];

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];

$html='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>Transfer Certificate</title>
</head>

<body>
<table width="290" align="center" height="350" cellspacing="0" cellpadding="0" style="border-bottom:1px thin #06C; border-top:1px thin #06C; border-right:1px thin #06C; border-left:1px thin #06C; border-radius:5px;">
<tr>
    <td height="50" colspan="2" align="center" valign="middle" style="font-size:18px; font-weight:bold; color:#FFF; background-color:#1D84CF; border-bottom:1px solid #FFF;">'.$s['name'].'<br /><span style="font-size:12px;">LIBRARY CARD</span></td>
</tr>
<tr>
<td height="150" colspan="2" align="center">
 <img src="../../../../admission/photo/'.$id_student['photo'].'" height="140" width="135" style="border:2px thin #069;" />
</td></tr>
<tr>
    <td height="15" colspan="2" align="center" style="font-size:14px; font-weight:bold;">'.$id_student['name'].'</td>
  </tr>
  <tr>
    <td height="15" colspan="2" align="center">ID NO: '.$id_student['id_no'].'</td>
  </tr>
  <tr>
    <td height="15" colspan="2" align="center">Blood Grp: '.$id_student['blood_group'].'</td>
  </tr>
  <tr>
    <td height="15" colspan="2" align="center">DOB: '.$id_student['dob'].'</td>
  </tr>
  <tr>
    <td height="15" colspan="2" align="center">CLASS: '.$sel_stream['name']." ".$former_student['sub_honours'].'</td>
  </tr>
  <tr>
    <td height="15" colspan="2" align="center"></td>
  </tr>
  <tr style="font-size:12px; font-weight:600; color:#FFF; background-color:#1D84CF; border-bottom:1px solid #FFF;">
    <td width="64" height="50"><img src="../../../institution/upload_logo/'.$image.'" height="50" width="61" /></td>
    <td width="226">'.$s['address'].'<br/>Tel: '.$s['phone'].' Email: '.$s['email'].'</td>
  </tr>
</table>
</body>
</html>';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

 require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A6','fr');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>