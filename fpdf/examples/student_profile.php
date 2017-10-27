<?php
require("../../../includes/connection.php");

$former_student=mysql_fetch_array(mysql_query("select * from `student` where `id`='".$_REQUEST['id']."'"));
$FetchMerit=mysql_fetch_array(mysql_query("select * from merit_list where `form_no`='".$former_student['form_no']."'"));
$sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `id`='".$former_student['stream_id']."'"));
$FetchMerit['id'];

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];

if($former_student['photo']==''){$img='default.gif';}else{$img=$former_student['photo'];}

$html='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.school_name {
font-size:18px;
font-weight:bold;
color:#990000;
}
.school_add {
font-size:16px;
font-weight:bold;
color:#000000;
padding-top:15px;
}
.transfer {
font-size:22px;
font-weight:bold;
color:#000000;
}
.table_border {
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
<table width="595" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="151" height="100" align="left" valign="top"><div style="float:left; width:125px; height:125px; border: 8px solid #EFEFEF;"><img src="../../../institution/upload_logo/'.$image.'" height="125" width="125" /></div></td>
    <td width="444" height="100" align="left" valign="middle"><div class="school_name">'.$s['name'].'</div>
    <div class="school_add">'.$s['address'].'</div>
    </td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center" valign="middle" style="border-bottom:solid #000 2px; border-top:solid #000 2px;" class="transfer">Profile</td>
  </tr>
   <tr>
    <td height="30" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="top">
    <table width="595" border="0" cellspacing="0" cellpadding="0" align="center" class="table_border">
	<tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col"><div style="float:left; width:125px; height:125px; border: 8px solid #EFEFEF;"><img src="../../../photo/'.$img.'" height="125" width="125" /></div></td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">Stream: '.$sel_stream['name'].'<br> Year: '.$former_student['year'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Name:</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['name'].'</td>
      </tr>
	   <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Father/Mother Name:</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$former_student['father_name'].' / '.$former_student['mother_name'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Admission no:</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['addmission_no'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Admission Date:</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$former_student['admission_date'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Date Of Birth</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['dob'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Last Attended Class:</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$sel_stream['name']." ".$former_student['sub_honours'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Blood Group:</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['blood_group'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Gender</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$former_student['sex'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Nationality:</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['nationality'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Category:</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$former_student['category'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="table_left_col">Present Address:</td>
        <td width="315" height="35" align="left" valign="middle" class="table_right_col">'.$former_student['present_address'].'</td>
      </tr>
      <tr>
        <td width="276" height="35" align="left" valign="middle" class="white_left_col">Permanet Address:</td>
        <td width="315" height="35" align="left" valign="middle" class="white_right_col">'.$former_student['permanent_address'].'</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
        <td colspan="2"> </td>
      </tr>
</table>

</body>
</html>';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>