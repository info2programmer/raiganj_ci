<?php
require("../../../includes/connection.php");

$former_student=mysql_fetch_array(mysql_query("select * from `student` where `id`='".$_REQUEST['id']."'"));
$FetchMerit=mysql_fetch_array(mysql_query("select * from merit_list where `form_no`='".$former_student['form_no']."'"));
$sel_stream=mysql_fetch_array(mysql_query("select * from `stream` where `table_name`='".$FetchMerit['stream']."'"));
$FetchMerit['id'];

$select_s=mysql_query("select * from settings where id='1'")or die (mysql_error());
$s=mysql_fetch_array($select_s);
$image=$s['logo'];

$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.letter_area
	{
		width:650px;
		height:780px;
		border:0px solid #000;
		float:left;
		font-family:Arial, Helvetica, sans-serif;
		padding:35px;
		padding-left:20px;
		box-sizing:border-box;
	}
	.letter_area h1
	{
		font-size:20px;
		text-decoration:underline;
		margin:15px 0px;

	}
	.letter_area p
	{
		width:650px;
		text-align:justify;
		font-size:18px;
		line-height:26px;

	}
	.letter_area p span
	{
		text-decoration:underline;
	}
	.signature
	{
		align:right;
		margin-top:25px;
		

	}
	.signature img
	{
	margin-right:550px;	

	}
	
</style>
</head>

<body>

	<div class="letter_area" align="center">
    	<h1>TO WHOM IT MAY CONCERN</h1>
        <p>This is to certify that Smt. <u>&nbsp;&nbsp;'.$former_student['name'].'&nbsp;&nbsp;</u> D/O, <u>&nbsp;&nbsp;'.$former_student['father_mother_name'].'&nbsp;&nbsp;</u> is/was a bonafide students of this college during the session <u>&nbsp;&nbsp;'.$former_student['confirm_date'].'&nbsp;&nbsp;</u> to <u>&nbsp;&nbsp;'.$former_student['leaving_date'].'&nbsp;&nbsp;</u>.<br /><br />
        She has appeared/passed the <u>&nbsp;&nbsp;'.$former_student['stream'].'&nbsp;&nbsp;</u>';
		if($former_student['sub_honours']!=''){
$html .='<u>in &nbsp;&nbsp;'.$former_student['sub_honours'].'&nbsp;&nbsp;</u>';}			
$html .='from this college under the Calcutta University in <u>&nbsp;&nbsp;'.$former_student['leaving_date'].'&nbsp;&nbsp;</u>.<br /><br />
        So far I know,she bears a good moral character. I wish her all success in life.
        </p>
        <div class="signature">
		<img src="../../../institution/upload_logo/'.$s['princi_sig'].'" width="155" height="35" />
    	<p>('.$s['princi_name'].')<br />
        Principal/Secretary</p>
    </div>
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