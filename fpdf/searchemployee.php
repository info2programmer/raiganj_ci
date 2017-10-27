<?php  require("../../connection.php"); 
ob_start();
$name=$_REQUEST['fname'];
$admno=$_REQUEST['admno'];
$status=$_REQUEST['status'];
$gender=$_REQUEST['gender'];
$batch=$_REQUEST['department'];
$group=$_REQUEST['group'];
$category=$_REQUEST['category'];
$nationality=$_REQUEST['nationality'];
$option_birth=$_REQUEST['option_birth'];
$birth_year=$_REQUEST['birth_year'];
$option_date=$_REQUEST['option_date'];
$year=$_REQUEST['year'];

if($name=='' && $admno=='' && $batch=='' && $group=='' && $category=='' && $nationality=='')
{
  if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE  gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['fname'] && $admno=='' && $batch=='' && $group=='' && $category=='' && $nationality=='')
{
  if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['admno'] && $name=='' && $batch=='' && $group=='' && $category=='' && $nationality=='')
{
	if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['department'] && $name=='' && $admno=='' && $group=='' && $category=='' && $nationality=='')
{
	if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['group'] && $name=='' && $admno=='' && $batch=='' && $category=='' && $nationality=='')
{
if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' AND gender=$gender AND  status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['category'] && $name=='' && $admno=='' && $batch=='' && $group=='' && $nationality=='')
{
if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['nationality'] && $name=='' && $admno=='' && $batch=='' && $category=='' && $gender=='')
{
if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['year'])
{
if($status=='present' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' AND status='present'";
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE joining_date LIKE '%" . mysql_escape_string($_REQUEST['year']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($_REQUEST['birth_year'])
{
if($status=='present' && $gender='all')
  {
	  if($option_birth=='equal')
	  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob='%" . mysql_escape_string($_REQUEST['birth_year']) . "%' AND status='present'";
	  }
	  elseif($option_birth=='<')
	  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob<$birth_year AND status='present'";
	  }
	  elseif($option_birth=='>')
	  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob>$birth_year AND status='present'";
	  }
  }
  elseif($status=='present' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob LIKE '%" . mysql_escape_string($_REQUEST['birth_year']) . "%' AND gender=$gender AND  status='present'";
  }
  elseif($status=='former' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob LIKE '%" . mysql_escape_string($_REQUEST['birth_year']) . "%' AND status='former'";
  }
  elseif($status=='former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob LIKE '%" . mysql_escape_string($_REQUEST['birth_year']) . "%' AND gender=$gender AND WHERE status='former'";
  }
  elseif($status=='all' && $gender='all')
  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob LIKE '%" . mysql_escape_string($_REQUEST['birth_year']) . "%' ";
  }
  elseif($status=='present and former' && $_REQUEST['gender'])
  {
	  $listing_query="SELECT * FROM hr_employee WHERE dob LIKE '%" . mysql_escape_string($_REQUEST['birth_year']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
  }
}
elseif($status=='present' && $gender=='all' && $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' && emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' && department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND status='present'";
}
elseif($status=='present' or $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' or emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' or department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%' AND status='present'";
}
elseif($status=='former' && $gender=='all' or $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' or emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' or department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND status='former'";
}
elseif($status=='former' or $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' or emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' or department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%' AND status='former'";
}
elseif($status=='all' && $gender=='male female' or $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' or emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' or department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%'";
}
elseif($status=='all' or $_REQUEST['fname'] or $_REQUEST['admno'] or $_REQUEST['department'] or $_REQUEST['group'] or $_REQUEST['category'] or $_REQUEST['nationality'])
{
	$listing_query="SELECT * FROM hr_employee WHERE fname LIKE '%" . mysql_escape_string($_REQUEST['fname']) . "%' or emp_no LIKE '%" . mysql_escape_string($_REQUEST['admno']) . "%' or department LIKE '%" . mysql_escape_string($_REQUEST['department']) . "%' or bloodgroup LIKE '%" . mysql_escape_string($_REQUEST['group']) . "%' or category LIKE '%" . mysql_escape_string($_REQUEST['category']) . "%' or nationality LIKE '%" . mysql_escape_string($_REQUEST['nationality']) . "%' AND gender LIKE '%" . mysql_escape_string($_REQUEST['gender']) . "%'";
}
$res1 = mysql_query($listing_query) or die('error in query');
					$row1 = mysql_fetch_array($res1);
					$d=mysql_fetch_array(mysql_query("select * from hr_department where id='".$row1['department']."'"));
		$html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<link rel="stylesheet" href="../css/template.css" type="text/css" />
<style type="text/css">
<!--
table
{
    border:        dashed 1px #444444;
	  width:        100px;
}

table td
{
   
    width:        100px;
}

table.morpion td.j1 { color: #0A0; }
table.morpion td.j2 { color: #A00; }

-->
</style>
<head>
<title>HTML Invoice Template</title>
</head>
<body>
 <hr />
Employee Search Report:
          
         
         <hr/>      
          
          <p style=" padding:5px; font-size:15px; font-weight:200; border:1px solid #666; border-radius:25px;">Employee Listed by 
          '.ucfirst($status).' Employee
          </p>
          
            <table style="width: 100%;border: solid 1px #000; border-collapse: collapse" align="center" border="0" cellspacing="5" cellpadding="5" >
			 <thead>
              <tr>
			    <th  align="left" valign="middle" class="sl">SL No</th>
                <th  align="left" valign="middle" class="sl">First Name</th>
                <th  align="left" valign="middle" class="sl">Employee Id</th>
                <th  align="left" valign="middle" class="sl">Department</th>
				 <th  align="left" valign="middle" class="sl">Joining Date</th>
              </tr>
			   </thead> <tbody>
              ';
			  
             $i=0;
					$res = mysql_query($listing_query) or die('error in query');
					$num=mysql_num_rows($res);
					//echo $num;
                    if(mysql_num_rows($res)!=0)
                    {
                     	while ($row = mysql_fetch_array($res)){
			$i++;
              $html .='<tr>
			   <td  align="left" valign="middle" class="sl_txt">'.$i.'</td>
                <td  align="left" valign="middle" class="sl_txt">'.$row['fname'].'</td>
                <td  align="left" valign="middle" class="sl_txt">'.$row['emp_no'].'</td>
                <td  align="left" valign="middle" class="sl_txt">'.$d['name'].'</td>
				<td  align="left" valign="middle" class="sl_txt">'.$row['joining_date'].'</td>
              </tr>';
               }}else{
              $html .='<tr><td colspan="3" align="center">No records found.</h3></td></tr>';
            }
				  
				  
				   
            $html .=' </tbody></table>
          
</body>

</html>';

//phptopdf_html($html,'pdf/', 'my_pdf_filename.pdf');
//echo "<a href='pdf/my_pdf_filename.pdf' target='_blank'><img src='../image/pdf_report.png' border='0' /></a>";
 
 require_once(dirname(__FILE__).'/html2pdf.class.php');
   $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 3);
        $html2pdf->pdf->SetDisplayMode('fullpage');
	
	//$html2pdf->SetFont('times', 'BI', 20, '', 'false');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('exemple.pdf');
	// $html = ob_get_clean();
?> 