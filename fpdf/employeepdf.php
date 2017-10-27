<?php  require("../../connection.php"); 

$query_stu ="select * from hr_employee where id='".$_REQUEST['id']."' ";
$result_stu=mysql_query($query_stu) or die(mysql_error());
$row_stu= mysql_fetch_array($result_stu);
$image=$row_stu['image'];

	$d=mysql_fetch_array(mysql_query("select * from hr_department where id='".$row_stu['department']."' "));

	$d1=mysql_fetch_array(mysql_query("select * from hr_category where id='".$row_stu['category']."' "));
		$p=mysql_fetch_array(mysql_query("select * from hr_emp_position where id='".$row_stu['position']."' "));
			$g=mysql_fetch_array(mysql_query("select * from hr_emp_grade where id='".$row_stu['grade']."' "));	
			$address=mysql_query("select * from hr_employee_step2 where eid='".$_REQUEST['id']."'");
		 $row_stua=mysql_fetch_array($address);
		$html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<link rel="stylesheet" href="../css/template.css" type="text/css" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.container {width: 1000px; height:250px;}
</style>

<head>
<title>HTML Invoice Template</title>
</head>
<body>

<table width="700" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="80" colspan="2" align="center" valign="middle">
			  <?php 
			

</td>
              </tr>
            <tr>
              <td width="256" align="left" valign="middle"><div style="float:left; width:125px; height:125px; border: 8px solid #EFEFD1;">';
			 if($image!='') {
			  
			  $html .="<img src='../uploads/$image' width='125' height='125'/>";
			  } else{ 
			  $html .="<img src='../../image/default_employee.PNG' width='125' height='125'/>";
			  
			  } 
			 
			  $html .='</div></td>
              <td width="444" align="left" valign="top"><div style="float:left; margin-left:30px; width:400px;">
<div class="pro_head">'.$row_stu['fname'].' '.$row_stu['lname'].' </div>
<div class="pro_head_txt" style="color:#b00; margin-top:15px;">Employee ID: '.$row_stu['emp_no'].'</div>
</div></td>
            </tr>
          </table>
<table width="100%" border="0" cellpadding="5" cellspacing="5" style="border-spacing:2px; border-color:#969;">
                  <tr>
                    <td align="right" valign="middle" class="odd left">Joining Date:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['joining_date'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Department:</td>
                    <td align="left" valign="middle" class="even right">'.$d['name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Category:</td>
                    <td align="left" valign="middle" class="odd right">'.$d1['name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Position:</td>
                    <td align="left" valign="middle" class="even right">'.$p['name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left" >Grade:</td>
                    <td align="left" valign="middle" class="odd right">'.$g['name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Job Title:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['job_title'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Manager:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['category'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Gender:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['gender'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Email:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['email'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Status:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['active'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Qualification:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['qualification'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Total Experience:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['total_exp_year'].' Year '.$row_stu['total_exp_month'].' Month</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Experience Info:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['experience_info'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Biometric ID:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['biometric_id'].'</td>
                  </tr>
            
                  <tr>
                    <td width="250" align="right" valign="middle" class="odd left">Date of Birth:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['dob'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Marital Status:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['marital_status'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">No of children:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['no_of_children'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Father Name:</td>
                    <td align="left" valign="middle" class="even right">'. $row_stu['father_name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Mother Name:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['mother_name'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Spouse name:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['spousename'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Blood Group:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stu['blood_group'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Nationality:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stu['nationality'].'</td>
                  </tr>
             
                  <tr>
                    <td width="250" align="right" valign="middle" class="odd left">Home Address:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['home_line1'].' '.$row_stua['home_line2'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">City:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stua['home_city'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">State:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['home_state'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Country:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stua['home_country'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Pincode:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['home_pin'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Office Address:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stua['off_line1'].' '. $row_stua['off_line2'].'</td>
                  </tr>
                  
             
                  <tr>
                    <td width="250" align="right" valign="middle" class="odd left">Office phone 1</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['phone1'].' </td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Office phone 2</td>
                    <td align="left" valign="middle" class="even right">'.$row_stua['phone2'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Mobile</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['mobile'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="even left">Home Phone:</td>
                    <td align="left" valign="middle" class="even right">'.$row_stua['home_phone'].'</td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="odd left">Fax:</td>
                    <td align="left" valign="middle" class="odd right">'.$row_stua['fax'].'</td>
                  </tr>
              </table>
</body>

</html>';

//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";

 require_once(dirname(__FILE__).'/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
	
	 //$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
?> 