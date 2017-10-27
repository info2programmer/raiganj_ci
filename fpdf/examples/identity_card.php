<?php
require("../../../includes/connection.php");
$id_student=mysql_fetch_array(mysql_query("select * from `student` where `id`='".$_REQUEST['id']."'"));
$se_yr=mysql_fetch_array(mysql_query("select * from `session` where `id`='".$id_student['session_id']."'"));
$FetchMerit=mysql_fetch_array(mysql_query("select * from merit_list where `form_no`='".$id_student['form_no']."'"));
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
.logo {
  position: absolute;
  left: 2px;
  top: 1px;
}
.icard
{
		width:196px;
		height:318px;
		box-sizing:border-box;
		padding:5px;
		border:1px solid #000;
		font-family:Arial, Helvetica, sans-serif;
		position:relative;
		background: #EBFFFE
}
.icard h1 {
  margin-top: -38px;
  font-size: 8.6px;
  text-transform: uppercase;
  background: #084F96;
  color: #fff;
  padding: 5px 5px;
  width:100%;
  height:35px;
  float: left;
  font-weight: bold;
  text-indent: 12px;
  box-sizing: border-box;
}
.icard h2
{
		margin-top: -10px;
		padding:0px;
		font-size:7px;
		text-transform:uppercase;
		padding:3px 0px;
		width:100%;
		float:left;
		color:#084F96;
}
.icard h3 {
  margin-top: -15px;
  padding: 0px;
  font-size: 7px;
  text-transform: uppercase;
  padding: 2px 0px;
  color: #FFFFFF;
  background: #333;
  display: block;
  clear: both;
  width: 59px;
  margin-bottom: 3px;
}
.icard p {
  margin: 0px;
  padding: 0px;
  font-size: 6.5px;
  padding: 1px 0px 7px 0px;
  width: 100%;
  float: left;
  color: #020202;
}
.id_image
{
		width:80px;
		height:80px;
		border:1px solid #E5E5E5;
		margin:5px auto;
		margin-left:-45px;
		display:block;
		clear:both;
		border-radius:10px;
		position:relative;
		overflow:hidden;

}
	.id_image img
	{
		width:80px;
		height:80px;
	}
	.yr
	{
		width:100%;
		float:left;
		background:#333;
		color:#fff;
		padding:2px 0px;
		position:absolute;
		bottom:0px;
		font-size:8px;

	}
	.text_details
	{
		width:100%;
		float:left;
		margin-top:5px;
		
		
		
	}
	.text_details p
	{
		margin:0px;
		padding:0px;
		margin-bottom:7px;
		margin-left:-99px;
		width:100%;
		text-align:left;
		font-size:8.4px;
	}
	.text_details p strong
	{
		color:#CF1A14;
	}
	.text_details ul
	{
		width:100%;
		float:left;
		list-style:none;
		margin:0px;
		padding:0px;
		margin-left:0px;

	}
	.text_details ul li
	{
		float:left;
		padding:0px;
		width:100%;
	}
	.signature
	{
		float: right;
		  width: 50%;
		  position: absolute;
		  bottom: 3px;
		  right: 0px;

	}
	.signature h4
	{
		margin:0px;
		padding:0px;
		font-size:6px;
		margin-bottom:1px;

	}
	.signature p
	{
		margin:0px;
		padding:0px;
		font-size:5px;

	}
</style>
</head>


<body>

<div class="icard" align="center">
<img src="../../../institution/upload_logo/'.$s['logo'].'" class="logo" width="28"/>
<h1>CALCUTTA GIRLS COLLEGE</h1>
    <h2>(naac accredited)</h2>
    <h3>IDENTITY CARD</h3>
    <p>3, GOALTULI LANE, KOLKATA - 13 ,Ph. : 033-22262540<br />
    E-mail : calcuttagirlscollege@gmail.com</p>	
  
 		<div class="id_image" align="center">
        	<img src="../../../../admission/photo/'.$id_student['photo'].'" />
            <div class="yr">'.$se_yr['session_yr'].'</div>
        </div>
  
	<div class="text_details" align="left">
    	<p>Name : <strong>'.$id_student['name'].'</strong></p>
        <p>GUARDIAN Name: '.$id_student['father_mother_name'].'</p>
        <p>Date of Birth : '.$id_student['dob'].'</p>
        <p>Address : '.$id_student['present_address'].' </p>
        <p>Contact No. : '.$id_student['mobile'].'</p>
		<p>Roll.:'.$id_student['university_roll'].' &nbsp;&nbsp; Year: '.$id_student['year'].' &nbsp;&nbsp; Course: '.$id_student['stream'].'</p>
		<p style="margin-bottom:0px;">Blood Group : '.$id_student['blood_group'].' </p>
        <ul >
            <li></li>
        </ul>
        
    </div>
	 <div class="signature" align="center">
    	<img src="../../../institution/upload_logo/'.$s['princi_sig'].'" width="55" height="15"/>
        <h4>Principal/Secretary</h4>
        <p>'.$s['princi_name'].'</p>
    </div>
</div>
</body>
</html>
';
//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

 require_once(dirname(__FILE__).'/../html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A6','fr');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	
?>