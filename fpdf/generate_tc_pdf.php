<?php
require("../include/connection.php");


$admno=$_REQUEST['admno'];
$year=$_REQUEST['year'];

if($year =="1st"){
$select_for_stu="select * from admission_erp where id='$admno'";
}
else{
$select_for_stu="select * from student_dtl where id='$admno'";
}

$res_stu=mysql_query($select_for_stu) or die(mysql_error());
$former_student=mysql_fetch_array($res_stu);
$bid=$former_student['course'];

$sub=mysql_fetch_array(mysql_query("select * from  subjects where id='$bid'"));

$session=mysql_fetch_array(mysql_query("select * from  session where id='".$session['session_id']."'"));


$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];





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
	border:1px solid #000;
	font-family:Arial, Helvetica, sans-serif;
}
.transfer h1
{
	width:100%;
	font-family:"Times New Roman", Times, serif;
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
		width:100%;
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
	<h1>TRANSFER CERTIFICATE</h1>
    <p>No:<span>15</span></p>
    <p>Certified that <u>'.$former_student[''].'</u> daughter of <span>asdf</span> an in inhabitant of <span>asdf</span> Pin <span>asdf</span> Ph. No <span>asdf</span> <br />
    has been a student in the class <span>asdf</span> Roll No. <span>asdf</span> CALCUTTA GIRLS COLLEGE <span>asdf</span> to <span>asdf</span>.<br />
    Her Conduct has been <span>asdf</span> and I know nothing against her charecter.<br />
    All sums due by her to the College have been paid,including College fees up to<span>asdf</span>.Her Scholarship of Rupees <span>asdf</span> per mensum.<br />
    has been drawn,and paid to her<br />
    in This College up to <span>asdf</span>.<br /><br />
    Her attendance in each Course of Lectures is given bellow.
    </p>
  <table width="100%" border="1" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="16%" height="20"><p>Subject</p></td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Number of Lectures</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Deliverd</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Attendence</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Percentage</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
  </table>
  <p>Result Of <span></span> Midterm/Test Examination, <span></span></p>
  
  <table width="100%" border="1" cellspacing="0" cellpadding="0" class="atable">
      <tr>
        <td width="16%" height="20"><p>Subject</p></td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
        <td width="12%">&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Full Marks</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Pass Marks</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><p>Marks Obtained</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
  </table>
  <div class="footer">
  <div class="left_r">
  <p>Result:</p>
  <h6>KOLKATA<br />
  The<span></span>
  </h6>
  </div>
  
  <div class="signature">
    	<p>(DR. Raghunath Datta)<br />
        Principal/Secretary</p>
    </div>
    </div>
</div>
</body>
</html>
';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

 require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>