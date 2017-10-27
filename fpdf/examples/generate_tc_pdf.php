<?php
require("../../include/connection.php");
$admno=$_REQUEST['admno'];
$year=$_REQUEST['year'];

if($year =="1st"){
$former_student=mysql_fetch_array(mysql_query("select * from admission_erp where id='$admno'"));
}
else{
$former_student=mysql_fetch_array(mysql_query("select * from student_dtl where id='$admno'"));
}
// $former_student=mysql_fetch_array(mysql_query("select * from `student` where `id`='".$_REQUEST['id']."'"));
$FetchMerit=mysql_fetch_array(mysql_query("select * from merit_list where `form_no`='".$former_student['form_no']."'"));
$sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `table_name`='".$FetchMerit['stream']."'"));
$FetchMerit['id'];

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);


if($year=="1st"){
  $father=$former_student['father_mother_name'];
  $pin=$former_student['block'];
  $phone=$former_student['present_ph'];
  $confirm_date =$former_student['today'];
}
else{
  $father=$former_student['father_name'];
  $pin=$former_student['pin'];
  $phone=$former_student['phone'];
  $confirm_date =$former_student['confirm_date'];
}

$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Transfer Certificate</title>
<style>
.transfer
{
	width:595px;
	height:842px;
	margin:0px auto;
	border:0px solid #000;
	font-family:Arial, Helvetica, sans-serif;
}
.transfer h1
{
	width:100%;
	font-family:Times, serif;
	font-size:46px;
	text-align:center;
	margin:0px 0px;
}
.transfer p
{
	width:100%;
	font-size:15px;
	text-align:left;
	line-height:22px;
	margin:3px 0px;
}
.transfer p span
{
	text-decoration:underline;
}
.atable tr td p
{
	font-size:13px;
	margin:0px;
	padding:0px;
	line-height:17px !important;
	}
	.left_r
	{
		float:left;

	}
	.left_r p
	{
		margin:0px 0px 0px 0px;
	}
	.left_r h6
	{
		margin:10px 0px 0px 0px;
	}
	.footer
	{
		width:595;
		float:left;
		margin-top:25px;

	}
	.signature
	{
		float:right;

	}
	
</style>
</head>

<body>

<div class="transfer">
	<h1 align="center"><u>TRANSFER CERTIFICATE</u></h1>
    <p>Ref No:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
    <p>Certified that <u>&nbsp;&nbsp;'.$former_student['name'].'&nbsp;&nbsp;</u> daughter of <u>&nbsp;&nbsp;'.$father.'&nbsp;&nbsp;</u> an in inhabitant of <u>&nbsp;&nbsp;'.$former_student['present_address'].'&nbsp;&nbsp;</u> Pin <u>&nbsp;&nbsp;'.$pin.'&nbsp;&nbsp;</u> Ph. No <u>&nbsp;&nbsp;'.$phone.'&nbsp;&nbsp;</u> <br />
    has been a student in the class <u>&nbsp;&nbsp;'.$year.'(yr)&nbsp;&nbsp;</u> Roll No. <u>&nbsp;&nbsp;'.$former_student['roll'].'&nbsp;&nbsp;</u> Raiganj Surendranath Mahavidyalaya <u>&nbsp;&nbsp;'.$confirm_date.'&nbsp;&nbsp;</u> to <u>&nbsp;&nbsp;'.date('d-M-Y').'&nbsp;&nbsp;</u>.<br />
    Her Conduct has been <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> and I know nothing against his/her character.<br />
    All sums due by his/her to the College have been paid,including College fees up to <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>.Her Scholarship of Rupees <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> per mensum.<br />
    has been drawn,and paid to his/her<br />
    in This College up to <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>.<br /><br />
    Her attendance in each Course of Lectures is given bellow.
    </p>
  <table width="595" border="1" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="82" height="20"><p>Subject</p></td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
        <td width="74" height="20">&nbsp;</td>
      </tr>
      <tr>
        <td width="96">Number of Lectures</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="20"><p>Deliverd</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="20"><p>Attendence</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="20"><p>Percentage</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
  </table>
  <p>Result Of <span></span> Midterm/Test Examination, <span></span></p>
  
  <table width="595" border="1" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="82" height="20"><p>Subject</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="20"><p>Full Marks</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="20"><p>Pass Marks</p></td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
        <td width="74">&nbsp;</td>
      </tr>
      <tr>
        <td width="96" height="20"><p>Marks Obtained</p></td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
        <td width="72">&nbsp;</td>
      </tr>
      
  </table>
  
  <p> <span></span> <span></span></p>
  <table width="595" border="0" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="250" height="35"><p>Result:</p></td>
        <td width="95">&nbsp;</td>
        <td width="31">&nbsp;</td>
        <td width="9">&nbsp;</td>
        <td width="250">-----------</td>
      </tr>
      </table>
  
  <table width="595" border="0" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="250" height="50"><p>RAIGANJ</p><br >The..............................</td>
        <td width="95">&nbsp;</td>
        <td width="31">&nbsp;</td>
        <td width="9">&nbsp;</td>
        <td width="250"><p>('.$s['princi_name'].')</p><br><p>Principal/Secretary</p></td>
      </tr>
      </table>
 
  
 
   
</div>
</body>
</html>
';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>